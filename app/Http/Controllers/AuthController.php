<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nrk' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['nrk' => $credentials['nrk'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors(['Invalid credentials']);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
