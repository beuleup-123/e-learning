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
Route::middleware(["can:Control"])->prefix('/cours')->group(function(){
Route::get('/index', 'CoursController@index')->name('cour_index');
Route::get('/create','CoursController@create')->name('cour_create');
Route::post('/store','CoursController@store')->name('cour_store');
Route::get('/{id}/edit','CoursController@edit')->name('cour_edit');
Route::patch('/{id}/edit','CoursController@update')->name('cour_update');
Route::get('/{id}/destroy','CoursController@destroy')->name('cour_delete');
});
Route::get('/projet/formation/html','CoursController@html')->name('html')->middleware('auth');
Route::get('/projet/formation/php','CoursController@php')->name('php')->middleware('auth');
Route::get('/projet/formation/css','CoursController@css')->name('css')->middleware('auth');
Route::get('/projet/formation/java','CoursController@java')->name('java')->middleware('auth');
/*Route::get('formation', function () {
    $cours = App\Cour::paginate(4);
    $cours->withPath('custom/url');
    return view('projet.formation',compact('cours'));
});*/
Route::middleware(["can:Administrateur"])->prefix('/categories')->group(function(){
    Route::get('/index', 'CategoriesController@index')->name('category_index');
    Route::get('/create','CategoriesController@create')->name('category_create');
    Route::post('/store','CategoriesController@store')->name('category_store');
    Route::get('/{id}/edit','CategoriesController@edit')->name('category_edit');
    Route::patch('{id}/edit','CategoriesController@update')->name('category_update');
    Route::get('/{id}/destroy','CategoriesController@destroy')->name('category_delete');
});
Route::middleware(["can:Control"])->prefix('/prof')->group(function(){
    Route::get('/backoffice', 'ProfsController@backoffice')->name('prof_backoffice');
    Route::get('/index','ProfsController@index')->name('prof_index');
    Route::get('/create','ProfsController@create')->name('prof_create');
    Route::post('/store','ProfsController@store')->name('prof_store');
    Route::get('/{id}/edit','ProfsController@edit')->name('prof_edit');
    Route::get('/{id}/destroy','ProfsController@destroy')->name('prof_delete');
    Route::patch('/{id}/edit','ProfsController@update')->name('prof_update');
});
Route::get('/projet/formation','HomeController@format')->name('formation')->middleware('auth');
//Route::get('/projet/formation','HomeController@cours')->name('formation')->middleware('auth');
Route::get("/projet/formation/{slug}/show", 'HomeController@show')->name('show')->middleware('auth');
Route::get('/projet/layout','HomeController@layouts')->name('layout');
Auth::routes();
Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@index')->name('home');
Route::get('/contact','HomeController@contact')->name('contact')->middleware('auth');

Route::get('/admin/backoffice', 'BackofficeController@backoffice')->name('backoffice')->middleware(["can:Control"]);



Route::get('/comment/create','CommentController@create')->name('comment_create');
Route::post('/comment/store','CommentController@store')->name('comment_store');
Route::get('/comment/{id}/destroy','CommentController@destroy')->name('comment_delete')->middleware(["can:Administrateur"]);


