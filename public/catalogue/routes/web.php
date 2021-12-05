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
Route::get('/index', function () {
    return view('index');
});
//Route::get('/films/{name}', 'App\Http\Controllers\listeMEdiasController@mafonction1');
//Route::get('/films', 'App\Http\Controllers\listeMEdiasController@mafonction');
Route::middleware('auth')->group(function () {
Route::get('/test', 'App\Http\Controllers\listeMEdiasController@recupererCat');
Route::get('/film',  'App\Http\Controllers\listeMEdiasController@addFilm2');
Route::get('/filmForm',  'App\Http\Controllers\listeMEdiasController@addFilm');
Route::get('/edit/{id}','App\Http\Controllers\listeMEdiasController@show');
Route::get('/view/{id}','App\Http\Controllers\listeMEdiasController@viewFilm');
Route::post('/edit/{id}','App\Http\Controllers\listeMEdiasController@EditFilm');
Route::get('/delete/{id}','App\Http\Controllers\listeMEdiasController@delFilm');
Route::get('/edits', 'App\Http\Controllers\listeMEdiasController@showFilms');
Route::get('logout', 'App\Http\Controllers\listeMEdiasController@logout');


//Route::get('/films', 'App\Http\Controllers\listeMEdiasController@showFilmsPage');
Route::get('/series', 'App\Http\Controllers\listeMEdiasController@showSeriesPage');
Route::get('/films', 'App\Http\Controllers\listeMEdiasController@showFilmsPage');
Route::get('/mangas', 'App\Http\Controllers\listeMEdiasController@showMangasPage');
Route::get('/search', 'App\Http\Controllers\listeMEdiasController@search');
Route::get('/mapage', 'App\Http\Controllers\listeMEdiasController@mapage');
Route::get('/admin', 'App\Http\Controllers\UserController@showUsers');
Route::get('/moderateur', 'App\Http\Controllers\UserController@viewComments');
Route::get('/bannir/{id}','App\Http\Controllers\UserController@bannir');
Route::get('/deleteUser/{id}','App\Http\Controllers\UserController@delUser');
Route::get('/editUser/{id}','App\Http\Controllers\UserController@showEdit');
Route::get('/editComment/{id}','App\Http\Controllers\UserController@showEditComment');
Route::get('/editCommentM/{id}','App\Http\Controllers\UserController@showEditCommentM');

Route::post('/editUser/{id}','App\Http\Controllers\UserController@EditUser');
Route::post('/user/edit','App\Http\Controllers\UserController@UserEditProfile');
Route::post('/editComment/{id}','App\Http\Controllers\UserController@EditComment');
Route::post('/editCommentM/{id}','App\Http\Controllers\UserController@EditCommentM');
// Route::get'/films', function(){
//     return view('films');
// }
Route::get('/addComment','App\Http\Controllers\UserController@addComment');
Route::get('/addLike','App\Http\Controllers\UserController@addLike');
Route::get('/addVue','App\Http\Controllers\UserController@addVue');
Route::get('/addToPlayliste','App\Http\Controllers\UserController@addToPlayliste');
Route::get('/addPlayliste','App\Http\Controllers\UserController@addPlayliste');
Route::get('/voir/{id}','App\Http\Controllers\UserController@viewUser');
Route::get('/addToPlaylisteUser','App\Http\Controllers\UserController@addToPlaylisteUser');
Route::get('/banni',function (){return view('banni') ;}); 
Route::get('/testin', 'App\Http\Controllers\listeMEdiasController@showMedias');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
