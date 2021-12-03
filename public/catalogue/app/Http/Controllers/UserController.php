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

class UserController extends Controller
{
    public function view(){
        echo "hey";
    }
    public function showUsers(){
        $users = User::all();
       // return view('film',['films'=>$films]);
       // $categories = category::all();
        return view('Admin',['users'=>$users]);
        
    }
    public function bannir($id){
  
        $users = User::all();
       User::where('id', $id)->update(['banni' => '1']);
   
       return redirect('admin');
    }

    public function delUser($id){

        User::where('id', $id)->delete();
        return redirect('admin');
 
     }
     public function EditUser(Request $req, $id){

        
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
    public function showEdit($id) {
       
        $User = User::where('id', $id)->get();
        return view('UserFormEdit',['users'=>$User]);
    }


    public function addComment(Request $req){      
        $comments = Commentaire::all();
        $texte= $req->input('texte');
        $idf = $req->input('id');
            $data = [
                'texte'=>$texte
            ];
        Commentaire::create($data);
            $idc = Commentaire::where('texte', $texte)->select('commentaires.id')->get();               

            $data2=[
                'id_utilisateur'=>Auth::user()->id,
                'id_commentaire'=>$idc[0]->id
            ];
            commentaire_user::create($data2);

            $data3=[
                'id_media'=>$idf,
                'id_commentaire'=>$idc[0]->id
            ];

            commentaire_media::create($data3);

            return redirect("view/".$idf);
        }


        public function addLike(Request $req){    
            $idf = $req->input('id');
             $c=0;
            $data=[
                'id_media'=>$idf,
                'id_utilisateurs'=>Auth::user()->id
                
            ];
           
          
            Jaime::create($data);
             return redirect("view/".$idf);
        }
    

        public function addVue(Request $req){    
            $idf = $req->input('id');
            $data=[
                'id_media'=>$idf,
                'id_utilisateurs'=>Auth::user()->id
                
            ];
            Vue::create($data);
            return redirect("view/".$idf);
        }

        public function addToPlayliste(Request $req){      
            $playlists = playliste::all();
            $idmedia = $req->input('id');
            $nameP = $req->input('name');
            $idf = $req->input('id');
            $idp = playliste::where('name', $nameP)->select('playlistes.id')->get();

                $data2=[
                    'id_user'=>Auth::user()->id,
                    'id_playliste'=>$playlists[count($playlists)-1]->id
                ];
                playliste_user::create($data2);
    
                $playlists2 = playliste::all();
                $data3=[
                    'id_media'=>$idmedia,
                    'id_playliste'=> $idp[0]->id
                ];
                media_playliste::create($data3);
                return redirect("view/".$idf);
            }

            public function addPlayliste(Request $req){   
                $idf = $req->input('id'); 
                $name= $req->input('name');         
                $data=[
                    'name'=>$name
                ];
                
                Playliste::create($data);
                $idp = playliste::where('name', $name)->select('playlistes.id')->get();               
                
                $data2=[
                    'id_user'=>Auth::user()->id,
                    'id_playliste'=>$idp[0]->id
                ];
                playliste_user::create($data2);
                return redirect("view/".$idf);
            }

    

}
