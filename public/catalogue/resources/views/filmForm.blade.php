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
    <link href="./../css/styles.css" rel="stylesheet">
    <link href="./../css/test.css" rel="stylesheet">

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
<body>
<!-- <form id="addFilm" action="{{url('film')}}" method="GET">
    <label for="name">Nom : </label>
    <input type="text" id="name" name="name">
    <label for="director">Realisateur : </label>
    <input type="text" id="director" name="director">
    <label for="category">Genre : </label>
    <select id="category" name="category"> 
    <option value="">------</option>
    @foreach($categories as $cat)
      <option><?php   //$cat->name; ?></option> 
    @endforeach;
    </select>
    <input type="submit" value="creer film">
</form>   -->
<div class="container" style="background-color: aliceblue;border:2px;border-radius: 10px;margin-top:100px">
<form  id="addFilm" action="{{url('film')}}" method="GET">
			
					
					<div class="form-group">
						<label>Name</label>
            <input type="text" id="name" name="name" class="form-control">
					
					</div>
					<div class="form-group">
						<label>Realisateur</label>
            <input type="text" id="director" name="director"  class="form-control" required>
					</div>
          <div class="form-group">
						<label>Categorie</label>
					</div>
          <select class="form-control" id="category" name="category">
            <option class="form-control"  selected>Open this select menu</option>
            @foreach($categories as $cat)
            <option class="form-control" ><?=   $cat->name; ?></option> 
             @endforeach;
          </select>
          <div class="form-group">
						<label>duree</label>
            <input type="text" id="duree" name="duree"  class="form-control" required>
						
					</div>
          <div class="form-group">
						<label>annee</label>
            <input type="text" id="annee" name="annee"  class="form-control" required>
						
					</div>
          <div class="form-group">
						<label>Acteur Principale</label>
            <input type="text" id="acteur_principale" name="acteur_principale"  class="form-control" required>
						
					</div>
          <div class="form-group">
						<label>Description</label>
            <input type="text" id="Description" name="Description"  class="form-control" required>
						
					</div>
          <div class="form-group">
						<label>Path</label>
            <input type="text" id="path" name="path"  class="form-control" required>
						
					</div>
          
          
         
				<div class="modal-footer">
				
					<input type="submit" class="btn btn-success" value="Add">
				</div>
</form>
</div>
<!-- body>
    <p>les cats sont : </p>
 <?php 
  
   // echo $categories['0']->name;
 ?>

   
@foreach($categories as $cat)
      <li><php   $cat->name; ?></li> 
    @endforeach;

  </body> -->
