<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%");
            });
        }

        if ($request->has('sort')) {
            $sort = $request->input('sort');
            if ($sort === 'oldest') {
                $query->oldest();
            } elseif ($sort === 'newest') {
                $query->latest();
            }
        } else {
            $query->latest();
        }

        $users = $query->paginate(10);

        return view('admin.users.index', compact('users'))
            ->with('search', $request->input('search'))
            ->with('sort', $request->input('sort'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($validated);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

    public function suspend(User $user)
    {
        $user->update(['is_suspended' => true]);
        return redirect()->route('admin.users.index')->with('success', 'User suspended successfully');
    }

    public function unsuspend(User $user)
    {
        $user->update(['is_suspended' => false]);
        return redirect()->route('admin.users.index')->with('success', 'User unsuspended successfully');
    }
}
