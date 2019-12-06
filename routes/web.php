<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return view('home');
});
Route::get('/projet/formation.blade.php',function(){
    return view('projet/formation');
});
/*
Route::get("/produits/{id}",function ($id){
	return "je suis le produit $id";
});
*/
Route::get("/produits/{id}","ProductsController@show");
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
