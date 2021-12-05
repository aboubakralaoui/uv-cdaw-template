@extends('layouts.navC')

<div class="container" style="background-color: aliceblue;border:2px;border-radius: 10px;margin-top:100px;padding:50px">


            @if ($c > 0)
            <div class="container">
                <h1>les commentaires non modérés sont :</h1>
                @for ($i=0;$i< count($infos);$i++)
                <div>{{$infos[$i]->nom}} <span> : </span>{{$infos[$i]->texte}}</div> <a href = "{{ url('editCommentM/'.$infos[$i]->id_commentaire) }}">Moderer</a>                      
           
                
                   @endfor     


            </div>
            @else
            <div class="container">
            <h1>il n ya pas de commentaires non modérés pour cet utilisateur</h1>
            </div>
            @endif
 

</body>
</html>