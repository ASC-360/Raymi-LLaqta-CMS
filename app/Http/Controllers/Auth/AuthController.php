<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.registro');
    }

    public function crearRegistro(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        if (Auth::user()->tipo === 'admin')
        {
            return redirect()->route('dashboard-admin.index');
        }

        return redirect()->route('intro.view');
    }

    public function iniciarSesion(Request $request)
    {
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales))
        {
            if (Auth::user()->tipo === 'admin')
            {
                return redirect()->route('dashboard-admin.index');
            } else {
                return redirect()->route('intro.view');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.view');
    }
}
