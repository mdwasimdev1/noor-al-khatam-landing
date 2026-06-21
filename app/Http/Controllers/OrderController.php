<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Settings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    private const PRODUCT_NAME = 'নূর আল খাতাম নকশা সোলেমানী আংটি';

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'phone' => ['required', 'string', 'regex:/^(?:\+?88)?01[3-9]\d{8}$/'],
            'address' => ['required', 'string', 'max:1000'],
            'quantity' => ['required', 'integer', 'min:1', 'max:10'],
        ], [
            'phone.regex' => 'সঠিক বাংলাদেশি মোবাইল নম্বর লিখুন।',
        ]);

        $settings = Settings::getSingleton();
        $quantity = (int) $validated['quantity'];
        $unitPrice = (int) $settings->price;
        $order = Order::create([
            'order_number' => $this->generateOrderNumber(),
            'customer_name' => $validated['name'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'product_name' => self::PRODUCT_NAME,
            'quantity' => $quantity,
            'unit_price' => $unitPrice,
            'shipping_charge' => 0,
            'total' => $unitPrice * $quantity,
            'status' => 'pending',
            'ip_address' => $request->ip(),
        ]);

        return redirect()
            ->route('landing')
            ->withFragment('order-form')
            ->with('order_success', "আপনার অর্ডারটি সফলভাবে গ্রহণ করা হয়েছে। অর্ডার নম্বর: {$order->order_number}");
    }

    private function generateOrderNumber(): string
    {
        do {
            $number = 'NAK-'.now()->format('ymd').'-'.strtoupper(Str::random(6));
        } while (Order::where('order_number', $number)->exists());

        return $number;
    }
}
