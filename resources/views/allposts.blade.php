@extends('layouts.master')

@section('title','Blogs')

@section('content')


    <!-- Blog Section Start  -->
    <section id="blog">
        <div class="container-fluid p-3">
            <h1 class="vertical-heading2">Latest Blogs</h1>
           <div class="container blog-start">
            <div class="row">
            <div class="d-none d-lg-inline">
            <a href="{{url()->previous()}}" class="btn btn-primary btn-sm mt-3 mb-2 ">
                Back</a>
            </div>
                <!-- Show a little Blog Posts  -->
                @foreach($posts as $post)
                
                <div class="col-md-4 mb-2 ml-2">
                    <div class="card shadow-lg p-3">
                        <div class="card-title">
                            {{$post->title}}
                        </div>
                        <small>{{$post->created_at->diffForHumans()}}</small>
                        <div class="card-body">
                        <p> {{mb_substr($post->description,0,35)}}</p>
                           
                        </div>
                        
                        <div class="">
                            @auth
                            @if(Auth::user()->hasRole('Admin'))
                            <a href="{{url("/posts/delete/" .$post->id)}}" class="btn btn-sm btn-danger float-end ms-2">Delete</a>
                            <a href="{{url("/posts/edit/" .$post->id)}}"  class="btn btn-sm btn-warning float-end ms-2">Edit</a>
                            <a href="{{url("/posts/show/" .$post->id)}}" class="btn btn-sm btn-info float-end">Details</a>
                            @endif
                            @endauth
                            @guest
                            <a href="{{url("/posts/show/" .$post->id)}}" class="btn btn-sm btn-info float-end">Details</a>
                            @endguest
                        </div>
                    </div>
                </div>
                @endforeach  
                </div>
                
            </div>

    
            
           </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection