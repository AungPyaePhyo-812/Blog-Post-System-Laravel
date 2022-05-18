@extends('layouts.master')
@section('title','Create Role')

@section('content')
    <div class="container col-md-8 offset-md-2">
    <div class="clear"><br><br></div>
        <div class="card p-5 mt-4">
            <form method="post">
                <h2>Create A Role</h2>

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{!! $error !!}</p>
                @endforeach

                @if(Session('success'))
                    <p class="alert alert-success">{{Session('success')}}</p>
                @endif
                @csrf 
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Role Name">
                    <button type="submit" class="btn btn-primary mt-3">Insert</button>

                </div>
            </form>
        </div>
    </div>
@endsection