<?php

namespace App\Http\Controllers;
use App\Cour;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfsController extends Controller
{
    public function index()
    {
        $this->authorize('Administrateur');
        $profs = User::orderBy('created_at', 'DESC')->where('status','Professeur')->get();
        return view("prof.index", compact('profs'));
    }
    public function create()
    {
        $this->authorize('Administrateur');
        return view('prof.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'status' => ['required', 'string' ]
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request['password']);
        $user->status = $request->input('status');
        $user->save();
        return redirect()->route('prof_index')->with(['success' => "Vos données sont enregistrées"]);
    }

   public function edit($id)
   {
       $this->authorize('Administrateur');
       $profs = \App\User::find($id);//on recupere le user
       return view('prof.edit', compact('profs'));
   }
   public function update(Request $request, $id)
   {
       $profs = User::find($id);
       /*Cour::create(['nom'=>$request->input('nom')]);
       return redirect('/Cour');*/
       if ($profs) {
           $profs->name = $request->input('name');
           $profs->email = $request->input('email');
           $profs->password =Hash::make($request['password']) ;//$request->Hash::input('password');
           $profs->status = $request->input('status');
           $profs->save();
       }
       return redirect()->route('prof_index')->with(['success' => "modification enregistré"]);
   }
   public function destroy($id)
   {
       $this->authorize('Administrateur');
       $profs = \App\User::find($id);//on recupere le user
       if ($profs)
           $profs->delete();
       return redirect()->route('prof_index');
   }
    public  function  backoffice()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        $profs = User::orderBy('created_at', 'DESC')->where('status','Professeur')->get();
        $cours_count = Cour::all()->count();
        return view ("prof.dashbord",compact('cours','cours_count'));
    }
}
