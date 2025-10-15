<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:50',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:SUPERADMIN,EDITOR,VIEWER',
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'is_active' => true,
        ]);

        // Log activity
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'CREATE',
            'model_type' => User::class,
            'model_id' => $user->id,
            'description' => "Created new user: {$user->username} ({$user->role})",
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dibuat!');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|max:50|unique:users,username,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            'role' => 'required|in:SUPERADMIN,EDITOR,VIEWER',
            'is_active' => 'boolean',
        ]);

        $updateData = [
            'username' => $request->username,
            'role' => $request->role,
            'is_active' => $request->is_active ?? false,
        ];

        if ($request->password) {
            $updateData['password'] = Hash::make($request->password);
        }

        $user->update($updateData);

        // Log activity
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'UPDATE',
            'model_type' => User::class,
            'model_id' => $user->id,
            'description' => "Updated user: {$user->username} ({$user->role})",
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy(User $user)
    {
        // Prevent self-deletion
        if ($user->id === Auth::id()) {
            return redirect()->back()->with('error', 'Tidak dapat menghapus akun sendiri!');
        }

        $username = $user->username;
        $user->delete();

        // Log activity
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'DELETE',
            'model_type' => User::class,
            'model_id' => $user->id,
            'description' => "Deleted user: {$username}",
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus!');
    }

    public function toggleStatus(User $user)
    {
        // Prevent self-deactivation
        if ($user->id === Auth::id()) {
            return redirect()->back()->with('error', 'Tidak dapat menonaktifkan akun sendiri!');
        }

        $user->update([
            'is_active' => !$user->is_active
        ]);

        $status = $user->is_active ? 'diaktifkan' : 'dinonaktifkan';

        // Log activity
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'UPDATE',
            'model_type' => User::class,
            'model_id' => $user->id,
            'description' => "{$status} user: {$user->username}",
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        return redirect()->back()->with('success', "User berhasil $status!");
    }
}
