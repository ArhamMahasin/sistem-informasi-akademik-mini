<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $search = $request->string('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('identifier', 'like', "%{$search}%");
            });
        }

        if ($request->filled('role')) {
            $query->where('role', $request->string('role'));
        }

        $users = $query->latest()->paginate(10)->withQueryString();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'identifier' => ['nullable', 'string', 'max:50', 'unique:users,identifier'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', Rule::in(['admin', 'dosen', 'mahasiswa'])],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        User::create($validated);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'identifier' => ['nullable', 'string', 'max:50', Rule::unique('users', 'identifier')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8'],
            'role' => ['required', Rule::in(['admin', 'dosen', 'mahasiswa'])],
            'is_active' => ['nullable', 'boolean'],
        ]);

        if (empty($validated['password'])) {
            unset($validated['password']);
        }

        $validated['is_active'] = $request->boolean('is_active');

        $user->update($validated);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function resetPassword(Request $request, User $user)
    {
        $validated = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user->update([
            'password' => $validated['password'],
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', "Password untuk {$user->name} berhasil direset.");
    }

    public function profile(Request $request, ?User $user = null)
    {
        $targetUser = $user ?? $request->user() ?? User::first();

        abort_if(!$targetUser, 404, 'Data pengguna tidak ditemukan.');

        return view('admin.users.profile', ['user' => $targetUser]);
    }

    public function updateProfile(Request $request, ?User $user = null)
    {
        $targetUser = $user ?? $request->user() ?? User::first();

        abort_if(!$targetUser, 404, 'Data pengguna tidak ditemukan.');

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($targetUser->id)],
            'identifier' => ['nullable', 'string', 'max:50', Rule::unique('users', 'identifier')->ignore($targetUser->id)],
            'password' => ['nullable', 'string', 'min:8'],
        ]);

        if (empty($validated['password'])) {
            unset($validated['password']);
        }

        $targetUser->update($validated);

        return redirect()
            ->route('admin.users.profile', $targetUser)
            ->with('success', 'Profil pengguna berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Data pengguna berhasil dihapus.');
    }
}