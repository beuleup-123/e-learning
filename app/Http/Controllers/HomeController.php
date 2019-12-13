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

}
