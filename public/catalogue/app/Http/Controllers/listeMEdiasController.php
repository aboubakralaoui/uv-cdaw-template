<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\film;
use App\Models\User;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listeMEdiasController extends Controller
{
    public function hello(){
        return view("index");
    }
    public function mafonction( Request $req){
        
        $IdFilm = $req->input("id");
        $nomFilm = $req->input("nom");
        echo  $IdFilm ;
        echo "<br>";
        echo  $nomFilm ;
    }
    public function mafonction1($name){
        
       echo $name;
    }
    public function recupererCat(){
        $categories = category::all();
        return view('test',['categories'=>$categories]);
        
    }
    public function addFilm(){
        $films = film::all();
       // return view('film',['films'=>$films]);
        $categories = category::all();
        return view('filmForm',['categories'=>$categories]);
        
    }
    public function showFilm(Request $req){
        redirect('edits');
    }

    public function addFilm2(Request $req){

        $name = $req->input("name");
        $director = $req->input("director");
        $category = $req->input("category");
        $duree = $req->input("duree");
        $annee = $req->input("annee");
        $acteur_principale = $req->input("acteur_principale");
        $Description = $req->input("Description");
        $path = $req->input("path");

        $data = [
            'name'=>$name,
            'director'=>$director,
            'category'=>$category,
            'duree'=>$duree,
            'annee'=>$annee,
            'acteur_principale'=>$acteur_principale ,
            'Description'=>$Description,
            'path'=>$path
            

        ];
        film::create($data);
   
       // print_r($req->input());
       return redirect('edits');
     

    }
    public function show($id) {
        //$films = film::all();
        $categories = category::all();
        $films = film::where('id', $id)->get();
        return view('filmFormEdit1',['films'=>$films],['categories'=>$categories]);
        }

    public function EditFilm(Request $req, $id){

        
        $name = $req->input("name");
        $director = $req->input("director");
        $category = $req->input("category");
        $duree = $req->input("duree");
        $annee = $req->input("annee");
        $acteur_principale = $req->input("acteur_principale");
        $Description = $req->input("Description");
        $path = $req->input("path");
       film::where('id', $id)->update(['name' => $name,'category'=>$category,'director'=>$director,'duree'=>$duree,'annee'=>$annee,'acteur_principale'=>$acteur_principale,'Description'=>$Description,'path'=>$path]);
       print_r($req->input());
       return redirect('edits');
   

    }
    public function delFilm($id){

       film::where('id', $id)->delete();
       return redirect('edits');

    }



    public function showFilms(){
        $films = film::all();
       // return view('film',['films'=>$films]);
        $categories = category::all();
        return view('filmFormEdit',['films'=>$films]);
        
    }
    public function viewFilm($id){
        
        $films = film::where('id', $id)->get();
        return view('film',['films'=>$films]);
        
    }
    public function showMedias(){
        $medias = media::all();
        $user = Auth::user();
        $id = Auth::id();
       // return view('film',['films'=>$films]);
        //$categories = category::all();
      //  return view('testing',['medias'=>$medias], ['user'=>$user]);
      echo $user['email'];
        
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }


}
