@extends('layouts.master')

@section('title','Blogs')

@section('content')


    <!-- Blog Section Start  -->
    <section id="blog">
        <div class="container-fluid p-4">
            <h1 class="vertical-heading2">Latest Blogs</h1>
           <div class="container blog-start">
            <div class="row">
                <!-- Show a little Blog Posts  -->
               
                @foreach($posts as $post)
                
                <div class="col-md-4">
                    <div class="card shadow-lg p-3 mb-2 ml-2">
                        <div class="card-title">
                            {{$post->title}}
                        </div>
                        <small>{{$post->created_at->diffForHumans()}}</small>
                        <div class="card-body">
                           <p> {{mb_substr($post->description,0,35)}}</p>
                            <!-- Only Admin can see delete and edit   -->
                           @auth
                            @if(Auth::user()->hasRole('Admin'))
                            <a href="{{url("/posts/delete/" .$post->id)}}" class="btn btn-sm btn-danger float-end ms-2">Delete</a>
                            <a href="{{url("/posts/edit/" .$post->id)}}" class="btn btn-sm btn-warning float-end ms-2">Edit</a>
                            
                            @endif
                            @endauth

                            @auth
                            <a href="{{url("/posts/show/" .$post->id)}}" class="btn btn-sm btn-info float-end">Details</a>
                            @endauth

                            @guest 
                            <a href="{{url("/posts/show/" .$post->id)}}" class="btn btn-sm btn-info float-end">Details</a>
                            @endguest
                        </div>
                        
                    </div>
                </div>
                @endforeach  
                </div>
                <div class="float-end mt-1"><a href="/allposts" class="btn view-all-posts btn-warning">View All Posts</a>
                    </div>
            </div>


            
           </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection