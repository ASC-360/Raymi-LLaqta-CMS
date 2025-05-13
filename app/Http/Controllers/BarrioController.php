<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barrio;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barrios = Barrio::all();

        return view('dashboard.barrio', compact('barrios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.crud-barrio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required|max:80',
        ]);

        Barrio::create([
            'nombre' => $request->name,
        ]);

        return redirect()->route('barrios.index')->with('success', 'Barrio creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barrio = Barrio::findOrFail($id);

        return view('dashboard.crud-barrio.edit', compact('barrio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barrio = Barrio::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:80',
        ]);

        $barrio->update([
            'nombre' => $request->name
        ]);

        return redirect()->route('barrios.index')->with('success', 'Barrio editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barrio = Barrio::findOrFail($id);

        $barrio->delete();

        return redirect()->route('barrios.index')->with('success', 'Barrio eliminado exitosamente');
    }
}
