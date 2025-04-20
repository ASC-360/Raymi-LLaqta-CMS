<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotos = Foto::all();

        return view('index', compact('fotos'));
    }

    public function indexDashboard()
    {
        $fotos = Foto::all();

        return view('dashboard.galeria', compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.crud-fotos.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'imagen' => 'required|image|max:3500|mimes:jpg,png,jpeg', // Validación de la imagen
        ]);

        // Verificar si la imagen fue subida y si es válida
        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {

            // Subir la imagen al directorio 'fotos' dentro de 'public'
            $ruta = $request->file('imagen')->store('fotos', 'public');
        } else {

            // En caso de que no se haya subido la imagen correctamente
            return back()->withErrors(['imagen' => 'Hubo un problema al subir la imagen.']);
        }

        // Crear la nueva entrada en la base de datos con los datos del formulario
        Foto::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'ruta' => $ruta
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->route('dashboard.galeria')->with('success', 'Creado exitosamente');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $foto = Foto::findOrFail($id);

        return view('img', compact('foto'));
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        Storage::disk('public')->delete($foto->ruta);

        $foto->delete();
    }
}
