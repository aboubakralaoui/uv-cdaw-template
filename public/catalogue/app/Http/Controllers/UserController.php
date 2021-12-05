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
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\commentaire_user;
use App\Models\commentaire_media;
use App\Models\playliste_user;
use App\Models\media_playliste;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     public function UserEditProfile(Request $req){

        $nom = $req->input('nom');
        $prenom = $req->input('prenom');
        $email = $req->input('email');
         $id = $req->input('id');
        // $image = $req->input('image');
       
       if ($req->hasfile('image')){
           
           $file = $req->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('assets/img/',$filename);
           User::where('id', $id)->update(['profile_photo_path'=>$filename]);
           return redirect('/user/profile');
       }
       else {
           return $req;
           User::where('id', $id)->update(['profile_photo_path'=>'']);

       }

   

    }
    
    public function  EditUser(Request $req, $id){
        $role = $req->input('role');
    //    echo $role;
    //    echo $id;
        User::where('id', $id)->update(['role'=>$role]);
       //print_r($req->input());
       return redirect('admin');
   

    }

    public function EditComment(Request $req, $id){
        $texte = $req->input('texte');
        $texte2 = "(M) :".$texte;
        Commentaire::where('id', $id)->update(['texte'=>$texte2]);
        $infos= DB::table('users')
        ->join('commentaire_user', 'users.id', '=', 'commentaire_user.id_utilisateur')
        ->join('commentaires', 'commentaires.id', '=', 'commentaire_user.id_commentaire')
        ->where('commentaire_user.id_commentaire',$id)
        ->where('commentaires.texte',$texte2)            
        ->distinct()
        ->get();
        //print_r($infos[0]->id_utilisateur);
        // select * from users JOIN commentaire_user on commentaire_user.id_utilisateur = users.id JOIN
        // commentaires on commentaires.id = commentaire_user.id_commentaire ;
    return redirect("voir/".$infos[0]->id_utilisateur);
    }




    public function showEdit($id){
        $users =  User::where('id',$id)->get();
        return view('UserFormEdit',['users'=>$users]);
    }
    public function showEditComment($id){
        $Commentaire =  Commentaire::where('id',$id)->get();
        return view('CommentEdit',['Commentaire'=>$Commentaire]);
    }
    public function showEditCommentM($id){
        $Commentaire =  Commentaire::where('id',$id)->get();
        return view('CommentEditM',['Commentaire'=>$Commentaire]);
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
               // echo $idf;      
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
            public function addToPlaylisteUser(Request $req){   
                $idp = $req->input('idp');           
                $data2=[
                    'id_user'=>Auth::user()->id,
                    'id_playliste'=>$idp
                ];
                playliste_user::create($data2);
                return redirect("mapage");
            }
            public function viewUser($id){
                
                $infos1= DB::table('users')
                ->where('users.id',$id)            
                ->distinct()
                ->get();
                $c=0; 

                $infos= DB::table('users')
                ->join('commentaire_user', 'users.id', '=', 'commentaire_user.id_utilisateur')
                ->join('commentaires', 'commentaires.id', '=', 'commentaire_user.id_commentaire')
                ->join('commentaire_media', 'commentaire_media.id_commentaire', '=', 'commentaires.id')
                ->join('media', 'commentaire_media.id_media', '=', 'media.id_media')
                ->where('users.id',$id)            
                ->distinct()
                ->get();

                $infos= DB::table('users')
                ->join('commentaire_user', 'users.id', '=', 'commentaire_user.id_utilisateur')
                ->join('commentaires', 'commentaires.id', '=', 'commentaire_user.id_commentaire')
                ->join('commentaire_media', 'commentaire_media.id_commentaire', '=', 'commentaires.id')
                ->join('media', 'commentaire_media.id_media', '=', 'media.id_media')
                ->where('users.id',$id)            
                ->distinct()
                ->get();
                
                if (count($infos) >0){
                    $c=1;
                 return view('infoUser',['infos'=>$infos,'infos1'=>$infos1,'c'=>$c] );}

                 else 
                 {
                    return view('infoUser',['infos1'=>$infos1,'c'=>$c] );                  
                 }
            }

            public function viewComments(){

                $infos= DB::table('users')
                ->join('commentaire_user', 'users.id', '=', 'commentaire_user.id_utilisateur')
                ->join('commentaires', 'commentaires.id', '=', 'commentaire_user.id_commentaire')
                ->where('commentaires.texte', 'not like', "%(M)%")
                ->get();
                $c = count($infos);
                if (count($infos) >0){
                    $c=1;
                 return view('moderateur',['infos'=>$infos,'c'=>$c] );}

                 else 
                 {
                    return view('moderateur',['c'=>$c] );                  
                 }
            }
            public function EditCommentM(Request $req, $id){
                $texte = $req->input('texte');
                echo $texte;
                $texte2 = "(M) :".$texte;
                Commentaire::where('id', $id)->update(['texte'=>$texte2]);
                $infos= DB::table('users')
                ->join('commentaire_user', 'users.id', '=', 'commentaire_user.id_utilisateur')
                ->join('commentaires', 'commentaires.id', '=', 'commentaire_user.id_commentaire')
                ->where('commentaire_user.id_commentaire',$id)
                ->where('commentaires.texte',$texte2)            
                ->distinct()
                ->get();
                //print_r($infos[0]->id_utilisateur);
                // select * from users JOIN commentaire_user on commentaire_user.id_utilisateur = users.id JOIN
                // commentaires on commentaires.id = commentaire_user.id_commentaire ;
            return redirect("/moderateur");
            }
}
