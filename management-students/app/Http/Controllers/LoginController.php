<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // show form login
    public function index()
    {
        return view("login.login", [
            "title" => "Login"
        ]);
    }

    // handle an authenticate attempt
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            "nis" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/dashboard");
        }
        // if attemp login fail
        return back()->with("status", "NIS atau Password salah");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
