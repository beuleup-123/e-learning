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
/*Route::get('/',function(){
    return view('home');
});
Route::get('/projet',function(){
    return view('projet.formation');
});*/
Route::get("/produits/{id}","ProductsController@show");

Route::get('/cours', 'CoursController@index')->name('cour_index');
Route::get('/cours/create','CoursController@create')->name('cour_create');
Route::post('/cours/store','CoursController@store')->name('cour_store');
Route::get('/cours/{id}/edit','CoursController@edit')->name('cour_edit');
Route::patch('/cours/{id}/edit','CoursController@update')->name('cour_update');
Route::get('/cours/{id}/destroy','CoursController@destroy')->name('cour_delete');

Route::get('formation', function () {
    $cours = App\Cour::paginate(1);

    $cours->withPath('custom/url');
    return view('projet.formation',compact('cours'));
    //
});

Route::get('/categories', 'CategoriesController@index')->name('category_index');
Route::get('/categories/create','CategoriesController@create')->name('category_create');
Route::post('/categories/store','CategoriesController@store')->name('category_store');
Route::get('/categories/{id}/edit','CategoriesController@edit')->name('category_edit');
Route::patch('/categories/{id}/edit','CategoriesController@update')->name('category_update');
Route::get('/categories/{id}/destroy','CategoriesController@destroy')->name('category_delete');


Route::get('/user', 'UsersController@index')->name('user_index');
Route::get('/user/create','UsersController@create')->name('user_create');
Route::post('/user/create','UsersController@store')->name('user_store');
Route::get('/user/{id}/edit','UsersController@edit')->name('user_edit');
Route::get('/user/{id}/destroy','UsersController@destroy')->name('user_delete');
Route::patch('/user/{id}/edit','UsersController@update')->name('user_update');
Route::get('/projet/formation','HomeController@format')->name('formation');
Route::get('/projet/formation/html','HomeController@html')->name('html');
Route::get('/projet/formation/php','HomeController@php')->name('php');
Route::get('/projet/formation/css','HomeController@css')->name('css');
Route::get('/projet/formation/java','HomeController@java')->name('java');
Route::get('/projet/layout','HomeController@layouts')->name('layout');
Auth::routes();
Route::get('/','HomeController@index')->name('home');


