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
    <link href="css/styles.css" rel="stylesheet" />
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

<body style="background: linear-gradient(#010101ed, #252850); background-attachment: fixed;">
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
                    <li class="nav-item"><a class="nav-link" href="film.html">Films</a></li>
                    <li class="nav-item"><a class="nav-link" href="series.html">Series</a></li>
                    <li class="nav-item"><a class="nav-link" href="mangas.html">Mangas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"> </a></li>
                    <li class="nav-item"><a class="nav-link" href="">Langue</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">S'identifier</a></li>
                </ul>
            </div>
        </div>
    </nav>
<section style="margin-top: 100px;" class="pt-5 pb-5">

        <div class="container">
            <h1 style="color: white; font-family: 'Times New Roman', Times, serif;text-align: center;margin: 50px;">Espace Personnel</h1>
            <div class="row">
                <div class="col-6">
                    <h3 style="color: white;" class="mb-3">Suggestions Pour Vous</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                @for ($i = 9; $i < 12; $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $films[$i]->id_media }}'>
                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$films[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$films[$i]->titre}}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>                          
                                @endfor  

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                @for ($i = 12; $i < 15; $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $films[$i]->id_media }}'>
                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$films[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$films[$i]->titre}}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>                          
                                @endfor 

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                @for ($i = 15; $i < 18; $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $films[$i]->id_media }}'>
                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$films[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$films[$i]->titre}}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>                          
                                @endfor 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section style="margin-top: 100px;" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 style="color: white;" class="mb-3">Mes Playlistes</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                @for ($i = 0; $i < $c; $i++) 
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $myPlaylists[$i]->name; ?></h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                @endfor 

                                </div>
                            </div>
                            <!-- <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                            <!-- <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section style="margin-top: 100px;" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 style="color: white;" class="mb-3">Favories</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                @for ($i = 0; $i < $d; $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $films[$i]->id_media }}'>
                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$myFavories[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$myFavories[$i]->titre}}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>                          
                                @endfor 

                                </div>
                            </div>
                            <!-- <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                            <!-- <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            <img style="border-radius: 20px;" class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section>
        <div class="container">
            <h1 style="color: white;">S'ABONNER DANS DES PLAYLISTS</h1>
            <div class="row">
                <div class="col-md-4 mb-3"> > 
                    <div style="height: 200px;" class="card text-white">
                        <img style="height: 200px;" class="card-img" src="https://comarketing-news.fr/wp-content/uploads/marvel-fans.jpg" alt="">
                        <div class="card-img-overlay">
                            <h4 class="card-title">MARVELS</h4>
                            <p class="card-text">Playlist qui contient tout les films de MARVELS
                            </p>

                            <div class="float-right"> <button class="btn btn-success btn-sm" type="button">Small
                                    button</button></div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3"> > 
                    <div style="height: 200px;" class="card text-white">
                        <img style="height: 200px;" class="card-img" src="https://source.unsplash.com/random/1000x300" alt="">
                        <div class="card-img-overlay">
                            <h4 class="card-title">MARVELS</h4>
                            <p class="card-text">Playlist qui contient tout les films de MARVELS
                            </p>

                            <div class="float-right"> <button class="btn btn-success btn-sm" type="button">Small
                                    button</button></div>

                        </div>
                    </div>
                </div><div class="col-md-4 mb-3"> > 
                    <div style="height: 200px;" class="card text-white">
                        <img style="height: 200px;" class="card-img" src="https://source.unsplash.com/random/1000x300" alt="">
                        <div class="card-img-overlay">
                            <h4 class="card-title">MARVELS</h4>
                            <p class="card-text">Playlist qui contient tout les films de MARVELS
                            </p>

                            <div class="float-right"> <button class="btn btn-success btn-sm" type="button">Small
                                    button</button></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>