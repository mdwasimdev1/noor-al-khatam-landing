<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('gallery_items', function (Blueprint $table) {
            if (Schema::hasColumn('gallery_items', 'title')) {
                $table->dropColumn('title');
            }
            if (Schema::hasColumn('gallery_items', 'subtitle')) {
                $table->dropColumn('subtitle');
            }
            if (Schema::hasColumn('gallery_items', 'badge')) {
                $table->dropColumn('badge');
            }
            if (Schema::hasColumn('gallery_items', 'badge_color')) {
                $table->dropColumn('badge_color');
            }
            if (Schema::hasColumn('gallery_items', 'price')) {
                $table->dropColumn('price');
            }
            if (Schema::hasColumn('gallery_items', 'sort_order')) {
                $table->dropColumn('sort_order');
            }
            if (Schema::hasColumn('gallery_items', 'image_path')) {
                $table->dropColumn('image_path');
            }
        });
    }

    public function down(): void
    {
        Schema::table('gallery_items', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('badge')->nullable();
            $table->string('badge_color')->default('amber')->nullable();
            $table->string('price')->nullable();
            $table->integer('sort_order')->default(0)->nullable();
            $table->string('image_path')->nullable();
        });
    }
};
