@extends('layouts.admin')

@section('title', 'Benefits Manager')
@section('page-title', 'Benefits Manager')
@section('page-subtitle', 'Add, edit, and remove benefit bullet points from the landing page')

@section('content')
<div class="mx-auto max-w-4xl">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <p class="text-xs text-slate-500">{{ $benefits->count() }} benefit(s) listed</p>
        <a href="{{ route('admin.benefits.create') }}"
           class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-amber-500/20 transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Add Benefit
        </a>
    </div>

    @if($benefits->isEmpty())
        <div class="bg-white border border-dashed border-slate-300 rounded-xl p-16 text-center">
            <div class="w-14 h-14 rounded-full bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-500 mx-auto mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <p class="font-semibold text-slate-700">No benefits yet</p>
            <p class="text-xs text-slate-500 mt-1">Click "Add Benefit" to get started.</p>
        </div>
    @else
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-slate-100 bg-slate-50/50">
                        <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500 w-12">#</th>
                        <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500 w-16">Color</th>
                        <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500">Benefit Text</th>
                        <th class="px-5 py-3.5 text-left text-[10px] font-bold uppercase tracking-wider text-slate-500 w-20">Order</th>
                        <th class="px-5 py-3.5 text-right text-[10px] font-bold uppercase tracking-wider text-slate-500 w-32">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($benefits as $benefit)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-5 py-3.5 text-xs text-slate-500 font-mono">{{ $benefit->id }}</td>
                        <td class="px-5 py-3.5">
                            <span class="w-5 h-5 rounded-full shadow-md ring-2 ring-white inline-block {{ $benefit->color }} {{ $benefit->shadow }}"></span>
                        </td>
                        <td class="px-5 py-3.5 text-slate-700 font-medium leading-snug">{{ $benefit->text }}</td>
                        <td class="px-5 py-3.5 text-xs text-slate-500 font-mono">{{ $benefit->sort_order }}</td>
                        <td class="px-5 py-3.5">
                            <div class="flex items-center gap-2 justify-end">
                                <a href="{{ route('admin.benefits.edit', $benefit) }}"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-lg transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('admin.benefits.destroy', $benefit) }}"
                                      onsubmit="return confirm('এই বেনিফিটটি মুছে ফেলতে চান?')">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-semibold text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        Del
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</div>
@endsection
