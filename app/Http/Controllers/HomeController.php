<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
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
        $category = category::all()->take(6);
        return view('home',compact('category'));
    }
    public function layouts()
    {
        return view('layouts.app');
    }
    public function format()
    {
        //Auth::logout();
      $cours = Cour::orderBy('created_at', 'DESC')->paginate(1);
        $autre_cour = Cour::orderBy('created_at', 'DESC')->get();
       return view('projet.formations',compact('cours','autre_cour'));
       // return view('projet.formation', ['cours' => $cours]);
    }
    public function cours()
    {
        //Auth::logout();
        //$cours = Cour::orderBy('created_at', 'DESC')->paginate(1);
         $all = Cour::orderBy('created_at', 'DESC')->get();
        // $category = \App\category::pluck('nom','id');
        //$category = \App\category::orderBy('created_at', 'DESC')->get();
        return view('projet.formations',compact('all'));
    }
    public function html()
    {
       // Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',1)->get();
        return view('home',compact('cours'));
    }
    public function php()
    {
       // Auth::logout();
        $cours = Cour::all()->take(6)->orderBy('created_at', 'DESC')->where('category_id',2)->get();
        return view('home',compact('cours'));
    }
    public function css()
    {
        //Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',3)->get();
        return view('home',compact('cours'));
    }
    public function java()
    {
        //Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->where('category_id',4)->get();
        return view('home',compact('cours'));
    }
    public  function  backoffice()
    {
        //Auth::logout();
        $cours = Cour::orderBy('created_at', 'DESC')->get();
        $user = User::orderBy('created_at', 'DESC')->get();
        $categories = category::orderBy('created_at', 'DESC')->get();
        return view ("backoffice.index",compact('cours','user','categories'));
    }
   /* public function boot()
    {
        Paginator::defaultView('projet.formations');

       Paginator::defaultSimpleView('projet.formations');
    }*/
}
