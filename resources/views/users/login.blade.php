@extends('layouts.master')

@section('title','Login')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="clear"><br><br><br><br><br></div>
        <div class="col-md-6 offset-md-3">
           <div class="card shadow-lg p-4">
           <h1 class="text-center   mb-3">Login User</h1>
            <form action="" method="post">
               @if(Session::get('success'))
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>{{Session::get('success')}}</strong>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
               @endif
                @csrf
                

                   <div class="mb-3">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email" id="email" class="form-control
                       @if($errors->has('email'))
                           is-invalid
                       @endif
                       " value="{{old('email')}}">
                       @if($errors->has('email'))
                       <div class="form-text text-danger">{{$errors->first('email')}}</div>
                       @endif                   
                    </div>

                           <div class="mb-3">
                               <label for="password" class="form-label">Password</label>
                               <input type="password" name="password" id="password" class="form-control
                               @if($errors->has('password'))
                                   is-invalid
                               @endif
                               ">
                               @if($errors->has('password'))
                               <div class="form-text text-danger">{!!$errors->first('password')!!}</div>
                               @endif                            
                           </div>

                       <button type="submit" class="btn btn-primary float-end ms-2">Login</button>
                       <button type="reset" class="btn btn-danger float-end">Cancel</button>
                   </div>
            </form>
           </div>

        </div>

    </div>

    
@endsection