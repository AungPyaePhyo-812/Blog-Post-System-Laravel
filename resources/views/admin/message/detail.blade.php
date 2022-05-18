@extends('layouts.master')

@section('title','Message Page')

@section('content')
<div class="container-fluid mt-2">
    <div class="row g-0">
        <div class="col-2">
            <div class="list-group  text-center text-lg-start">
                <span class="list-group-item border-0 mt-5">
                    <a href="#" class="text-decoration-none list-group-item-action">Dashboard</a>
                </span>

                <span href="#" class="text-decoration-none list-group-item list-group-item-action disabled border-0">CONTROLS</span>

                <a href="/user" class="text-decoration-none list-group-item list-group-item-action border-0">Users</a>

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
            <h2 class="h6 mt-5 py-2">Messages</h2>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card p-3 mb-3">
                        <div class="card-title">{{$message->subject}}</div>
                        <small>{{$message->created_at->diffForHumans()}} , {{$message->name}}</small>
                        <p class="mt-2">{{$message->message}}</p>
                        <p>Email is <strong>{{$message->email}}</strong></p>
                        
                    </div>                   
                </div> 
            </div>
        </div>

    </div>
</div>
@endsection