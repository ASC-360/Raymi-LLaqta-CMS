<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Storage;


class PublicationController extends Controller
{


    public function index(Request $request)
    {
        $publications = Publication::query()


            // Search by title and description
            ->when($request->search, function ($query, $search) {

                $query->where(function ($q) use ($search) {

                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");

                });

            })


            // Filter by neighborhood
            ->when($request->neighborhood, function ($query, $neighborhood) {

                $query->where('neighborhood', $neighborhood);

            })


            ->latest()
            ->get();



        $neighborhoods = [

            'La Laguna',
            'Yance',
            'Santo Domingo',
            'Luya Urco',
            'Higos Urcio',
            'Señor de los Milagros',
            '16 de Octubre'

        ];



        return view('sections.publications', compact(
            'publications',
            'neighborhoods'
        ));
    }

    public function create()
    {
        return view('components.sections.publications.forms.create');
    }

    /**
     * Store
     */
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required|string|max:100',

            'description' => 'nullable|string',

            'neighborhood' => 'required|string',

            'image' => 'required|image|max:10000|mimes:jpg,png,jpeg'

        ]);

        $path = null;

        if ($request->hasFile('image')) {

            $path = $request->file('image')
                ->store('publications', 'public');

        }

        Publication::create([

            'title' => $request->title,

            'description' => $request->description,

            'neighborhood' => $request->neighborhood,

            'path' => $path,

            'user_id' => auth()->id()

        ]);



        return redirect()
            ->route('publications.admin.view')
            ->with('success', 'Publicación creada correctamente');

    }

    /**
     * Show
     */
    public function show(Publication $publication)
    {
        $publication->load([
            'user',
            'comments.user'
        ]);

        return view(
            'sections.publication-show',
            compact('publication')
        );
    }

    /**
     * Edit
     */
    public function edit(Publication $publication)
    {

        return view(
            'components.sections.publications.forms.edit',
            compact('publication')
        );

    }

    /**
     * Update
     */
    public function update(Request $request, Publication $publication)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'neighborhood' => 'required|string',
            'image' => 'nullable|image|max:10000|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('image')) {


            if (
                $publication->path &&
                Storage::disk('public')->exists($publication->path)
            ) {

                Storage::disk('public')
                    ->delete($publication->path);

            }

            $publication->path =
                $request->file('image')
                    ->store('publications', 'public');

        }

        $publication->update([
            'title' => $request->title,
            'description' => $request->description,
            'neighborhood' => $request->neighborhood,
            'path' => $publication->path
        ]);

        return redirect()
            ->route('publications.admin.view')
            ->with('success', 'Publicación actualizada correctamente');
    }

    /**
     * Delete
     */
    public function destroy(Publication $publication)
    {
        if ($publication->path) {
            Storage::disk('public')
                ->delete($publication->path);

        }



        $publication->delete();



        return redirect()
            ->route('publications.admin.view')
            ->with('success', 'Publicación eliminada correctamente');


    }


}