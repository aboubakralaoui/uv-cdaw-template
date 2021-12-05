@extends('layouts.navC')
    <section style="margin-top: 100px;" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
               
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <div class="row">

@for ($i = 0; $i < count($films); $i++) 
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