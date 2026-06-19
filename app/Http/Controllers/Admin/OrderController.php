<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(Request $request): View
    {
        $orders = Order::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->trim()->toString();

                $query->where(function ($query) use ($search) {
                    $query->where('order_number', 'like', "%{$search}%")
                        ->orWhere('customer_name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%");
                });
            })
            ->when(
                $request->filled('status') && array_key_exists($request->string('status')->toString(), Order::STATUSES),
                fn ($query) => $query->where('status', $request->string('status')->toString()),
            )
            ->latest()
            ->paginate(15)
            ->withQueryString();

        $statusCounts = Order::query()
            ->selectRaw('status, count(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return view('admin.orders.index', compact('orders', 'statusCounts'));
    }

    public function show(Order $order): View
    {
        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:'.implode(',', array_keys(Order::STATUSES))],
            'admin_note' => ['nullable', 'string', 'max:2000'],
        ]);

        $order->update($validated);

        return back()->with('success', 'অর্ডার সফলভাবে আপডেট হয়েছে!');
    }

    public function destroy(Order $order): RedirectResponse
    {
        $order->delete();

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'অর্ডার সফলভাবে মুছে ফেলা হয়েছে!');
    }
}
