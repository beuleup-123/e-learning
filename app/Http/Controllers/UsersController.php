<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'DESC')->get();
        return view ("user.index",compact('user'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        $data = $request->validate([
            'name'=>'required|min:5',
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
        $user = \App\User::find($id);//on recupere le user
        return view('user.edit', compact('user'));
    }
    public function destroy($id)
    {
        $user = \App\User::find($id);//on recupere le user
        if($user)
            $user->delete();
        return redirect()->route('user_index');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        /*Cour::create(['nom'=>$request->input('nom')]);
        return redirect('/Cour');*/
        if ($user)
        {
            $user->name= $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->status = $request->input('status');
            $user->save();
        }
        return redirect('/user')->with(['success' => "modification enregistré"]);


    }


}
