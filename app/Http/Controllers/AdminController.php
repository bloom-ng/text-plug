<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'limit' => 'integer|nullable',
            'search' => 'string|nullable'
        ]);

        $limit = $validated['limit'] ?? 10;
        $search = $validated['search'] ?? null;

        $query = Admin::query(); // Use query() to start building the query

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('phone', 'like', '%' . $search . '%')
                    ->orWhere('type', 'like', '%' . $search . '%');
            });
        }

        $admins = $query->paginate($limit);

        return view('dashboard.admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('dashboard.admin.admins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:admins',
            'phone' => 'required|string|unique:admins',
            'password' => 'required|string|min:8',
            'type' => 'required|integer',
        ]);

        Admin::create($request->all());

        return redirect('/admin/admins')->with('success', 'Admin created successfully!');
    }

    public function edit(Admin $admin)
    {
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'phone' => 'required|string|unique:admins,phone,' . $admin->id,
            'type' => 'required|integer',
        ]);

        $admin->update($request->all());

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully!');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admins')->with('success', 'Admin deleted successfully!');
    }
}
