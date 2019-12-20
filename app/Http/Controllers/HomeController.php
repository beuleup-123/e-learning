<?php

namespace App\Http\Controllers;

use App\category;
use App\Cour;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        Auth::logout();
        return view('home');
    }
      public function layouts()
    {
        return view('layouts.app');
    }
    public function format()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->paginate(1);
       // $cours = Cour::orderBy('created_at', 'DESC')->get();
        $category = \App\category::pluck('nom','id');
        return view('projet.formation',compact('cours','category'));
    }
    public function html()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',1)->get();
        return view('projet.formation',compact('cours'));
    }
    public function php()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',2)->get();
        return view('projet.formation',compact('cours'));
    }
    public function css()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',3)->get();
        return view('projet.formation',compact('cours'));
    }
    public function java()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',4)->get();
        return view('projet.formation',compact('cours'));
    }
}
