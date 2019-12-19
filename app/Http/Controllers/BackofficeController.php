<?php

namespace App\Http\Controllers;

use App\category;
use App\Cour;
use App\User;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public  function  backoffice()
    {
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        $user = User::orderBy('created_at', 'DESC')->get();
        $categories = category::orderBy('created_at', 'DESC')->get();
        return view ("backoffice.index",compact('cours','user','categories'));
    }
}
