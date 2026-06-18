<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefits = [
            ['color' => 'bg-emerald-500', 'shadow' => 'shadow-emerald-500/40', 'text' => '১০০% আসল রত্ন পাথর — ল্যাবে যাচাইকৃত'],
            ['color' => 'bg-amber-400', 'shadow' => 'shadow-amber-400/40', 'text' => 'খাঁটি ৯২৫ স্টার্লিং সিলভার ব্যান্ড'],
            ['color' => 'bg-sky-400', 'shadow' => 'shadow-sky-400/40', 'text' => 'হাতে তৈরি ক্যালিগ্রাফি খোদাই'],
            ['color' => 'bg-violet-500', 'shadow' => 'shadow-violet-500/40', 'text' => 'কাস্টম নাম বা কালিমা লেখানোর সুবিধা'],
            ['color' => 'bg-rose-500', 'shadow' => 'shadow-rose-500/40', 'text' => 'যেকোনো আঙুলের নিখুঁত মাপ ও ফিটিং'],
            ['color' => 'bg-teal-400', 'shadow' => 'shadow-teal-400/40', 'text' => 'বিনামূল্যে রিসাইজিং সুবিধা'],
            ['color' => 'bg-orange-500', 'shadow' => 'shadow-orange-500/40', 'text' => 'ইয়ামেনী আকিক, ফিরোজা ও পান্না উপলব্ধ'],
            ['color' => 'bg-emerald-400', 'shadow' => 'shadow-emerald-400/40', 'text' => 'প্রতিটি পণ্যে আসলত্বের সার্টিফিকেট'],
            ['color' => 'bg-amber-500', 'shadow' => 'shadow-amber-500/40', 'text' => 'দ্রুত ও নিরাপদ সারাদেশ ডেলিভারি'],
            ['color' => 'bg-sky-500', 'shadow' => 'shadow-sky-500/40', 'text' => 'প্রিমিয়াম লাক্সারি গিফট বক্সে প্যাকেজিং'],
            ['color' => 'bg-pink-500', 'shadow' => 'shadow-pink-500/40', 'text' => 'ক্যাশ অন ডেলিভারি সুবিধা'],
            ['color' => 'bg-lime-500', 'shadow' => 'shadow-lime-500/40', 'text' => 'ইসলামিক সুন্নাহ অনুযায়ী তৈরি আংটি'],
            ['color' => 'bg-cyan-400', 'shadow' => 'shadow-cyan-400/40', 'text' => 'পুরুষ ও মহিলা উভয়ের জন্য উপযুক্ত'],
            ['color' => 'bg-indigo-500', 'shadow' => 'shadow-indigo-500/40', 'text' => 'বিশেষ উপহার হিসেবে আদর্শ'],
            ['color' => 'bg-yellow-400', 'shadow' => 'shadow-yellow-400/40', 'text' => '১৫+ বছরের দক্ষ কারিগরি অভিজ্ঞতা'],
            ['color' => 'bg-emerald-500', 'shadow' => 'shadow-emerald-500/40', 'text' => '৫০০০+ সন্তুষ্ট গ্রাহকের বিশ্বাস'],
        ];

        foreach ($benefits as $index => $benefit) {
            Benefit::updateOrCreate(
                ['text' => $benefit['text']],
                [...$benefit, 'sort_order' => $index + 1],
            );
        }
    }
}
