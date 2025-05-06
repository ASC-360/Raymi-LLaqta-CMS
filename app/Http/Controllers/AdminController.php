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
        $admins = User::where('tipo', 'admin')->paginate(10);

        return view('dashboard.admin', compact('admins'));
    }

    // Obtener las fotos en el dashboard
    public function indexFotoDashboard()
    {
        $fotos = Foto::with('barrio')->get();

        return view('dashboard.galeria', compact('fotos'));
    }

    // Redirigir al formulario de creacion
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
            'password_user' => 'required|string'
        ]);

        if (Hash::check($request->password_user, Auth::user()->password))
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'tipo' => 'admin'
            ]);

            return redirect()->route('dashboard-admin.index')->with('success', 'Usuario administrador creado con exito');
        } else {
            return back()->withErrors([
                'password_user' => 'La contraseña que escribio no coincide',
            ]);
        }
    }


    public function show(User $user)
    {
        //
    }

    // Redirigir al formularop de actualizacion
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.crud-admin.update', compact('user'));
    }

    // Actualizar algun dato del administrador
    public function update(Request $request, string $id)
    {

        $user = User::findOrFail($id);

        $validar = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);

        if (Hash::check($request->password, $user->password))
        {
            $user->update($validar);

            return redirect()->route('dashboard-admin.index')->with('success', 'Usuario administrador actualizado con exito');
        } else {

            return back()->withErrors([
                'password' => 'Contraseña incorrecta',
            ]);
        }

    }

    // Eliminar administrador
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('dashboard-admin.index')->with('success', 'Usuario administrador eliminado con exito');
    }
}
