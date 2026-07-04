<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request, Publication $publication)
    {
        $request->validate([
            'content' => 'required|string|max:1000'
        ]);

        Comment::create([
            'content' => $request->input('content'),
            'user_id' => auth()->id(),
            'publication_id' => $publication->id
        ]);

        return back()->with('success', 'Comentario agregado correctamente');
    }



    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required|string|max:1000'
        ]);


        if (
            auth()->id() !== $comment->user_id &&
            auth()->user()->role !== 'admin'
        ) {

            abort(403);

        }


        $comment->update([
            'content' => $request->input('content')
        ]);


        return back()->with('success', 'Comentario actualizado');

    }



    public function destroy(Comment $comment)
    {


        if (
            auth()->id() !== $comment->user_id &&
            auth()->user()->role !== 'admin'
        ) {

            abort(403);

        }


        $comment->delete();


        return back()->with('success', 'Comentario eliminado');

    }

}