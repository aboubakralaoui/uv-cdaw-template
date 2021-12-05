@extends('layouts.navC2')

    <form id="addFilm" action="{{ $users[0]->id; }}" method="post">
    {{ csrf_field() }}
        <div class="container" style="background-color: aquamarine;border-radius: 10px;margin-top:100px">
            <div class="modal-body">
                <div class="form-group">
                    <label>Changer Le role</label>
                </div>
                <select class="form-control" aria-label="Default select example" name="role">

                    <option class="form-control">Utilisateur</option>
                       
                    
                    <option class="form-control">Moderateur</option>
                        
                   
                    <option class="form-control">administrateur</option>
                        
                    

                </select>
            </div>




            <div class="modal-footer">

                <input type="submit" class="btn btn-success" value="Edit">
            </div>
        </div>
    </form>
</body>

</html>