@extends('layouts.navC')


<div class="container" style="background-color: aliceblue;border:2px;border-radius: 10px;margin-top:100px">



<table style="background-color: aliceblue;table-layout:auto;" class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Banni </th>
                    <th>Role </th>
                    <th>Action</th>

                 
                    
                   
                </tr>
            </thead>
            @foreach ($users as $user)
              <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->nom }}</td>
                  <td>{{ $user->prenom }}</td>
                  <td>{{ $user->email }}</td>
                
                  <td><?php if ($user->banni == '1'){ echo 'oui' ;} else echo 'non'?></td>
             <td>{{ $user->role }}</td>
                  
                  <td><a href = 'editUser/{{ $user->id }}'>Edit</a><span> / </span><a href = 'deleteUser/{{ $user->id }}'>Delete</a><span> / </span><a href = 'bannir/{{ $user->id }}'>Bannir</a><span> / </span><a href = 'voir/{{ $user->id }}'>View</a></td>
               
              </tr>
            @endforeach
       
        </table>
        <div>
</body>
</html>