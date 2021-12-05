@extends('layouts.navC')
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
                
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                @for ($i = 0; $i < $c; $i++) 
                                    <div class="col-md-4 mb-3">
                                        <div style="border-radius: 20px;" class="card">
                                            
                                            <div class="card-body">
                                                <h4 class="card-title" style="text-align:center;"><?php echo $myPlaylists[$i]->name; ?></h4>
                                                <p class="card-text">Vous êtes abonnés à cet playliste </p>

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
                    <h3 style="color: white;" class="mb-3">Historique de Visionnage</h3>
                </div>
            
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                @for ($i = 0; $i < count($myVues); $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $myVues[$i]->id_media }}'>
                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$myVues[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$myVues[$i]->titre}}</h4>
                                                    <span>Vu à :</span><h6 >{{$myVues[$i]->created_at}}</h6>
                                                </div></div>
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
                    <h3 style="color: white;" class="mb-3">Favories</h3>
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

                            
                                    <form action="{{url('addToPlaylisteUser')}}">
                                        
                                        <textarea name="idp" style="display:none" >22</textarea>
                                        @if (count($abonnéM)==0)
                                        <div class="float-right"> <button class="btn btn-success btn-sm" type="submit">S'abonner</button></div>
                                        @else 
                                        <div class="float-right"> <button class="btn btn-success btn-sm disabled" type="submit">Abonné Déja</button></div>
                                        @endif
                                    </form>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3"> > 
                    <div style="height: 200px;" class="card text-white">
                        <img style="height: 200px;" class="card-img" src="https://gepig.com/game_cover_460w/224.jpg" alt="">
                        <div class="card-img-overlay">
                            <h4 class="card-title">The GoDfather</h4>
                            <p class="card-text">Playlist qui contient tout les films de Godfather
                            </p>

                            <form action="{{url('addToPlaylisteUser')}}">
                                        
                                        <textarea name="idp" style="display:none" >23</textarea>
                                        @if (count($abonnéG)==0)
                                        <div class="float-right"> <button class="btn btn-success btn-sm" type="submit">S'abonner</button></div>
                                        @else 
                                        <div class="float-right"> <button class="btn btn-success btn-sm disabled" type="submit">Abonné Déja</button></div>
                                        @endif
                                    </form>

                        </div>
                    </div>
                </div><div class="col-md-4 mb-3"> > 
                    <div style="height: 200px;" class="card text-white">
                        <img style="height: 200px;" class="card-img" src="https://images5.alphacoders.com/112/thumb-350-1125324.jpg" alt="">
                        <div class="card-img-overlay">
                            <h4 class="card-title">SEVEN</h4>
                            <p class="card-text">Playlist qui contient tout les films de SEVEN
                            </p>

                            <form action="{{url('addToPlaylisteUser')}}">
                                        
                                        <textarea name="idp" style="display:none" >23</textarea>
                                        @if (count($abonnéS)==0)
                                        <div class="float-right"> <button class="btn btn-success btn-sm" type="submit">S'abonner</button></div>
                                        @else 
                                        <div class="float-right"> <button class="btn btn-success btn-sm disabled" type="submit">Abonné Déja</button></div>
                                        @endif
                                    </form>

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