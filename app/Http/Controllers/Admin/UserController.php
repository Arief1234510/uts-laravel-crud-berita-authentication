<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->withStatus('User berhasil ditambahkan.');
    }

    // --- FUNGSI EDIT (Menampilkan Form Edit) ---
    public function edit(User $user_management)
    {
        // Variabel harus $user_management karena sesuai dengan parameter di route:list Anda
        return view('admin.users.edit', ['user' => $user_management]);
    }

    // --- FUNGSI UPDATE (Menyimpan Perubahan) ---
    public function update(Request $request, User $user_management)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required', 'email', 
                Rule::unique('users')->ignore($user_management->id)
            ],
            'password' => 'nullable|min:6', // Password boleh kosong saat edit
        ]);

        $user_management->name = $request->name;
        $user_management->email = $request->email;

        if ($request->filled('password')) {
            $user_management->password = Hash::make($request->password);
        }

        $user_management->save();

        return redirect()->route('user.index')->withStatus('User berhasil diperbarui.');
    }

    // --- FUNGSI DESTROY (Menghapus Data) ---
    public function destroy(User $user_management)
    {
        // Proteksi: Jangan biarkan admin menghapus dirinya sendiri
        if (auth()->id() === $user_management->id) {
            return redirect()->route('user.index')->with('error', 'Anda tidak bisa menghapus akun sendiri!');
        }

        $user_management->delete();

        return redirect()->route('user.index')->withStatus('User berhasil dihapus.');
    }
}