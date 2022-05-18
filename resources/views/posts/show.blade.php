@extends('layouts.master')

@section('title','Welcome Page')

@section('content')
    
   
<div class="container">
    <br><br><br>
    <a href="{{route('posts')}}" class="btn btn-primary btn-sm d-none d-lg-inline">Back</a>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card p-4 shadow-sm">
                <h5 class="h6">{{$post->title}}</h5>
                <p>{{$post->created_at->diffForHumans()}}</p>
                <p>{{$post->content}}</p>
        
            </div>
            
            <ul class="list-group">
            <li class="list-group-item active  rounded-0">
                <b>Comments ({{count($post->comments)}})</b>
            </li>

            @foreach($post->comments as $comment)
                <li class="list-group-item  rounded-0">
                    <a href="{{url("/comments/delete/$comment->id")}}" class="btn-close float-end"></a>
                    {{$comment->content}}

                    <div class="small mt-2">
                        By <b>{{$comment->user->name}}</b>
                    </div>
                </li>
            @endforeach
            </ul>
            @auth
            <form action="{{url('/comments/add')}}" method="post">
                @csrf 
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <textarea name="content" class="form-control mb-2" placeholder="New Comment"></textarea>
                <input type="submit" value="Add Comment" class="btn btn-secondary">
            </form>
            @endauth
        </div>
    </div>

</div>




    
@endsection