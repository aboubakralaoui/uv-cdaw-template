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
    <link href="./../public/css/styles.css" rel="stylesheet" />
    <link href="./../../public/css/test.css" rel="stylesheet" />

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

<body id="page-top" class="antialiased">

    @if (Route::has('login'))
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
                   
                     @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                      @else
                    <li class="nav-item"> 
                       
                        <a class="nav-link" href="{{ route('login') }}">Sindetifier</a>
                       </li>  
                   @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Creer un Compte</a></li>
                   @endif 
                @endauth        
                </ul>
            </div> 
        </div>
    </nav>
    @endif


    <section>
    <div class="row">
     
      <div class="col-6" style="border:1px solid #333">
      <div class="card">
                <img style="width:200px;heo text-align:center;height: 170px; margin:auto;display:flex;  border-radius: 50%;"src="https://source.unsplash.com/random/301x200" alt="">
                <div class="card-body">
                    <h4 class="card-title" style="text-align:center;">Informations Personnelles </h4>
                    <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p> -->
                    <div class="container">

                    <div class="row">
                                <div class="col-3">
                                    <div style="margin-bottom: 7px ;">Name :</div>
                                    <div style="margin-bottom: 7px ;">email : </div>
                                    <div style="margin-bottom: 7px ;">role : </div>
                                </div>
                           
                            
                                <div class="col-9">
                                    <div style="margin-bottom: 7px ;">TEST </div>
                                    <div style="margin-bottom: 7px ;">TEST </div>
                                    <div style="margin-bottom: 7px ;">TEST </div>
                                </div>
                    </div>        
                </div>
</div>
</div>
    </div>
      <div class="col-4" style="border:1px solid #333">Auto Layout</div>
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