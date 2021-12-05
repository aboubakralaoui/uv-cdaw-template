@extends('layouts.navC2')

<section style="margin-top:100px;">
    <div class="row">
        <div class="col-4">
            <div class="container">
                <div class="card" style="background-color:white;margin:10px;margin:-2px;">
                @if ($infos1[0]->profile_photo_path != null)
                    <img style="padding-top:10px;background-color:white;width:200px;text-align:center;height: 170px; margin:auto;display:flex;  border-radius: 50%;"
                    src="./../../public/assets/img/{{$infos1[0]->profile_photo_path}}" alt="cet Utilisateur n'a pas ajouter son image">
                @else
                <img style="padding-top:10px;background-color:white;width:200px;text-align:center;height: 170px; margin:auto;display:flex;  border-radius: 50%;"
                    src="./../../public/assets/img/avatar.png" alt="cet Utilisateur n'a pas ajouter son image">
                    @endif
                    <div class="card-body">
                        <h4 class="card-title" style="text-align:center;">Informations Personnelles </h4>

                        <div class="container">

                            <div class="row">
                                <div class="col-3">
                                    <div style="margin-bottom: 7px ;"><strong>Nom : </strong></div>
                                    <div style="margin-bottom: 7px ;"><strong>Prenom : </strong></div>
                                    <div style="margin-bottom: 7px ;"><strong>Email : </strong></div>

                                </div>


                                <div class="col-9">
                                    <div style="margin-bottom: 7px ;">{{$infos1[0]->nom}}</div>
                                    <div style="margin-bottom: 7px ;">{{$infos1[0]->prenom}}</div>
                                    <div style="margin-bottom: 7px ;">{{$infos1[0]->email}}</div>


                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="col-8">
        <div style="background-color: #252850; height: 400px;border-radius:20px; margin-right:40px" class="card text-white mb-3">
            @if ($c > 0)
            <div class="container">
                <h1>les commentaires de cet utilisateur</h1>
                @for ($i=0;$i< count($infos);$i++)
                <div><strong>{{$infos[$i]->titre}} </strong><span> : </span>{{$infos[$i]->texte}}</div> <a href = "{{ url('editComment/'.$infos[$i]->id_commentaire) }}">Moderer</a>                      
           
                
                   @endfor     


            </div>
            @else
            <div class="container">
            <h3>il n ya pas de commentaires pour cet utilisateur</h3>
            </div>
            @endif
        </div>
</div>
    </div>
    <section>