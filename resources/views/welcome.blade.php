@extends('layouts.master')

@section('title','Welcome Page')

@section('content')
    
    <!-- Home Section Start -->
    
        <header id="home">
            <!-- background video  -->
            <video id="home-bg-video" autoplay loop muted>
                <source src="video/bg.mp4" type="video/mp4">
            </video>
        </header>
        <div id="home-overlay"></div>
        <div id="home-content" class="text-center">
            <div id="home-content-inner">
                <h1>Welcome to Tech By AP</h1>
                <div id="home-btn" class="btn btn-general btn-home"><a href="/blog"
                class="text-decoration-none">Get Started</a></div>
            </div>
        </div>

    <!-- Home Section End -->
    




    
@endsection