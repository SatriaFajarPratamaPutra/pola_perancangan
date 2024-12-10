<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        // Validasi data input dari pengguna
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah pengguna ada dengan kredensial yang diberikan
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Jika berhasil login, arahkan ke halaman utama
            return redirect()->route('mainpage');
        }

        // Jika login gagal, kembalikan dengan error
        return back()->withErrors(['login_error' => 'Invalid credentials.']);
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data pengguna baru
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, arahkan ke halaman admin
            return redirect()->route('adm'); // Pastikan route ini ada
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['login_error' => 'Invalid credentials']);
    }
}
