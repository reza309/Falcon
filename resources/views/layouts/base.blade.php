<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falcon Soft Ltd.</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <!-- Styles -->
     <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @livewireStyles

       
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark theme-color" style="border-bottom: 4px solid #4C0DB5; padding-bottom: 0;">
        <div class="container-fluid">
            <a href="javascript:void(0)" class="navbar-brand">
                <img src="{{asset('images/falcon-logo.png')}}" alt="Falcon Soft" style="width:57px" srcset="" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item btn-custom">
                        <a href="{{route('main.home')}}" class="nav-link custom-active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="demo.html" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->u_type=='ADM')
                                <li class="nav-item dropdown">
                                    <a href="{{route('admin.dashboard')}}" class="nav-link dropdown-toggle border rounded" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-color:#070317 !important; padding:4px">
                                        My Account    
                                        <img src="{{asset('images/profile/default.png')}}" alt="User image float-start" class="img img-fluid rounded-circle" style="width:32px; height:32px; border:1px solid; padding:3px">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                            <form action="{{route('logout')}}" method="post">
                                                @csrf
                                               
                                                    <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();closest('form').submit();">logout</a>
                                               
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <li class="nav-item">
                                        <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();closest('form').submit();">logout</a>
                                    </li>
                                </form>
                            @else
                                <li class="nav-item dropdown mb-lg-0 mb-3">
                                    <a href="{{route('user.dashboard')}}" class="nav-link dropdown-toggle border rounded" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-color:#070317 !important; padding:4px">
                                        My Account    
                                        
                                        @if($user->profile->images)
                                        <img src="{{asset('storage/app/profile')}}/{{$user->profile->images}}" alt="Profile Image " class="img img-fluid rounded-circle" style="width:32px; height:32px; border:1px solid; padding:3px">
                                        @else
                                        <img src="{{asset('images/profile/default.png')}}" alt="User image" class="img img-fluid rounded-circle" style="width:32px; height:32px; border:1px solid; padding:3px">
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.profile')}}">Profile</a></li>
                                        <li>
                                            <form action="{{route('logout')}}" method="post">
                                                @csrf
                                                    <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();closest('form').submit();">logout</a>
                                               
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        @else
                        <li class="nav-item ">
                            <a href="{{route('login')}}" class="nav-link">Login</a>
                        </li>
                        @endif
                    @endif
                        
                </ul>
                <form action="#" method="post" class="d-flex mb-lg-0 mb-3">
                    <input type="search" name="search" class="form-control search-filed">
                    <button type="button" class="btn btn-primary search-btn btn-custom">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- carousel logo -->
    <div class="carousel-logo">
        <a href="http://" class="carousel-logo-link">
            <img src="{{asset('images/falcon-logo.png')}}" class="carousel-logo-img float-end" alt="Falcon Soft Ltd." srcset="">
            <div class="clearfix"></div>
        </a>
    </div>
    <!-- carousel logo end -->
    <!-- custom carousel start -->
    <div class="custom-slide">
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
        <div class="c-c-item" style="background-image: url({{asset('images/galaxi-tech.jpg')}});"></div>
    </div>
    <!-- custom carousel end -->
    {{$slot}}
    <!-- start footer section -->
    <footer class="footer container-fluid">
        <div class="p-lg-3 position-relative" style="z-index: 1;">
            <hr class="p-lg-3">
            <div class="p-lg-3" style="background-color: #000000b3;">
                <div class="row">
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="float-start">
                            <img src="{{asset('images/falcon-logo.png')}}" alt="Falcon icon" class="img img-fluid foot-logo">
                        </div>
                        <span class="text-white-50 d-block mt-lg-3 ps-lg-5 copy-txt-m">
                            Alright Reserved&copy; Falcon Soft Ltd.
                        </span>
                        <div class="text-white-50">
                            Since: December 2021
                        </div>
                    </div>
                    <!-- ending first col -->
                    <!-- start second col -->
                    <hr class="p-2 p-lg-0 d-lg-none">
                    <div class="col-lg-4 mb-lg-0 mb-3 col-md-6">
                        <h3 class="text-white-50">Products</h3>
                        <hr>
                        <span class="text-white-50">
                            <a href="#" class="text-decoration-none">Web site Theme</a>
                        </span>
                        <br>
                        <span class="text-white-50">
                            <a href="#" class="btn btn-link text-decoration-none ps-0 pe-lg-2">Wordpress Theme</a>
                        </span>
                    </div>
                    <!-- ending second col -->
                    <!-- start third col -->
                    <hr class="p-2 p-lg-0 d-lg-none d-md-none">
                    <div class="col-lg-4 mb-3 mb-lg-0 col-md-6">
                        <h3 class="text-white-50">
                            Contact us
                        </h3>
                        <hr>
                        <span class="d-block text-white-50">
                            Mail: falcon.soft@gmail.com
                        </span>
                        <span class="d-block text-white-50">
                            phone: 0176XXXXXXX
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/nav.js')}}"></script>
        
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Alpine.js -->
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    @stack('modals')
    @livewireScripts
</body>
</html>