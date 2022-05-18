@extends('layouts.master')
@section('title','Create Role')

@section('content')
    <div class="container col-md-8 offset-md-2">
    <div class="clear"><br><br><br></div>
        <h1 class="mb-4">Roles</h1>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Name</th>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection