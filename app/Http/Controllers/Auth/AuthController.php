<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        return view('Auth.login');
    }

    // Menampilkan halaman registrasi
    public function registeration()
    {
        return view('Auth.registeration');
    }

    // Memproses data registrasi
    public function registerProcess(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email'    => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // 2. Simpan user ke database
        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 3. Redirect ke halaman login dengan flash message sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Memproses data login (Mendukung Username atau Email)
    public function loginProcess(Request $request)
    {
        // 1. Validasi input form login
        $request->validate([
            'login'    => 'required|string',
            'password' => 'required|string',
        ]);

        // 2. Pengecekan cerdas: Apakah string yang dimasukkan berformat email?
        // Jika ya, gunakan kolom 'email'. Jika tidak, asumsikan itu 'username'.
        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // 3. Siapkan array kredensial untuk proses autentikasi
        $credentials = [
            $loginType => $request->login,
            'password' => $request->password,
        ];

        // Cek apakah user mencentang fitur "Remember Me"
        $remember = $request->has('remember');

        // 4. Lakukan percobaan login
        if (Auth::attempt($credentials, $remember)) {
            // Jika sukses, regenerate session untuk keamanan (mencegah session fixation)
            $request->session()->regenerate();
            
            // Redirect ke halaman yang dituju sebelum login, atau default ke '/' (misalnya halaman welcome)
            return redirect()->intended('/dashboard'); 
        }

        // 5. Jika gagal, kembalikan ke form login dengan pesan error
        return back()->withErrors([
            'login' => 'Username/Email atau password salah.',
        ])->onlyInput('login'); // onlyInput menjaga agar ketikan username/email tidak hilang
    }
}