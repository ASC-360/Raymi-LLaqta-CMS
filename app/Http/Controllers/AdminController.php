<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Foto;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   
    // Obtener los administradores en el dashboard
    public function index()
    {
        $admins = User::where('tipo', 'admin')->get();

        return view('dashboard.admin', compact('admins'));
    }

    // Obtener las fotos en el dashboard
    public function indexFotoDashboard()
    {
        $fotos = Foto::all();

        return view('dashboard.galeria', compact('fotos'));
    }

   
    public function create()
    {
        return view('dashboard.crud-admin.create');
    }

    // Crear un nuevo administrador
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => 'admin'
        ]);

        return redirect()->route('dashboard-admin.index')->with('success', 'Usuario administrador creado con exito');
    }

    
    public function show(User $user)
    {
        //
    }

    
    public function edit(User $user)
    {
        return view('dashboard.crud-admin.update', compact('user'));
    }

    // Actualizar algun dato del administrador
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return back()->withErrors([
                'password' => 'Contraseña incorrecta',
            ]);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => 'admin'
        ]);

        return redirect()->route('dashboard-admin.index')->with('success', 'Usuario administrador actualizado con exito');
    }

    // Eliminar administrador
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('dashboard-admin.index')->with('success', 'Usuario administrador eliminado con exito');
    }
}
