@extends('layouts.admin')

@section('title', 'Order ' . $order->order_number)
@section('page-title', 'Order ' . $order->order_number)
@section('page-subtitle', 'Review customer details and update fulfillment')

@section('content')
<div class="mx-auto max-w-5xl space-y-5">
    <a href="{{ route('admin.orders.index') }}" class="inline-flex text-xs font-semibold text-slate-500 hover:text-amber-600">← Back to Orders</a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
        <div class="lg:col-span-2 space-y-5">
            <div class="rounded-xl border border-slate-200 bg-white shadow-sm">
                <div class="px-6 py-4 border-b border-slate-100">
                    <h3 class="font-semibold text-slate-800">Customer & Delivery</h3>
                </div>
                <dl class="grid grid-cols-1 sm:grid-cols-2 gap-5 p-6 text-sm">
                    <div><dt class="text-xs text-slate-500">Customer</dt><dd class="mt-1 font-semibold text-slate-800">{{ $order->customer_name }}</dd></div>
                    <div><dt class="text-xs text-slate-500">Phone</dt><dd class="mt-1 font-semibold"><a class="text-amber-700" href="tel:{{ $order->phone }}">{{ $order->phone }}</a></dd></div>
                    <div><dt class="text-xs text-slate-500">Division</dt><dd class="mt-1 font-semibold text-slate-800">{{ $order->division }}</dd></div>
                    <div class="sm:col-span-2"><dt class="text-xs text-slate-500">Address</dt><dd class="mt-1 text-slate-800 leading-relaxed">{{ $order->address }}</dd></div>
                </dl>
            </div>

            <div class="rounded-xl border border-slate-200 bg-white shadow-sm">
                <div class="px-6 py-4 border-b border-slate-100">
                    <h3 class="font-semibold text-slate-800">Order Summary</h3>
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between gap-5">
                        <div>
                            <p class="font-semibold text-slate-800">{{ $order->product_name }}</p>
                            <p class="mt-1 text-xs text-slate-500">৳{{ number_format($order->unit_price) }} × {{ $order->quantity }}</p>
                        </div>
                        <p class="font-mono font-bold text-slate-800">৳{{ number_format($order->unit_price * $order->quantity) }}</p>
                    </div>
                    <div class="mt-5 pt-5 border-t border-slate-100 space-y-2 text-sm">
                        <div class="flex justify-between text-slate-600"><span>Shipping</span><span>{{ $order->shipping_charge ? '৳'.number_format($order->shipping_charge) : 'Free' }}</span></div>
                        <div class="flex justify-between text-base font-bold text-slate-900"><span>Total</span><span>৳{{ number_format($order->total) }}</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-5">
            <form method="POST" action="{{ route('admin.orders.update', $order) }}" class="rounded-xl border border-slate-200 bg-white shadow-sm">
                @csrf
                @method('PUT')
                <div class="px-6 py-4 border-b border-slate-100">
                    <h3 class="font-semibold text-slate-800">Manage Order</h3>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <label for="status" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Status</label>
                        <select id="status" name="status" class="w-full px-3 py-2.5 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-500">
                            @foreach(\App\Models\Order::STATUSES as $status => $label)
                                <option value="{{ $status }}" {{ old('status', $order->status) === $status ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('status')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="admin_note" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Admin Note</label>
                        <textarea id="admin_note" name="admin_note" rows="5" maxlength="2000"
                                  class="w-full px-3 py-2.5 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-500">{{ old('admin_note', $order->admin_note) }}</textarea>
                        @error('admin_note')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <button class="w-full px-5 py-3 rounded-lg bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider hover:bg-amber-400">Save Changes</button>
                </div>
            </form>

            <div class="rounded-xl border border-slate-200 bg-white p-5 text-xs text-slate-500 shadow-sm space-y-2">
                <p><span class="font-semibold text-slate-700">Placed:</span> {{ $order->created_at->format('d M Y, h:i A') }}</p>
                <p><span class="font-semibold text-slate-700">Last updated:</span> {{ $order->updated_at->format('d M Y, h:i A') }}</p>
                @if($order->ip_address)<p><span class="font-semibold text-slate-700">IP:</span> {{ $order->ip_address }}</p>@endif
            </div>

            <form method="POST" action="{{ route('admin.orders.destroy', $order) }}" onsubmit="return confirm('এই অর্ডারটি স্থায়ীভাবে মুছে ফেলতে চান?')">
                @csrf
                @method('DELETE')
                <button class="w-full px-5 py-3 rounded-lg bg-red-50 text-red-600 text-xs font-semibold hover:bg-red-100">Delete Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
