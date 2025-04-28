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

    // Vista usuarios
    public function index()
    {
        $fotos = Foto::all();

        return view('index', compact('fotos'));
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
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'imagen' => 'required|image|max:3500|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {

            $ruta = $request->file('imagen')->store('fotos', 'public');
        } else {

            return back()->withErrors(['imagen' => 'Hubo un problema al subir la imagen.']);
        }


        Foto::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'ruta' => $ruta
        ]);


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

    public function edit(Foto $foto)
    {
        return view('dashboard.crud-fotos.update', compact('foto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foto $foto)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'imagen' => 'required|image|max:3500|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('imagen'))
        {
            if (!empty($foto->ruta) && Storage::disk('public')->exists($foto->ruta))
            {
                Storage::disk('public')->delete($foto->ruta);
            }

            $foto->ruta = $request->file('imagen')->store('fotos', 'public');
        }

        $foto->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('dashboard.galeria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $foto = Foto::findOrFail($id);

        if ($foto->ruta)
        {
            Storage::disk('public')->delete($foto->ruta);
        }

        $foto->delete();

        return redirect()->route('dashboard.galeria');
    }
}
