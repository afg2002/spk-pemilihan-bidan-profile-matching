<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        public function showLoginForm(Request $request)
        {

            // Cek jika pengguna sudah login
            if (Auth::check()) {
                // Redirect ke dashboard jika sudah login
                return redirect()->route('dashboard');
            }

            return view('login');
        }
    
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
    
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    
        public function logout(Request $request)
        {
            Auth::logout();
    
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/login');
        }
    }