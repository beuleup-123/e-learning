<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
   public function index()
     {
         $this->authorize('Administrateur');
         $profs = User::orderBy('created_at', 'DESC')->where('status','Professeur')->get();
         return view("prof.index", compact('profs'));
     }
     public function create()
     {
         return view('prof.create');
     }
     public function store(Request $request)
     {
         $data = $request->validate([
             'name' => 'required|min:5',
             'email' => 'required|string|regex:/^.+@.+$/i',
             'password' => 'required|min:8',
         ]);
         $user = new User();
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->password = $request->input('password');
         $user->status = $request->input('status');
         $user->save();
         return redirect()->route('user_index')->with(['success' => "Vos données sont enregistrées"]);
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
            $profs->password = $request->input('password');
            $profs->status = $request->input('status');
            $profs->save();
        }
        return redirect('backoffice')->with(['success' => "modification enregistré"]);
    }
    public function destroy($id)
    {
       // $this->authorize('Administrateur');
        $profs = \App\User::find($id);//on recupere le user
        if ($profs)
            $profs->delete();
        return redirect()->route('backoffice');
    }
}
