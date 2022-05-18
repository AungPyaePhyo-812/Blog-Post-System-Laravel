@extends('layouts.master')

@section('title','Admin Page')

@section('content')



<!-- Side Bar Start  -->
<div class="container-fluid ">
    <div class="row g-0">
        <div class="col-2">
            <div class="list-group  text-center text-lg-start mt-5">
                <span class="list-group-item border-0 mt-2">
                    <a href="/dashboard" class="text-decoration-none list-group-item-action">Dashboard</a>
                </span>

                <span href="#" class="text-decoration-none list-group-item list-group-item-action disabled border-0">CONTROLS</span>

                <a href="/users" class="text-decoration-none list-group-item list-group-item-action border-0">Users</a>

                <a href="/posts" class="text-decoration-none list-group-item list-group-item-action border-0">Posts</a>

                <a href="/roles" class="text-decoration-none list-group-item list-group-item-action border-0">Roles</a>

                <a href="/message" class="text-decoration-none list-group-item list-group-item-action border-0">Messages</a>

                


              

                <span href="#" class="text-decoration-none list-group-item list-group-item-action disabled border-0">ACTIONS</span>

                
                <a href="/posts/create" class="text-decoration-none list-group-item list-group-item-action border-0">Add New Post</a>


                <a href="/manageusers" class="text-decoration-none list-group-item list-group-item-action border-0">Manage Users</a>

                <a href="/roles/create" class="text-decoration-none list-group-item list-group-item-action border-0">Create Roles</a>



               
            </div>
        </div>

        <!-- Side Bar End -->

        
        <div class="col-10">
            <h2 class="h6 mt-5 py-3">Dashboard</h2>

            <div class="row flex-column flex-lg-row mt-5">
                <div class="col">
                    <div class="card mb-3 text-center">
                        <div class="card-body">
                            <h3 class="card-title h2">{{$count[0]}}</h3>
                            <span class="text-success">
                                Daily Messages
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 text-center">
                        <div class="card-body">
                            <h3 class="card-title h2">{{$count[1]}}</h3>
                            <span class="text-success">
                                Weekly Messages
                            </span>
                        </div>
                    </div>
                </div>

            </div>


             
            <div class="row flex-column flex-lg-row mt-5">
                <div class="col">
                    <div class="card mb-3 text-center">
                        <div class="card-body">
                            <h3 class="card-title h2">{{$count[2]}}</h3>
                            <span class="text-success">
                                Monthly Messages
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 text-center">
                        <div class="card-body">
                            <h3 class="card-title h2">{{$count[3]}}</h3>
                            <span class="text-success">
                                Yearly Messages
                            </span>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </div>
</div>

    
@endsection