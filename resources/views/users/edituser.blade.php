@extends('layouts.master')

@section('title','User Page')

@section('content')

    
<div class="container col-md-8 offset-md-2">
    <div class="well">
    <form action="{{url('/users/'.$user->id. '/edituser')}}" method="post">
        @csrf
        <div class="form-group">
            <br><br><br><br>
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" value="{{$user->name}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <select name="role[]" class="form-control" multiple>
                @foreach($roles as $role)
                    <option value="{{$role->name}}"
                    @if(in_array($role->name,$selectedRoles))
                        selected = "selected"
                    @endif>{{$role->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary float-end mt-3">Update</button>
    </form>
    </div>
</div>
@endsection