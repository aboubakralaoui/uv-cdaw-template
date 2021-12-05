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
<body class="table">
<!-- <table border = "1">
<tr>
<td>ID</td>
<td>First Name</td>

<td>Edit</td>
<td>Delete</td>
</tr>
@foreach ($films as $film)
<tr>
<td>{{ $film->id }}</td>
<td>{{ $film->name }}</td>
<td><a href = 'edit/{{ $film->id }}'>Edit</a></td>
<td><a href = 'delete/{{ $film->id }}'>Delete</a></td>
</tr>
@endforeach

</table> -->
<div class="container" style="background-color: aliceblue;border:2px;border-radius: 10px;margin-top:100px">

<form   action="{{url('filmForm')}}" method="get">
					<input type="submit" class="btn btn-success" value="Add">		
</form>

<table style="background-color: aliceblue;table-layout:auto;" class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Realisateur</th>
                    <th>Categorie</th>
                    <th>Durée</th>
                    <th>annee</th>
                    <th>acteur_principale</th>
                    <th>Description</th>

                    <th>Action</th>
                    
                   
                </tr>
            </thead>
            @foreach ($films as $film)
              <tr>
                  <td>{{ $film->id }}</td>
                  <td>{{ $film->name }}</td>
                  <td>{{ $film->director }}</td>
                  <td>{{ $film->category }}</td>
                  <td>{{ $film->duree }}</td>
                  <td>{{ $film->annee }}</td>
                  <td>{{ $film->acteur_principale}}</td>
                  <td>{{ $film->description }}</td>
                  
                  <td><a href = 'edit/{{ $film->id }}'>Edit</a><span> / </span><a href = 'delete/{{ $film->id }}'>Delete</a><span> / </span><a href = 'view/{{ $film->id }}'>View</a></td>
               
              </tr>
            @endforeach
       
        </table>
        <div>
</body>
</html>