<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    // Método para la sección de Historia
    public function intro()
    {
        return view('sections.intro');
    }

    // Método para la sección de Historia
    public function history()
    {
        return view('sections.history');
    }

    // Método para la sección de Galería
    public function gallery()
    {
        $fotos = Foto::all();  // Aquí se obtienen las fotos de la base de datos.
        return view('sections.gallery', compact('fotos'));
    }

    // Método para la sección de Ubicación
    public function location()
    {
        return view('sections.location');
    }

    // Método para la sección de Testimonios
    public function testimonials()
    {
        return view('sections.testimonials');
    }
}
