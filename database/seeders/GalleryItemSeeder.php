<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GalleryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'দি রয়্যাল আল-খাতাম',
                'subtitle' => 'ইয়ামেনী লাল আকিক — ৯২৫ স্টার্লিং সিলভার',
                'badge' => 'দুর্লভ রত্ন',
                'badge_color' => 'amber',
                'price' => '$৩৪৯',
                'image' => 'ring_hero.png',
            ],
            [
                'title' => 'দি পার্সিয়ান নিশাপুর',
                'subtitle' => 'পার্সিয়ান ফিরোজা — ৯২৫ স্টার্লিং সিলভার',
                'badge' => 'জনপ্রিয় পছন্দ',
                'badge_color' => 'emerald',
                'price' => '$৩৮৯',
                'image' => 'ring_turquoise.png',
            ],
            [
                'title' => 'দি এমেরাল্ড সভরেন',
                'subtitle' => 'সবুজ পান্না — ৯২৫ স্টার্লিং সিলভার',
                'badge' => 'সীমিত সংস্করণ',
                'badge_color' => 'amber',
                'price' => '$৪৯৯',
                'image' => 'ring_emerald.png',
            ],
        ];

        foreach ($items as $index => $item) {
            GalleryItem::updateOrCreate(
                ['title' => $item['title']],
                [...$item, 'sort_order' => $index + 1],
            );
        }
    }
}
