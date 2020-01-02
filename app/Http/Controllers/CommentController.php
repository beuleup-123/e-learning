<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Cour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    public function create()
    {
        //$this->authorize('Administrateur');
        $cours = \App\Cour::pluck('nom','id');
        $users = \App\User::pluck('nom','id');
        return view('cours.show', compact('cours','users'));
    }
    public function store(Request $request)
    {
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        $data = $request->validate([
            'description' => 'max:1000000',
        ]);
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        $comment = new Comment();
        $comment->description = $request->input('description');
        $comment->cour_id = $request->input('cour_id');
        $comment->user_id = $request->input('user_id');
        $comment->save();
        return redirect()->back();
    }
}
