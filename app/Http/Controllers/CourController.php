<?php

namespace App\Http\Controllers;

use App\Cour;
use Illuminate\Http\Request;

class CourController extends Controller
{
    public function accueil()
    {
        $cour =\App\Cour::all();
        return view('accueils',compact('cour'));
    }
    public function index()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        return view ("cours.index",compact('cours'));
    }
    public function create()
    {
        return view('cours.create');

    }
    public function store(Request $request)
    {
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        $cours = new Cour();
        $cours->nom = $request->input('nom');
        $cours->type = $request->input('type');
        $cours->description = $request->input('description');
        $cours->save();
        return redirect()->route('/cours')->with(['success' => "cours enregistré"]);
    }
    public function edit($id)
    {
        $cours = \App\Cour::find($id);//on recupere le produit
        return view('cours.edit', compact('cours'));
    }

    public function update(Request $request, $id)
    {
        $cours = Cour::find($id);
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        if ($cours)
        {
            $cours->nom = $request->input('nom');
            $cours->type = $request->input('type');
            $cours->description = $request->input('description');
            $cours->save();
        }
        return redirect()->route('/cours')->with(['success' => "les modifications sont enregistrées"]);

    }

}
    //

