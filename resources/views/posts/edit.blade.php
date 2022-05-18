@extends('layouts.master')

@section('title','Admin Page')

@section('content')
<div class="container-fluid">
    <div class="row g-0">
        <div class="col-2">
            <div class="list-group  text-center text-lg-start  mt-5">
                <span class="list-group-item border-0 mt-2">
                    <a href="#" class="text-decoration-none list-group-item-action">Dashboard</a>
                </span>

                <span href="#" class="text-decoration-none list-group-item list-group-item-action disabled border-0">CONTROLS</span>

                <a href="user" class="text-decoration-none list-group-item list-group-item-action border-0">Users</a>

                <a href="/posts" class="text-decoration-none list-group-item list-group-item-action border-0">Posts</a>

                
                <a href="/roles" class="text-decoration-none list-group-item list-group-item-action border-0">Roles</a>

                <a href="/message" class="text-decoration-none list-group-item list-group-item-action border-0">Messages</a>

              

                <span href="#" class="text-decoration-none list-group-item list-group-item-action disabled border-0">ACTIONS</span>

                
                <a href="/posts/create" class="text-decoration-none list-group-item list-group-item-action border-0">Add New Post</a>


                <a href="/manageusers" class="text-decoration-none list-group-item list-group-item-action border-0">Manage Users</a>

                
                <a href="/roles/create" class="text-decoration-none list-group-item list-group-item-action border-0">Roles</a>



               
            </div>
        </div>
        <div class="col-10 mt-5">
            <h2 class="h6  py-2 mt-3">Edit Post</h2>
            <div class="col-md-8 offset-md-2">
                
            <div class="card p-5 pb-3 shadow-lg">
                <form action="" method="post">
                    @csrf
                    <h1 class="text-center">Edit Post</h1>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">

                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$post->description}}">

                    <label for="content">Content</label>
                    <textarea name="content" id="" cols="30" rows="8" class="form-control">{{$post->content}}</textarea>
                    <button type="submit" class=" btn btn-primary mt-1 float-end">Update</button>
                </form>
            </div>

            </div>
        </div>

    </div>
</div>
@endsection