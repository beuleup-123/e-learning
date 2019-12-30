<?php
namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    public function index()
    {
        $this->authorize('Administrateur');
        $categories = category::orderBy('created_at', 'DESC')->get();
        return view ("category.index",compact('categories'));
    }
    public function create()
    {
        $this->authorize('Administrateur');
        return view('category.create');
    }
    public function store(Request $request)
    {
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        $categories = new category();
        $categories->nom = $request->input('nom');
        $categories->save();
        return redirect('/categories');
    }
    public function destroy($id)
    {
        $this->authorize('Administrateur');
        $categories = \App\category::find($id);
        if($categories)
            $categories->delete();
        return redirect()->route('category_index');
    }
    public function edit($id)
    {
        $this->authorize('Administrateur');
        $categories = \App\category::find($id);//on recupere le produit
        return view('category.edit', compact('categories'));
    }
    public function update(Request $request, $id)
    {
        $categories = category::find($id);
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        if ($categories)
        {
            $categories->nom = $request->input('nom');
            $categories->save();
        }
        return redirect('/categories');
    }
}
