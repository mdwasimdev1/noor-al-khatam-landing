<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading_line1')->default('আংটির রাজকীয়');
            $table->string('heading_line2')->default('আলো ধারণ করুন');
            $table->string('subheading', 1000)->default('খাঁটি ৯২৫ স্টার্লিং সিলভার এবং সম্পূর্ণ আসল ও সার্টিফাইড রত্ন পাথরের হাতে তৈরি আংটি। আপনার আধ্যাত্মিক ব্যক্তিত্ব ও চিরন্তন শৈলী ফুটিয়ে তুলতে আমাদের কাস্টম ডিজাইন।');
            $table->string('cta_text')->default('আংটির অর্ডার করুন');
            $table->string('cta_link')->default('#order-form');
            $table->string('stat1_value')->default('১০০%');
            $table->string('stat1_label')->default('আসল রত্ন পাথর');
            $table->string('stat2_value')->default('৯২৫');
            $table->string('stat2_label')->default('খাঁটি রৌপ্য');
            $table->string('stat3_value')->default('ফ্রি');
            $table->string('stat3_label')->default('শিপিং ও ডেলিভারি');
            $table->string('hero_image')->default('ring_hero.png');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
