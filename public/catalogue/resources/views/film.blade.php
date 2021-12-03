<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./../assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
    <link href="./../../public/css/styles.css" rel="stylesheet" />
    <link href="./../../public/css/test.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" /> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<body id="page-top">
    <!-- Navigation-->
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
                    <li class="nav-item"><a class="nav-link" href="film.html">films</a></li>
                    <li class="nav-item"><a class="nav-link" href="series.html">Series</a></li>
                    <li class="nav-item"><a class="nav-link" href="mangas.html">Mangas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="">Langue</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">S'identifier</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href='/auth/register'>S'identifier</a></li> -->
                    <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'identifier</a>
                        @endif -->


                    <!-- @if(Auth::check())

                    @endif -->
                </ul>
            </div>
        </div>
    </nav>



    <section style="margin-top: 100px;" class="pt-5 pb-5">

        <div class="row">
            <div class="col-4">

                <img style="margin: 50px ; margin-bottom:30px; width: 400px;height: 450px;"
                    src='<?php echo $films[0]->image; ?>'>

                <form action="{{url('addLike')}}">
                    <div style="margin-left: 180px;">

                        <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>
                        @if ($d == 1)
                        <button class="btn btn-primary" type="submit">Like</button>
                        @else 
                        <button class="btn btn-primary disabled" type="button">Liké déja</button>
                        @endif
                </form>

                <form action="{{url('addVue')}}">
                    

                        <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>
                   
                        @if ($l == 1)
                        <button class="btn btn-primary" type="submit">Voir</button>
                        @else 
                        <button class="btn btn-primary disabled" type="button">Vue déja</button>
                        @endif
                </form>

                <form action="{{url('addToPlayliste')}}">
                    

                        <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>
                        
                        @if ($c == 0)
                          <p>il faut creer une playliste </p>          
                        @else
                     
                        <select class="form-select" aria-label="Default select example" name="name">
                            <option selected>MyPlaylists</option>
                          <?php for ($i = 0; $i<$c ; $i++){

                              echo "<option >".$myPlaylists[$i]->name."</option>";
                              
                          }
                          ?>
                            
                            
                        </select> 
                    @endif
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                </form>

                <form action="{{url('addPlayliste')}}">
                        <label style="color: white;" for="message">Name Playliste</label>
                        <input type="text" name="name"></input>
                        <button class="btn btn-primary" type="submit">Creer</button>
                </form>
            </div>
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
        <form action="{{url('addComment')}}">
            <div class="form-group" style="margin-left: 70px;margin-right: 70px;">
                <label style="color: white;" for="message">Commentaire</label>
                <textarea class="form-control" id="message" name="texte" rows="3"></textarea>
                <textarea name="id" style="display:none"><?php echo $films[0]->id_media; ?></textarea>
            </div>
            <div class="float-sm-right" style="margin-right: 70px;">
                <button class="btn btn-primary" type="submit"
                    onclick="alert('ton commentaire sera ajouté dès que le moderateur le confirme.')">Submit</button>
            </div>

        </form>

        <div class="container">
            <span>Commentaires sur le film</span>
            <br>
            @for($i=0;$i< count($Comments);$i++)
                          <span>{{$Comments[$i]->name}}</span><span> : </span> <span>{{$Comments[$i]->texte}}</span><br>
                          @endfor
                          

        </div>
                        

    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="./../../public/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>