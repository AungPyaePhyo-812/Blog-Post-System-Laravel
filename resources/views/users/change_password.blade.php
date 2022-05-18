@extends('layouts.master')
@section('title','Change Password')

@section('content')
<br><br><br>

<div class="container col-md-6 offset-md-3">
    @if(Session('success'))
        <div class="alert alert-success">{{Session('success')}}</div>
    @endif

    @if(Session('error'))
        <div class="alert alert-danger">{{Session('error')}}</div>
    @endif
    <div class="card ">
        <div class="card-header rounded-0">
            <h6>Change Password</h4>
        </div>

        <form action="{{route('update_password')}}" method="post">
            @csrf 
            <div class="form-group mt-3">
                <label for="old_password">Old Password</label>
                <input type="password" name="old_password" class="form-control  @if($errors->has('old_password'))
                 is-invalid
                 @endif">
                 @if($errors->has('old_password'))
                <small class="text-danger">{{$errors->first('old_password')}}</small>
                @endif
            </div>

            <div class="form-group mt-3">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" class="form-control
                 @if($errors->has('new_password'))
                 is-invalid
                 @endif
                ">
                @if($errors->has('new_password'))
                <small class="text-danger">{{$errors->first('new_password')}}</small>
                @endif
            </div>

            <div class="form-group mt-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control 
                @if($errors->has('password_confirmation'))
                 is-invalid
                 @endif
                ">
                
                @if($errors->has('password_confirmation'))
                <small class="text-danger">{{$errors->first('password_confirmation')}}</small>
                @endif
            </div>

            <button type="submit" class="btn btn-primary mt-3 mb-2">Change Password</button>
        </form>
    </div>
</div>
@endsection