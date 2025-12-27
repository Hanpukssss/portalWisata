<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate(['email'=>'required|email','password'=>'required']);
        if (Auth::attempt($request->only('email','password'))) {
            $request->session()->regenerate();
            if (Auth::user()->role !== 'admin') {
                Auth::logout();
                return back()->withErrors(['email'=>'Akses ini khusus admin'])->withInput();
            }
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->withErrors(['email'=>'Email atau password salah'])->withInput();
    }

    public function showUserLogin()
    {
        if (auth()->check() && auth()->user()->role === 'user') {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $request->validate(['email'=>'required|email','password'=>'required']);
        if (Auth::attempt($request->only('email','password'))) {
            $request->session()->regenerate();
            if (Auth::user()->role !== 'user') {
                Auth::logout();
                return back()->withErrors(['email'=>'Gunakan akun user untuk memesan tiket'])->withInput();
            }
            return redirect()->intended(route('home'));
        }

        return back()->withErrors(['email'=>'Email atau password salah'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function showRegister()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'user',
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('login')->with('success','Registrasi berhasil, silakan login.');
    }
}
