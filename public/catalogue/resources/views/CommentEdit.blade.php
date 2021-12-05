@extends('layouts.navC2')
<div class="container" style="background-color: aquamarine;border-radius: 10px;margin-top:100px">

    <form id="addFilm" action="{{ $Commentaire[0]->id_user; }}" method="post">
    {{ csrf_field() }}
        <div class="container" style="background-color: aquamarine;border-radius: 10px;margin-top:100px">
            <div class="modal-body">
                <div class="form-group">
                    <label>Changer Le texte</label>
                </div>
                <input class="form-control" name="texte"></input>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Edit">
            </div>
        </div>
    </form>
    <form id="addFilm" action="{{ $Commentaire[0]->id_user; }}" method="post">
    {{ csrf_field() }}
    <input class="form-control" style = "display:none" name="texte" value="{{ $Commentaire[0]->texte; }}"></input>
    <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Accepter">
            </div>
    </form> 
</div>
</body>

</html>