<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Sensor;
use illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    public function register() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $request->validate([
            'username' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|min:4|confirmed',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
            ->withSuccess('You have successfully registered & logged in!');
    }

    public function login() {
        return view('auth.login');
    }

    public function auth(Request $request, Auth $auth) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');
        if($auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        // jika proses autentikasi gagal maka akan di redirect ke awal
        return back()->withErrors([
            'email' => 'email atau password tidak ditemukan',
        ])->onlyInput('email');
    }

    public function dashboard() {
        $ph = Sensor::all();
        if(Auth::check()) {
            return view('auth.dashboard', compact('ph'));
        }

        return redirect()->route('login');
    }

    public function logout(Request $request, Auth $auth) {
        $auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
