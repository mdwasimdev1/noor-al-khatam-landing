<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public const STATUSES = [
        'pending' => 'Pending',
        'confirmed' => 'Confirmed',
        'processing' => 'Processing',
        'shipped' => 'Shipped',
        'completed' => 'Completed',
        'cancelled' => 'Cancelled',
    ];

    protected $fillable = [
        'order_number',
        'customer_name',
        'phone',
        'division',
        'address',
        'product_name',
        'quantity',
        'unit_price',
        'shipping_charge',
        'total',
        'status',
        'admin_note',
        'ip_address',
    ];

    protected function casts(): array
    {
        return [
            'quantity' => 'integer',
            'unit_price' => 'integer',
            'shipping_charge' => 'integer',
            'total' => 'integer',
        ];
    }
}
