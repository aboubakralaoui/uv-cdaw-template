<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/films/{name}', 'App\Http\Controllers\listeMEdiasController@mafonction1');
//Route::get('/films', 'App\Http\Controllers\listeMEdiasController@mafonction');
Route::get('/test', 'App\Http\Controllers\listeMEdiasController@recupererCat');
Route::get('/film',  'App\Http\Controllers\listeMEdiasController@addFilm2');
Route::get('/filmForm',  'App\Http\Controllers\listeMEdiasController@addFilm');
Route::get('/edit/{id}','App\Http\Controllers\listeMEdiasController@show');
Route::get('/view/{id}','App\Http\Controllers\listeMEdiasController@viewFilm');
Route::post('/edit/{id}','App\Http\Controllers\listeMEdiasController@EditFilm');
Route::get('/delete/{id}','App\Http\Controllers\listeMEdiasController@delFilm');
Route::get('/edits', 'App\Http\Controllers\listeMEdiasController@showFilms');
Route::get('logout', 'App\Http\Controllers\listeMEdiasController@logout');
Route::get('/search', 'App\Http\Controllers\listeMEdiasController@search');
Route::get('/mapage', 'App\Http\Controllers\listeMEdiasController@mapage');

Route::get('/films', 'App\Http\Controllers\listeMEdiasController@showFilmsPage');

Route::get('/admin', 'App\Http\Controllers\UserController@showUsers');
Route::get('/bannir/{id}','App\Http\Controllers\UserController@bannir');
Route::get('/deleteUser/{id}','App\Http\Controllers\UserController@delUser');
Route::get('/editUser/{id}','App\Http\Controllers\UserController@showEdit');
Route::post('/editUser/{id}','App\Http\Controllers\UserController@delUser');
Route::get('/addComment','App\Http\Controllers\UserController@addComment');
Route::get('/addLike','App\Http\Controllers\UserController@addLike');
Route::get('/addVue','App\Http\Controllers\UserController@addVue');
Route::get('/addToPlayliste','App\Http\Controllers\UserController@addToPlayliste');
Route::get('/addPlayliste','App\Http\Controllers\UserController@addPlayliste');

Route::get('/banni',function (){return view('banni') ;}); 

Route::get('/testin', 'App\Http\Controllers\listeMEdiasController@showMedias');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
