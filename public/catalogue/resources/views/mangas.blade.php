@extends('layouts.navC')
 

    <section style="margin-top: 100px;" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 style="color: white;" class="mb-3">TOP MANGAS </h3>
                </div>
                <div class="col-6 text-right">
                    <!-- <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a> -->
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    @for ($i = 0; $i < 3; $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $mangas[$i]->id_media }}'>

                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$mangas[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$mangas[$i]->titre}}</h4>
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
    </section>
    <section id="ecrivain" style="margin-top: 100px;" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 style="color: white;" class="mb-3">mangas AVENTURES </h3>
                </div>
              
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    @for ($i = 3; $i < 6; $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $mangas[$i]->id_media }}'>

                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$mangas[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$mangas[$i]->titre}}</h4>
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
                    <h3 style="color: white;" class="mb-3">mangas ACTIONS </h3>
                </div>
               
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    @for ($i = 6; $i < 9; $i++) 
                                    <div class='col-md-4 mb-3'>
                                        <a href='view/{{ $mangas[$i]->id_media }}'>

                                            <div style='border-radius: 20px;' class='card'>
                                                <img style='height:400px;border-radius: 20px;' class='img-fluid'
                                                    alt='100%x280' src="{{$mangas[$i]->image}}">
                                                <div class='card-body'>
                                                    <h4 class='card-title'>{{$mangas[$i]->titre}}</h4>
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




    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="./../public/js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>