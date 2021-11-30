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
    <link href="./../public/css/test.css" rel="stylesheet" />

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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
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

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bienvenue sur TVflix</div>
            <div class="masthead-heading text-uppercase">Regardez vos films en streaming</div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <!--                        <a class="navbar-brand" href="#">Navbar</a>-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Films" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Films
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Drame</a></li>
                                    <li><a class="dropdown-item" href="#">Horreur</a></li>
                                    <!--                                        <li><hr class="dropdown-divider"></li>-->
                                    <li><a class="dropdown-item" href="#">Romance</a></li>
                                    <li><a class="dropdown-item" href="#">Meilleur Films de touts les temps</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Series" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Serie
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Drame</a></li>
                                    <li><a class="dropdown-item" href="#">Horreur</a></li>
                                    <!--                                        <li><hr class="dropdown-divider"></li>-->
                                    <li><a class="dropdown-item" href="#">Romance</a></li>
                                    <li><a class="dropdown-item" href="#">Meilleur Series de touts les temps</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Monga
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Drame</a></li>
                                    <li><a class="dropdown-item" href="#">Horreur</a></li>
                                    <!--                                        <li><hr class="dropdown-divider"></li>-->
                                    <li><a class="dropdown-item" href="#">Romance</a></li>
                                    <li><a class="dropdown-item" href="#">Meilleur Monga de touts les temps</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Documentaire" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Documentaire
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Nature</a></li>
                                    <li><a class="dropdown-item" href="#">Guerre</a></li>
                                    <!--                                        <li><hr class="dropdown-divider"></li>-->
                                    <li><a class="dropdown-item" href="#">Technologie</a></li>
                                </ul>
                            </li>
                            <!--                                <li class="nav-item">-->
                            <!--                                    <a class="nav-link disabled">Disabled</a>-->
                            <!--                                </li>-->
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Recherche avancee"
                                aria-label="Recherche">
                            <button class="btn btn-outline-success" type="submit">Recherche</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Services-->
    <section style="
    background: linear-gradient(45deg, rgb(53, 53, 52) 0%, rgba(251,248,248,1) 40%);"  class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Films Et Séries Du Moment</h2>
                <h3 class="section-subheading text-muted">Voyez ce que les gens regarde en ce moment</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <!-- SLIDER WITH CAPTIONS -->
                        <div id="slider4" class="carousel slide mb-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider4" data-slide-to="0"></li>
                                <li data-target="#slider4" data-slide-to="1"></li>
                                <li data-target="#slider4" data-slide-to="2"></li>
                                <li data-target="#slider4" data-slide-to="3"></li>
                                <li data-target="#slider4" data-slide-to="4"></li>
                                <li data-target="#slider4" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div style="width: 750px;" class="carousel-item active">
                                    <img style="width: 700px; height: 400px;" class="d-block img-fluid" src="https://www.francetvinfo.fr/pictures/ezbst2idcQj1Mu-MVSHnGaxowH8/0x231:600x569/944x531/filters:format(webp)/2021/05/11/phpW4LuIW.jpg"
                                        alt="First Slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>LUPIN</h3>
                                        <p>Son pere meurt, il décide de se venger en s'inspirant de l'hitoire de LUPIN</p>
                                    </div>
                                </div>
                                <div style="width: 750px;" class="carousel-item">
                                    <img style="width: 700px;height: 400px;" class="d-block img-fluid" src="https://cache.cosmopolitan.fr/data/photo/w600_h315_ci/1mn/love-hard-couple.jpg"
                                        alt="Second Slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>LOVEHARD</h3>
                                        <p>Natalie, une jeune femme qui vit à Los Angeles et peine à trouver l'amour.</p>
                                    </div>
                                </div>
                                <div style="width: 750px;" class="carousel-item">
                                    <img style="width: 700px;height: 400px;"  class="d-block img-fluid" src="https://www.themoviedb.org/t/p/w780/lxLiKYM4laorYKMxyaWrSVbLIjr.jpg"
                                        alt="Third Slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>ARMY OF THIEVES</h3>
                                        <p>Grâce à ses talents de hackeur, Ludwig intègre un gang de braqueurs qui traque les différents coffres.</p>
                                    </div>
                                </div>
                                <div style="width: 750px;" class="carousel-item">
                                    <img style="width: 700px;height: 400px;" class="d-block img-fluid" src="https://imgsrc.cineserie.com/2021/09/1200x680_venom.jpg?ver=1"
                                        alt="Third Slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>VENOM 2</h3>
                                        <p>Après avoir choisi le journaliste d'enquête Eddie Brock comme hôte, le symbiote extraterrestre Venom doit affronter un nouvel ennemi</p>
                                    </div>
                                </div>
                                <div style="width: 750px;" class="carousel-item">
                                    <img style="width: 700px;height: 400px;" class="d-block img-fluid" src="https://img.huffingtonpost.com/asset/615c76212000006b1a8cfb46.jpg?cache=abHQ5LaKaV&ops=1778_1000"
                                        alt="Third Slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>SQUID GAME</h3>
                                        <p>Des personnes en difficultés financières sont invitées à une mystérieuse compétition de survie.</p>
                                    </div>
                                </div>
                                <div style="width: 750px;"class="carousel-item">
                                    <img style="width: 700px;height: 400px;" class="d-block img-fluid" src="https://imgr.cineserie.com/2021/04/jumanji.png?imgeng=/f_jpg/cmpr_0/w_2544/h_1431/m_cropbox&ver=1"
                                        alt="Third Slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>JUMANJI </h3>
                                        <p>Quatre jeunes se retrouvent mystérieusement propulsés au coeur de la jungle de Jumanji</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CONTROLS -->
                            <a href="#slider4" class="carousel-control-prev" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>

                            <a href="#slider4" class="carousel-control-next" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
                crossorigin="anonymous"></script>
            <script>
                $('.carousel').carousel({
                    interval: 3000,
                    keyboard: true,
                    pause: 'hover',
                    wrap: true
                });

                $('#slider4').on('slide.bs.carousel', function () {
                    console.log('SLIDE!');
                });

                $('#slider4').on('slid.bs.carousel', function () {
                    console.log('SLID!');
                });

            </script>
        </div>

    </section>
    <!-- Portfolio Grid-->
    <!-- <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                 
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
             
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Explore</div>
                            <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section> -->
    <!-- About-->
    <section style="
    background: linear-gradient(315deg, rgb(53, 53, 52) 0%, rgba(251,248,248,1) 40%); " class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nos Services</h2>
                <h3 class="section-subheading text-muted">Si vous utiliser nos services vous pouvez </h3>
            </div>
            <ul class="timeline">
                <li>
                    <div  style="background-color: white;"  class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                        alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Regarder en :</h4>
                            <h4 class="subheading">STREAMING</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">vous pouvez regarder vos films, series et mangas préférés en STREAMING</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div style="background-color: white;" class="timeline-image"><img style="height:max-content;"  class="rounded-circle img-fluid" src="https://fantech.b-cdn.net/wp-content/uploads/2021/03/Fantech-software-download.png"
                        alt="..." /></div>
                  
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Regarder en :</h4>
                            <h4 class="subheading">OFFLINE</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">vous n'avez pas de connexion et vous voulez regarder votre film préféré ? <br> c'est faisable sur TVFLIX OFFLINE SERVICE</p>
                        </div>
                    </div>
                </li>
                
                <li class="timeline-inverted">
                    <div style="background-color: rgb(78, 78, 78);" class="timeline-image">
                        <h4>
                          <br>
                            Joignez 
                           
                            
                            Nous
                            <br>
                           
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
 
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">SI vous avez des questions n'hesitea pas à nous les poser</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *"
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="./../public/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>