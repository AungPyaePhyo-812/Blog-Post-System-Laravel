@extends('layouts.master')

@section('title','User Page')

@section('content')


<div class="container-fluid">
    <div class="row g-0">
        <div class="col-2">
            <div class="list-group  text-center text-lg-start mt-5">
                <span class="list-group-item border-0 mt-2">
                    <a href="/dashboard" class="text-decoration-none list-group-item-action">Dashboard</a>
                </span>

                <span href="#" class="text-decoration-none list-group-item list-group-item-action disabled border-0">CONTROLS</span>

                <a href="/users" class="text-decoration-none list-group-item list-group-item-action border-0">Users</a>

                <a href="/posts" class="text-decoration-none list-group-item list-group-item-action border-0">Posts</a>

                
                <a href="/roles" class="text-decoration-none list-group-item list-group-item-action border-0">Roles</a>

                <a href="/message" class="text-decoration-none list-group-item list-group-item-action border-0">Messages</a>

              

                <span href="#" class="text-decoration-none list-group-item list-group-item-action disabled border-0">ACTIONS</span>

                
                <a href="/posts/create" class="text-decoration-none list-group-item list-group-item-action border-0">Add New Post</a>

                <a href="/manageusers" class="text-decoration-none list-group-item list-group-item-action border-0">Manage Users</a>

                
                <a href="/roles/create" class="text-decoration-none list-group-item list-group-item-action border-0">Create Roles</a>

            </div>
        </div>
        <div class="col-10">
            <h2 class="h6 mt-5 py-4">Users</h2>
            <div class="card p-5">
               <div class="row">
                   <div class="col-md-8 col-sm-8">
                   <table class="table">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                   
                    
                    </tr>
                    @foreach($users as $user)
                  
                    <tr> 
                        <td>{{$user->name}} </td>
                        <td>{{$user->email}}</td>
                       
                        
                    </tr>
                 
                    @endforeach
                </table>

            </div>
        </div>
            </div>



        </div>

    </div>
</div>
    
@endsection