@extends('layouts.admin')

@section('title', 'Order Management')
@section('page-title', 'Order Management')
@section('page-subtitle', 'Review customer orders and track fulfillment status')

@section('content')
@php
    $statusStyles = [
        'pending' => 'bg-amber-50 text-amber-700 border-amber-200',
        'confirmed' => 'bg-blue-50 text-blue-700 border-blue-200',
        'processing' => 'bg-violet-50 text-violet-700 border-violet-200',
        'shipped' => 'bg-sky-50 text-sky-700 border-sky-200',
        'completed' => 'bg-emerald-50 text-emerald-700 border-emerald-200',
        'cancelled' => 'bg-red-50 text-red-700 border-red-200',
    ];
@endphp

<div class="mx-auto max-w-7xl space-y-6">
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-3">
        @foreach(\App\Models\Order::STATUSES as $status => $label)
            <a href="{{ route('admin.orders.index', ['status' => $status]) }}"
               class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm hover:border-amber-300 transition">
                <p class="text-[10px] font-bold uppercase tracking-wider text-slate-500">{{ $label }}</p>
                <p class="mt-1 text-2xl font-bold text-slate-800">{{ $statusCounts[$status] ?? 0 }}</p>
            </a>
        @endforeach
    </div>

    <form method="GET" action="{{ route('admin.orders.index') }}" class="flex flex-col sm:flex-row gap-3 rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
        <input type="search" name="search" value="{{ request('search') }}"
               placeholder="Order number, customer, or phone"
               class="flex-1 px-4 py-2.5 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/10">
        <select name="status" class="px-4 py-2.5 border border-slate-200 rounded-lg text-sm text-slate-700 focus:outline-none focus:border-amber-500">
            <option value="">All statuses</option>
            @foreach(\App\Models\Order::STATUSES as $status => $label)
                <option value="{{ $status }}" {{ request('status') === $status ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
        <button class="px-5 py-2.5 rounded-lg bg-slate-900 text-white text-xs font-bold uppercase tracking-wider hover:bg-slate-800">Filter</button>
        @if(request()->hasAny(['search', 'status']))
            <a href="{{ route('admin.orders.index') }}" class="px-4 py-2.5 text-center rounded-lg bg-slate-100 text-slate-600 text-xs font-semibold">Clear</a>
        @endif
    </form>

    <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        @if($orders->isEmpty())
            <div class="p-16 text-center">
                <p class="font-semibold text-slate-700">No orders found</p>
                <p class="mt-1 text-xs text-slate-500">New customer orders will appear here.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500">Order</th>
                            <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500">Customer</th>
                            <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500">Total</th>
                            <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500">Status</th>
                            <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500">Placed</th>
                            <th class="px-5 py-3.5"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($orders as $order)
                            <tr class="hover:bg-slate-50/60">
                                <td class="px-5 py-4">
                                    <a href="{{ route('admin.orders.show', $order) }}" class="font-mono font-bold text-amber-700 hover:text-amber-600">{{ $order->order_number }}</a>
                                    <p class="mt-1 text-xs text-slate-500">{{ $order->quantity }} item(s)</p>
                                </td>
                                <td class="px-5 py-4">
                                    <p class="font-semibold text-slate-800">{{ $order->customer_name }}</p>
                                    <p class="mt-1 text-xs text-slate-500">{{ $order->phone }}</p>
                                </td>
                                <td class="px-5 py-4 font-mono font-bold text-slate-800">৳{{ number_format($order->total) }}</td>
                                <td class="px-5 py-4">
                                    <span class="inline-flex rounded-full border px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider {{ $statusStyles[$order->status] ?? 'bg-slate-50 text-slate-700 border-slate-200' }}">
                                        {{ \App\Models\Order::STATUSES[$order->status] ?? $order->status }}
                                    </span>
                                </td>
                                <td class="px-5 py-4 text-xs text-slate-500">{{ $order->created_at->format('d M Y, h:i A') }}</td>
                                <td class="px-5 py-4 text-right">
                                    <a href="{{ route('admin.orders.show', $order) }}" class="inline-flex px-3 py-2 rounded-lg bg-slate-100 text-xs font-semibold text-slate-700 hover:bg-slate-200">Manage</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="border-t border-slate-100 px-5 py-4">{{ $orders->links() }}</div>
        @endif
    </div>
</div>
@endsection
