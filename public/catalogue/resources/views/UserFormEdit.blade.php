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

    <form id="addFilm" action="{{ $users[0]->id; }}" method="post">
        {{ csrf_field() }}
        <div class="container" style="background-color: aquamarine;border-radius: 10px;margin-top:100px">
        <div class="modal-body">
            <div class="form-group">
                <label>Name</label>
                <input type='text' name='name' class="form-control" value='<?php echo $users[0]->name; ?>'/>

            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" id="director" name="director" class="form-control" value='<?php echo $users[0]->nom; ?>' required>

            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" id="director" name="director" class="form-control" value='<?php echo $users[0]->prenom; ?>' required>

            </div>

            <div class="form-group">
						<label>Email</label>
            <input type="text" id="duree" name="duree" value='<?php echo $users[0]->email; ?>'  class="form-control" required>
						
					</div>
     
          <div class="form-group">
						<label>Path</label>
            <input type="text" id="path" name="path" value='<?php echo $users[0]->profile_photo_path; ?>'  class="form-control" required>
						
					</div>



            <div class="modal-footer">

                <input type="submit" class="btn btn-success" value="Edit">
            </div>
        </div>
    </form>
</body>

</html>