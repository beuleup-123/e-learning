<?php

namespace App\Http\Controllers;

use App\Cour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('home');
    }
    public function layouts()
    {
        return view('layouts.app');
    }
    public function format()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        return view('projet.formation',compact('cours'));
    }

    public function html()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',1)->get();
        return view('projet.htmls',compact('cours'));
    }
    public function php()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',1)->get();
        return view('projet.php',compact('cours'));
    }
    public function css()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',1)->get();
        return view('projet.css',compact('cours'));
    }
    public function java()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',1)->get();
        return view('projet.java',compact('cours'));
    }
  
}
