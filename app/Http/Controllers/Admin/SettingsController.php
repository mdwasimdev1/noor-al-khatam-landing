<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit()
    {
        $settings = Settings::getSingleton();
        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'price' => ['required', 'numeric', 'min:0'],
            'discount' => ['required', 'numeric', 'min:0', 'gte:price'],
        ], [
            'discount.gte' => 'Original Price must be greater than or equal to Current Price to apply a discount!'
        ]);

        $settings = Settings::getSingleton();
        $settings->update($validated);

        return redirect()->route('admin.settings.edit')->with('success', 'Settings updated successfully!');
    }
}
