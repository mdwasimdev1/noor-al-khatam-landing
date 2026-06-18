<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'badge',
        'badge_color',
        'price',
        'image',
        'sort_order',
    ];
}
