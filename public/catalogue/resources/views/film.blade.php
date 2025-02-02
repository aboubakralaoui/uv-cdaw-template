<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./../../public/css/styles.css" rel="stylesheet" />
    <link href="./../../public/css/test.css" rel="stylesheet" />
    <script src="./../../public/js/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<body id="page-top" class="antialiased"
    style="background-image: url('https://images.pexels.com/photos/3921045/pexels-photo-3921045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');margin-top: 100px;">


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" style="font-family: Bradley Hand, cursive;" href="#page-top">TVFLIX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/films') }}">films</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/series') }}">Series</a></li>
                    <li class="nav-item"><a class="nav-link" href="mangas.html">Mangas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>

                    <li class="nav-item"><a class="nav-link" href="">Langue</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section style="margin-top: 100px;" class="pt-5 pb-5">

        <div class="row">
            <div class="col-4">

                <img style="margin: 50px ; margin-bottom:30px; width: 400px;height: 450px;"
                    src='<?php echo $films[0]->image; ?>'>


            </div>

            <div class="col-8" style="color: white;">
                <div style="background-color: #252850; margin: 50px; height: 450px;" class="card  text-white mb-3">
                    <div class="card-header">
                        <?php echo $films[0]->name; ?>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">INFORMATIONS </h4>
                        <p class="card-text">
                        <div style="margin-left: 50px ;max-height:auto;">
                            <div class="row">
                                <div class="col-3">
                                    <div style="margin-bottom: 7px ;">Name :</div>
                                    <div style="margin-bottom: 7px ;">Durée : </div>
                                    <div style="margin-bottom: 7px ;">Année : </div>
                                    <div style="margin-bottom: 7px ;">Type : </div>

                                    <div style="margin-bottom: 7px ;">Description : </div>
                                </div>


                                <div class="col-9">

                                    <div style="margin-bottom: 7px ;">
                                        <?php echo $films[0]->titre; ?>
                                    </div>
                                    <div style="margin-bottom: 7px ;">
                                        <?php echo $films[0]->duree; ?>
                                    </div>
                                    <div style="margin-bottom: 7px ;">
                                        <?php echo $films[0]->annee; ?>
                                    </div>
                                    <div style="margin-bottom: 7px ;">
                                        <?php echo $films[0]->type; ?>
                                    </div>
                                    <div style="margin-bottom: 7px ;">
                                        <?php echo $films[0]->description; ?>
                                    </div>
                                </div>
                            </div>


                        </div>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="margin-top:-250px;">
        <div class="row">
            <div class="col-6">
                <section>
                    
                            <form action="{{url('addLike')}}">
                            <div style="margin-left: 90px;">

                            <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>
                            @if ($d == 1)
                            <button class="btn btn-primary" type="submit">Like</button>
                            @else
                            <button class="btn btn-primary disabled" type="button">Liké déja</button>
                            @endif
                           
                        </form>
                     <br>
                     <br>
                    <form action="{{url('addVue')}}">


                        <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>

                        @if ($l == 1)
                        <button class="btn btn-primary" type="submit">Voir</button>
                        @else
                        <button class="btn btn-primary disabled" type="button">Vue déja</button>
                        @endif
                    </form>
                  <br>
                    

                    <form action="{{url('addToPlayliste')}}">


                        <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>

                        @if ($c == 0)
                        <h6 style="color:yellow">Ajouter Une Nouvelle Playliste</h6>
                        <button class="btn btn-primary disable" type="submit">Ajouter</button>
                        @else

                        <select class="form-select" name="name">
                            <option selected>MyPlaylists</option>
                            <?php for ($i = 0; $i<$c ; $i++){

                              echo "<option class='form-control' >".$myPlaylists[$i]->name."</option>";   
                          }
                          ?>
                        </select> 
                         <button class="btn btn-primary" type="submit">Ajouter</button>
                        @endif
                      
                    </form>
                    <br>
                    <div style="background-color: #252850;padding:20px" class="card  text-white mb-3">

                    <h6 style="color:yellow">Ajouter Une Nouvelle Playliste</h6>
                    <form action="{{url('addPlayliste')}}">
                    <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>

                        <label style="color: white;" for="message">Name Playliste</label>
                        <input type="text" class="form-control" name="name"></input>
                        <button class="btn btn-primary" type="submit">Creer</button>
                    </form>
                        </div>
                </section>
            </div>
            <div class="col-4">
                <section>
                    <form action="{{url('addComment')}}">
                        <div class="form-group">
                            <label style="color: white;" for="message">Commentaire</label>
                            <textarea class="form-control" id="message" name="texte" rows="15"></textarea>
                            <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>
                        </div>
                        <div class="float-sm-right" style="margin-right: 70px;">
                            <button class="btn btn-primary" type="submit"
                                onclick="alert('ton commentaire sera modérés par un moderateur')">Submit</button>
                        </div>

                    </form>
                </section>
            </div>
        </div>


        <div style="background-color: #252850; margin: 50px; height: auto; margin-top: -80px;padding:40px;"
            class="card  text-white mb-3">
            <div class="container">
                <h4 style="text-align:center; color:yellow;">Commentaires sur le film</h4>
                <br>
                @for($i=0;$i< count($Comments);$i++) <strong><span>{{$Comments[$i]->name}}</span><span> :
                    </span></strong><span>{{$Comments[$i]->texte}}</span><br>
                    @endfor

            </div>
        </div>


    </section>

</body>

</html>