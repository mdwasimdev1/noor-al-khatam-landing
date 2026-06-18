<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $fillable = [
        'text',
        'color',
        'shadow',
        'sort_order',
    ];
}
