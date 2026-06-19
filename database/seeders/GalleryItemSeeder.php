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
            ['image' => 'ring_hero.png'],
            ['image' => 'ring_turquoise.png'],
            ['image' => 'ring_emerald.png'],
        ];

        foreach ($items as $item) {
            GalleryItem::firstOrCreate($item);
        }
    }
}
