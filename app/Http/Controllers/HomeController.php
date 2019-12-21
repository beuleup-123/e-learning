<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\category;
use App\Cour;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // Auth::logout();
        return view('home');
    }
    public function layouts()
    {
        return view('layouts.app');
    }
    public function format()
    {
        Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->paginate(1);
        // $cours = Cour::orderBy('created_at', 'DESC')->get();
        $category = \App\category::pluck('nom','id');
        return view('projet.formation',compact('cours','category'));
    }
    public function html()
    {
        Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',1)->get();
        return view('projet.formation',compact('cours'));
    }
    public function php()
    {
        Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',2)->get();
        return view('projet.formation',compact('cours'));
    }
    public function css()
    {
        Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',3)->get();
        return view('projet.formation',compact('cours'));
    }
    public function java()
    {
        Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',4)->get();
        return view('projet.formation',compact('cours'));
    }
    public  function  backoffice()
    {
        //Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        $user = User::orderBy('created_at', 'DESC')->get();
        $categories = category::orderBy('created_at', 'DESC')->get();
        return view ("backoffice.index",compact('cours','user','categories'));
    }
}
