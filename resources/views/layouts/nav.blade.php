  <!-- Navigation Bar Section Start  -->
   
  <div class="nav-bar">
            <nav class="container-fluid navbar bg-light navbar-light  shadow-lg navbar-expand-lg
            fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/">
                  <img src="{{asset('imgs/logo.png')}}" width="30px" height="30px" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon " ></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="/about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/posts">Blogs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="/contact">Contact</a>
                      </li>
                      <li class="nav-item dropdown ">
                        <a class="nav-link  dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          @auth
                          {{Auth::user()->name}}

                           @endauth

                           @guest 
                           Member 
                           @endguest
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @auth
                        @if(Auth::user()->hasRole('Admin'))
                        <li><a class="dropdown-item" href="/dashboard">Admin</a></li>
                        @endif
                        <li><a class="dropdown-item" href="/users/change_password">Change Password</a></li>
                          <li><a class="dropdown-item" href="/user/logout">Logout</a></li>
                         
                        @endauth

                        @guest
                          <li><a class="dropdown-item" href="/user/login">Login</a></li>
                          <li><a class="dropdown-item" href="/user/register">Register</a></li>
                        @endguest
                         
                        </ul>
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </nav>
        </div>
   
    <!-- Navigation Bar Section End  -->