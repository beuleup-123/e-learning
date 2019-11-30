<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    public function show(){
        return view('home');
    }
    public function backoffice(){
        return view('backoffice/index');
    }
}
