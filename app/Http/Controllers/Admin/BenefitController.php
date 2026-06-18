<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    private const COLOR_OPTIONS = [
        'bg-emerald-500' => 'shadow-emerald-500/40',
        'bg-amber-400' => 'shadow-amber-400/40',
        'bg-sky-400' => 'shadow-sky-400/40',
        'bg-violet-500' => 'shadow-violet-500/40',
        'bg-rose-500' => 'shadow-rose-500/40',
        'bg-teal-400' => 'shadow-teal-400/40',
        'bg-orange-500' => 'shadow-orange-500/40',
        'bg-emerald-400' => 'shadow-emerald-400/40',
        'bg-amber-500' => 'shadow-amber-500/40',
        'bg-sky-500' => 'shadow-sky-500/40',
        'bg-pink-500' => 'shadow-pink-500/40',
        'bg-lime-500' => 'shadow-lime-500/40',
        'bg-cyan-400' => 'shadow-cyan-400/40',
        'bg-indigo-500' => 'shadow-indigo-500/40',
        'bg-yellow-400' => 'shadow-yellow-400/40',
        'bg-red-500' => 'shadow-red-500/40',
        'bg-blue-500' => 'shadow-blue-500/40',
        'bg-purple-500' => 'shadow-purple-500/40',
    ];

    public function index()
    {
        $benefits = Benefit::orderBy('sort_order')->orderBy('id')->get();

        return view('admin.benefits.index', compact('benefits'));
    }

    public function create()
    {
        $colorOptions = array_keys(self::COLOR_OPTIONS);

        return view('admin.benefits.create', compact('colorOptions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => ['required', 'string', 'max:300'],
            'color' => ['required', 'string', 'in:'.implode(',', array_keys(self::COLOR_OPTIONS))],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $validated['shadow'] = self::COLOR_OPTIONS[$validated['color']];
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Benefit::create($validated);

        return redirect()->route('admin.benefits.index')
            ->with('success', 'বেনিফিট সফলভাবে যুক্ত হয়েছে!');
    }

    public function edit(Benefit $benefit)
    {
        $colorOptions = array_keys(self::COLOR_OPTIONS);

        return view('admin.benefits.edit', compact('benefit', 'colorOptions'));
    }

    public function update(Request $request, Benefit $benefit)
    {
        $validated = $request->validate([
            'text' => ['required', 'string', 'max:300'],
            'color' => ['required', 'string', 'in:'.implode(',', array_keys(self::COLOR_OPTIONS))],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $validated['shadow'] = self::COLOR_OPTIONS[$validated['color']];
        $validated['sort_order'] = $validated['sort_order'] ?? $benefit->sort_order;

        $benefit->update($validated);

        return redirect()->route('admin.benefits.index')
            ->with('success', 'বেনিফিট সফলভাবে আপডেট হয়েছে!');
    }

    public function destroy(Benefit $benefit)
    {
        $benefit->delete();

        return redirect()->route('admin.benefits.index')
            ->with('success', 'বেনিফিট সফলভাবে মুছে ফেলা হয়েছে!');
    }
}
