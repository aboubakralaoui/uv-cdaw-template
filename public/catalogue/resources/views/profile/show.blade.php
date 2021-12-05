@extends('layouts.navC2')


<div class="row">
    <div class="col-4">
        <div class="card" style="background-color:white;margin:10px; margin-right:-5px;margin-top:100px;">
            <img style="padding-top:10px;background-color:white;width:200px;text-align:center;height: 170px; margin:auto;display:flex;  border-radius: 50%;"
                src="./../../public/assets/img/{{Auth::user()['profile_photo_path']}}" alt="il faut ajouter une photo">
            <div class="card-body">
                <h4 class="card-title" style="text-align:center;">Informations Personnelles </h4>

                <div class="container">

                    <div class="row">
                        <div class="col-5">
                            <div style="margin-bottom: 7px ;margin-left: 30px ;"><strong>Nom :</strong></div>
                            <div style="margin-bottom: 7px ;margin-left: 30px ;"><strong>Prenom : </strong></div>
                            <div style="margin-bottom: 7px ;margin-left: 30px ;"><strong>Email : </strong></div>
                            <div style="margin-bottom: 7px ;margin-left: 30px ;"><strong>Login : </strong></div>
                            <div style="margin-bottom: 7px ;margin-left: 30px ;"><strong>Role : </strong> </div>
                        </div>


                        <div class="col-7">
                            <div style="margin-bottom: 7px ;">{{Auth::user()['nom']}}</div>
                            <div style="margin-bottom: 7px ;">{{Auth::user()['prenom']}}</div>
                            <div style="margin-bottom: 7px ;">{{Auth::user()['email']}}</div>
                            <div style="margin-bottom: 7px ;">{{Auth::user()['name']}}</div>
                            <div style="margin-bottom: 7px ;">{{Auth::user()['role']}}</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <form action="{{ url('/user/edit')}}" method="post" enctype="multipart/form-data" style="background-color: aliceblue;border-radius: 10px;margin-top:100px">
            {{ csrf_field() }}
            <div class="container" >
                <div class="modal-body">
                    <div class="form-group">
                        <label>Login</label>
                        <input type='text' name='name' class="form-control" value="{{Auth::user()['name']}}" />

                    </div>
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" value="{{Auth::user()['nom']}}" ?>

                    </div>
                    <input type="text" id="nom" name="id" class="form-control" style="display:none"
                        value="{{Auth::user()['id']}}" ?>
                    <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control"
                            value="{{Auth::user()['prenom']}}" ?>

                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" id="email" name="email" value="{{Auth::user()['email']}}"
                            class="form-control" required>

                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input">
                            <label class="custom-file-label">Choose File </label>
                        </div>
                    </div>



                            <div class="modal-footer">

                                <input type="submit" class="btn btn-success" value="Edit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>