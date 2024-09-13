<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request)
    {
        $query = Config::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('key', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('value', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('name', 'LIKE', "%{$searchTerm}%");
            });
        }

        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'oldest':
                    $query->oldest();
                    break;
                case 'recent':
                    $query->latest();
                    break;
                default:
                    $query->latest();
                    break;
            }
        } else {
            $query->latest();
        }

        $settings = $query->paginate(10);

        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|unique:configs',
            'value' => 'required|string',
        ]);

        Config::create($validated);

        return redirect()->back()->with('success', 'Setting created successfully');
    }

    public function edit(Config $config)
    {
        return view('admin.settings.edit', compact('config'));
    }

    public function update(Request $request, Config $config)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'value' => 'required|string',
        ]);

        $config->update([
            'name' => $validated['name'],
            'value' => $validated['value']
        ]);

        return redirect('/admin/settings')->with('success', 'Setting updated successfully');
    }

    public function destroy(Config $config)
    {
        $config->delete();

        return redirect('/admin/settings')->with('success', 'Setting deleted successfully');
    }

    public function getRate()
    {
        $rate = Config::where('key', 'RATE')->first()->value ?? Config::RATE;
        return response()->json(['rate' => $rate]);
    }
}
