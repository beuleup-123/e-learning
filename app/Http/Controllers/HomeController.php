<?php
namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\category;
use App\Cour;
use App\User;
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
        $cours = Cour::all()->take(6);
        $category = category::all()->take(5);
        return view('home',compact('category','cours'));
    }
    public function layouts()
    {
        return view('layouts.app');
    }
    public function contact()
    {
        return view('contact');
    }
    public function format()
    {
       // Auth::logout();
        $autre_cour = Cour::orderBy('created_at', 'DESC')->get();
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        $comment = Comment::orderBy('created_at', 'DESC')->get();
        $index_cour = Cour::orderBy('created_at', 'DESC')->paginate(1);
        $category = category::orderBy('created_at', 'DESC')->get();
        //dd($comment);
        return view('projet.formations',compact('cours','index_cour','comment','autre_cour','category'));
       // return view('projet.formation', ['cours' => $cours]);
    }
   /* public function boot()
    {
        Paginator::defaultView('projet.formations');

       Paginator::defaultSimpleView('projet.formations');
    }*/
    public function show($slug){
        $autre_cour = Cour::orderBy('created_at', 'DESC')->get();
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        $comment = Comment::orderBy('created_at', 'DESC')->get();
        //$index_slug = Cour::where('slug',$slug)->first();
        $index_cour = Cour::where('slug',$slug)->paginate(1);
       
        $category = category::orderBy('created_at', 'DESC')->get();
        
        return view("layouts.cours", compact('index_cour','cours','comment','autre_cour','category'));
    }

}
