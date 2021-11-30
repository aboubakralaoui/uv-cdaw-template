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
Route::get('/films/{name}', 'App\Http\Controllers\listeMEdiasController@mafonction1');
Route::get('/films', 'App\Http\Controllers\listeMEdiasController@mafonction');
Route::get('/test', 'App\Http\Controllers\listeMEdiasController@recupererCat');
Route::get('/film',  'App\Http\Controllers\listeMEdiasController@addFilm2');
Route::get('/filmForm',  'App\Http\Controllers\listeMEdiasController@addFilm');
Route::get('/edit/{id}','App\Http\Controllers\listeMEdiasController@show');
Route::get('/view/{id}','App\Http\Controllers\listeMEdiasController@viewFilm');
Route::post('/edit/{id}','App\Http\Controllers\listeMEdiasController@EditFilm');
Route::get('/delete/{id}','App\Http\Controllers\listeMEdiasController@delFilm');
Route::get('/edits', 'App\Http\Controllers\listeMEdiasController@showFilms');
Route::get('logout', 'App\Http\Controllers\listeMEdiasController@logout');

Route::get('/testin', 'App\Http\Controllers\listeMEdiasController@showMedias');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
