<?php

namespace App\Http\Controllers;

use App\Cour;
use Illuminate\Http\Request;

class CoursController extends Controller
{
  /*  public function accueil()
    {
        $cour =\App\Cour::all();
        return view('accueils',compact('cour'));
    }*/
    public function index()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        return view ("cours.index",compact('cours'));
    }
    public function create()
    {
        $categories = \App\category::pluck('nom','id');
        return view('cours.create', compact('categories'));
    }

    public function store(Request $request)
    {
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        $data = $request->validate([
            'nom'=>'required|min:5',
            'type' => 'required|max:7|string',
            'description' => 'max:1000000'
        ]);

        $cours = new Cour();
        $cours->nom = $request->input('nom');
        $cours->type = $request->input('type');
        $cours->description = $request->input('description');
        $cours->category_id = $request->input('category_id');
        $cours->save();

        return redirect()->route('cour_index')->with(['success' => "cours enregistré"]);


    }
    public function edit($id)
    {
        $cours = \App\Cour::find($id);//on recupere le produit
        $categories = \App\category::pluck('nom','id');
        return view('cours.edit', compact('cours','categories'));
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
            $cours->category_id = $request->input('category_id');
            $cours->save();
        }

        return redirect()->route('cour_index')->with(['success' => "modification enregistré"]);


    }
    public function destroy($id)
    {
        $cours = Cour::find($id);
        if($cours)
            $cours->delete();
        return redirect()->route('cour_index')->with(['success' => "Vos donnees ont ete suprimees"]);
    }


}
//
