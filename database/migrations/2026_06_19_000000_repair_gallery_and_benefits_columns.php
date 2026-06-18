<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('gallery_items')) {
            Schema::table('gallery_items', function (Blueprint $table) {
                if (! Schema::hasColumn('gallery_items', 'image')) {
                    $table->string('image')->nullable()->after('price');
                }

                if (! Schema::hasColumn('gallery_items', 'badge_color')) {
                    $table->string('badge_color')->default('amber')->after('badge');
                }

                if (! Schema::hasColumn('gallery_items', 'sort_order')) {
                    $table->integer('sort_order')->default(0)->after('image');
                }
            });

            if (
                Schema::hasColumn('gallery_items', 'image_path')
                && Schema::hasColumn('gallery_items', 'image')
            ) {
                DB::table('gallery_items')
                    ->whereNull('image')
                    ->update(['image' => DB::raw('image_path')]);
            }
        }

        if (
            Schema::hasTable('benefits')
            && ! Schema::hasColumn('benefits', 'sort_order')
        ) {
            Schema::table('benefits', function (Blueprint $table) {
                $table->integer('sort_order')->default(0)->after('text');
            });
        }
    }

    public function down(): void
    {
        // This migration repairs legacy schemas. Its changes are intentionally
        // retained on rollback to avoid deleting copied image data.
    }
};
