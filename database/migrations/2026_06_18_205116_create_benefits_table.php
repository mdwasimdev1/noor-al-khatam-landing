<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('color')->default('bg-emerald-500');   // Tailwind dot class
            $table->string('shadow')->default('shadow-emerald-500/40'); // Tailwind shadow class
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
