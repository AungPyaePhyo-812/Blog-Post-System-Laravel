@extends('layouts.master')

@section('title','Register')

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 offset-md-3">
        <div class="clear-both"><br><br><br></div>
            <div class="card shadow-lg p-3 pb-3">
            <h1 class="text-center mb-2">Register User</h1>
            
            <form action="" method="post">
                @csrf
                <div class="mb-2">
                       <label for="name" class="form-label">Username</label>
                       <input type="text" name="name" id="name" class="form-control
                       @if($errors->has('name'))
                           is-invalid
                       @endif
                       " value="{{old('name')}}">
                       @if($errors->has('name'))
                       <div class="form-text text-danger">{{$errors->first('name')}}</div> 
                       @endif
                   </div>

                   <div class="mb-2">
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


                    <div class="mb-2">
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
                                   
                      
                       
                    <div class="mb-2">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control
                        @if($errors->has('phone'))
                            is-invalid
                        @endif
                        ">
                        @if($errors->has('password_confirmation'))
                        <div class="form-text text-danger">{{$errors->first('password_confirmation')}}</div>
                        @endif                            
                    </div>
                       

                       <div class="mt-3">
                       <button type="submit" class="btn btn-primary float-end ms-2">Register</button>
                       <button type="reset" class="btn btn-danger float-end">Cancel</button>
                       </div>
                   </div>
            </form>
            </div>

        </div>

    </div>
@endsection