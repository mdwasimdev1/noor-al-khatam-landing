<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'heading_line1',
        'heading_line2',
        'subheading',
        'cta_text',
        'cta_link',
        'stat1_value',
        'stat1_label',
        'stat2_value',
        'stat2_label',
        'stat3_value',
        'stat3_label',
        'hero_image',
    ];

    /**
     * Get the singleton hero section (always ID=1).
     */
    public static function getSingleton(): self
    {
        return self::firstOrCreate(
            ['id' => 1],
            [
                'heading_line1' => 'আংটির রাজকীয়',
                'heading_line2' => 'আলো ধারণ করুন',
                'subheading'    => 'খাঁটি ৯২৫ স্টার্লিং সিলভার এবং সম্পূর্ণ আসল ও সার্টিফাইড রত্ন পাথরের হাতে তৈরি আংটি। আপনার আধ্যাত্মিক ব্যক্তিত্ব ও চিরন্তন শৈলী ফুটিয়ে তুলতে আমাদের কাস্টম ডিজাইন।',
                'cta_text'      => 'আংটির অর্ডার করুন',
                'cta_link'      => '#order-form',
                'stat1_value'   => '১০০%',
                'stat1_label'   => 'আসল রত্ন পাথর',
                'stat2_value'   => '৯২৫',
                'stat2_label'   => 'খাঁটি রৌপ্য',
                'stat3_value'   => 'ফ্রি',
                'stat3_label'   => 'শিপিং ও ডেলিভারি',
                'hero_image'    => 'ring_hero.png',
            ]
        );
    }
}
