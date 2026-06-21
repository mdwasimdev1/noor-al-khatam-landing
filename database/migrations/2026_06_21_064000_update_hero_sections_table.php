<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('hero_sections', function (Blueprint $table) {
            $table->string('heading', 400)->nullable()->after('id');
        });

        // Copy existing heading lines to new heading field
        \App\Models\HeroSection::get()->each(function($hero) {
            $hero->heading = trim($hero->heading_line1 . ' ' . $hero->heading_line2);
            $hero->save();
        });

        Schema::table('hero_sections', function (Blueprint $table) {
            $table->dropColumn(['heading_line1', 'heading_line2']);
            $table->string('heading', 400)->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('hero_sections', function (Blueprint $table) {
            $table->string('heading_line1', 200)->nullable()->after('id');
            $table->string('heading_line2', 200)->nullable()->after('heading_line1');
        });

        // Try to split back (best effort)
        \App\Models\HeroSection::get()->each(function($hero) {
            $parts = explode(' ', $hero->heading, 2);
            $hero->heading_line1 = $parts[0] ?? '';
            $hero->heading_line2 = $parts[1] ?? '';
            $hero->save();
        });

        Schema::table('hero_sections', function (Blueprint $table) {
            $table->dropColumn('heading');
            $table->string('heading_line1', 200)->nullable(false)->change();
            $table->string('heading_line2', 200)->nullable(false)->change();
        });
    }
};
