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
Route::get('/projet',function(){
    return view('projet.formation');
});
Route::get("/produits/{id}","ProductsController@show");

Route::get('/cours', 'CourController@index')->name('cour_index');
Route::get('/cours/accueil','CourController@accueil');
Route::get('/cours/create','CourController@create')->name('cour_creates');
Route::post('/cours/create','CourController@store')->name('cour_store');

Route::get('cours/{id}/edit','CourController@edit')->name('cour_edit');
Route::patch('cours/{id}/edit','CourController@update')->name('cour_update');

Route::get('/projet/formation','HomeController@format')->name('formation');
Route::get('/projet/layout','HomeController@layouts')->name('layout');

Auth::routes();
Route::get('/home','HomeController@index')->name('home');


