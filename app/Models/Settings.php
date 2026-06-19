<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'price',
        'discount',
    ];

    public static function getSingleton()
    {
        $settings = self::first();
        if (!$settings) {
            $settings = self::create([
                'price' => 1950,
                'discount' => 3000,
            ]);
        }
        return $settings;
    }
}
