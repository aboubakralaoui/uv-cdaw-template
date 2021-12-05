<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\film;
use App\Models\Commentaire;
use App\Models\User;
use App\Models\Vue;
use App\Models\Media;
use App\Models\Playliste;
use App\Models\Jaime;
use Illuminate\Http\Request;
use App\Models\commentaire_user;
use App\Models\commentaire_media;
use App\Models\playliste_user;
use App\Models\media_playliste;
use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
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
        echo  $nomFilm;
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
    public function showFilmsPage(){
        $films = media::all();

        $myPlaylists= DB::table('playliste_user')
                    ->join('playlistes', 'playlistes.id', '=', 'playliste_user.id_playliste')
                    ->where('id_user',Auth::user()->id)
                    ->select('playlistes.name')
                    ->get();
       
                    //echo count($myPlaylists);
        return view('films',['films'=>$films]);
        
    }
    public function showSeriesPage(){

        $series= DB::table('media')
                   
                    ->where('type','TVSeries')
                   
                    ->get();
       
                    //echo count($myPlaylists);
        return view('series',['series'=> $series]);
        
    }
    public function showMangasPage(){

        $mangas= DB::table('media')
                   
                    ->where('type','monga')
                   
                    ->get();
       
                    //echo count($myPlaylists);
        return view('mangas',['mangas'=> $mangas]);
        
    }
    public function viewFilm($id){
        $test= 1;
        
        $myPlaylists= DB::table('playliste_user')
        ->join('playlistes', 'playlistes.id', '=', 'playliste_user.id_playliste')
        ->where('id_user',Auth::user()->id)
        ->select('playlistes.name')
        ->distinct()
        ->get();
        $c = 0;
        for ($i = 0; $i<count($myPlaylists);$i++){
            $testf[$i] = $myPlaylists[$i]->name;
            $c++;
        }
 
        $d=0;

        $idc = Jaime::where('id_media', $id)
        ->where('id_utilisateurs',Auth::user()->id)
        ->select('id')->get();               
        if (count($idc)==0){
           
            $d = 1;
        }


        $l=0;
        $idv = Vue::where('id_media', $id)
        ->where('id_utilisateurs',Auth::user()->id)
        ->select('id')->get(); 

        if (count($idv)==0){ 
            $l = 1;
        }

        $Comments = DB::table('commentaire_user')
        ->join('commentaires', 'commentaire_user.id_commentaire', '=', 'commentaires.id')
        ->join('commentaire_media', 'commentaire_media.id_commentaire', '=', 'commentaires.id')
        ->join('users', 'commentaire_user.id_utilisateur', '=', 'users.id')
        ->select('commentaires.texte','users.name')
        ->where('id_media',$id)
        ->get();

         $films = Media::where('id_media', $id)->get();

         return view('film',['films'=>$films, 'c'=>$c, 'd'=>$d,'l'=>$l,'myPlaylists'=>$myPlaylists,'Comments'=>$Comments] );

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

    public function search(Request $req){
        $q = $req->input('q');
        $films = Media::where('titre','like',"%$q%")
              ->orWhere('description','like',"%$q%")
              ->paginate(6);
              return view('search',['films'=>$films]);
            
    }

    public function mapage(request $req){
        $films = media::all();
        $idp = $req->input('idp')  ;
    

        $myPlaylists= DB::table('playliste_user')
                    ->join('playlistes', 'playlistes.id', '=', 'playliste_user.id_playliste')
                    ->where('id_user',Auth::user()->id)
                    ->select('playlistes.name')
                    ->get();
                  $c = 0;
                    for ($i = 0; $i<count($myPlaylists);$i++){
                        $testf[$i] = $myPlaylists[$i]->name;
                        $c++;
                    } 

        
        $myVues= DB::table('media')
                    ->join('vues', 'media.id_media', '=', 'vues.id_media')
                    ->where('id_utilisateurs',Auth::user()->id)
                  
                    ->get();
        $myFarories= DB::table('jaimes')
                    ->join('users', 'users.id', '=', 'jaimes.id_utilisateurs')
                    ->join('media', 'media.id_media', '=', 'jaimes.id_media')
                    ->where('users.id',Auth::user()->id)
                    //
                    ->get();
        $d= 0;
                    for ($i = 0; $i<count($myFarories);$i++){
                        $testf[$i] = $myFarories[$i]->titre;
                        $d++;
                    } 
        $abonnéM = playliste_user::where('id_user',Auth::user()->id)
                    ->where('id_playliste',22)
                    ->get();
        $abonnéG = playliste_user::where('id_user',Auth::user()->id)
                    ->where('id_playliste',23)
                    ->get();
        $abonnéS = playliste_user::where('id_user',Auth::user()->id)
                    ->where('id_playliste',24)
                    ->get();           

        return view('mapage',['films'=>$films, 'myPlaylists'=>$myPlaylists,'myVues'=>$myVues, 'c'=>$c,'d'=>$d,'abonnéM'=>$abonnéM,'abonnéG'=>$abonnéG,'abonnéS'=>$abonnéS,'myFavories'=>$myFarories]);
        
    }

}
