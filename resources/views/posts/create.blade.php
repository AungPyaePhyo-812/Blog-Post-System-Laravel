@extends('layouts.master')
@section('title', 'Create')

@section('content')


<!-- Side Bar Start  -->
<div class="container-fluid">
    <div class="row g-0">
        <div class="col-2">
            <div class="list-group  text-center text-lg-start mt-5">
                <span class="list-group-item border-0 mt-2">
                    <a href="#" class="text-decoration-none list-group-item-action">Dashboard</a>
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
            <h2 class="h6 mt-5 py-3">Add New Post</h2>
            @if(Session('status'))
                <p class="alert alert-success">
                    {{Session('status')}}
                </p>
            @endif
            <div class="col-md-8 offset-md-2">
                
            <div class="card p-5 pb-3 shadow-lg">
                <form action="" method="post">
                    @csrf
                    <h1 class="text-center">Create A Post</h1>
                    <label for="title">Title</label>
                    <input type="text" class="form-control 
                    @if($errors->has('title'))
                        is-invalid
                    @endif
                    " name="title" value="{{old('title')}}">
                    @if($errors->has('title'))
                    <span class="text-danger">{{$errors->first('title')}}</span><br>
                    @endif
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control 
                    @if($errors->has('description'))
                        is-invalid
                    @endif" id="" value="{{old('description')}}">
                    <span class="text-danger">{{$errors->first('description')}}</span><br>

                    <label for="content">Content</label>
                    <textarea name="content" id="" cols="30" rows="3" class="form-control 
                    @if($errors->has('content'))
                        is-invalid
                    @endif
                    " >
                    {{old('content')}}
                    </textarea>
                    <span class="text-danger">{{$errors->first('content')}}</span><br>
                    <button type="submit" class=" btn btn-primary mt-1 float-end">Create</button>
                </form>
            </div>

            </div>
        </div>

    </div>
</div>
@endsection