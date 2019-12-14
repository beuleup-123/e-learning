<?php

namespace App\Http\Controllers;

use App\Cour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;



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
            'description' => 'max:1000000',
           "cour_fichier" => 'nullable| mimes:jpeg,png,jpg,gif,pdf,doc | max: 2548'
        ]);
        $cours = new Cour();
        //On verfie si une cours est envoyée
        if($request->has('cour_fichier')){
            //On enregistre le fichier dans un dossier
            $fichier = $request->file('cour_fichier');
            //Nous allons definir le nom de notre fichier en combinant le nom du cours et un timestamp
            $fichier_name = Str::slug($request->input('cour_fichier')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/cours dans public
            $folder = '/uploads/cours/';
            //Nous allons enregistrer le chemin complet du fichier dans la BD
            $cours->image = $folder.$fichier_name.'.'.$fichier->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer le fichier dans le dossier en utilisant la methode uploadFile();
            $this->uploadFile($fichier, $folder, 'public', $fichier_name);
        }

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
        $data = $request->validate([
            'nom'=>'required|min:5',
            'type' => 'required|max:7|string',
            'description' => 'max:1000000',
            "cour_fichier" => 'nullable | mimes:jpeg,png,jpg,gif,pdf,doc | max: 2548'
        ]);

        $cours = Cour::find($id);
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        if ($cours)
        {
            if($request->has('cour_fichier')){
                //On enregistre l'image dans une variable
                $fichier = $request->file('cour_fichier');
                if(file_exists(public_path().$cours->image))//On verifie si le fichier existe
                    Storage::delete(asset($cours->image));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/cours dans public
                $folder = '/uploads/cours/';
                $fichier_name = Str::slug($request->input('cour_fichier')).'_'.time();
                $cours->image = $folder.$fichier_name.'.'.$fichier->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer fichier dans le dossier en utilisant la méthode uploadFile();
                $this->uploadFile($fichier, $folder, 'public', $fichier_name);
            }

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

    public function uploadFile(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }




    }
//
