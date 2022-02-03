<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ansemiss') }}</title>

    <!-- Scripts -->
        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
  
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css')}}">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

      <link rel="stylesheet" href="{{ asset('css/me.css')}}">
    <link rel="stylesheet" href="{{ asset('css/react.css')}}">
    <link rel="stylesheet" href="{{ asset('css/zero.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.less')}}">

    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

    <!-- Preloader Start Here -->
    <body>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper bg-ash">
           <!-- Header Menu Area Start Here -->
            <div class="navbar navbar-expand-md header-menu-one bg-light">
                <div class="nav-bar-header-one">
                    <div class="header-logo">
                        <a href="{{ route('dashboard') }}">
                            {{-- <img src="img/logo.png" alt="logo"> --}}
                        </a>
                    </div>
                     <div class="toggle-button sidebar-toggle">
                        <button type="button" class="item-link">
                            <span class="btn-icon-wrap">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="d-md-none mobile-nav-bar">
                   <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                        <i class="far fa-arrow-alt-circle-down"></i>
                    </button>
                    <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                    <ul class="navbar-nav">
                        <li class="navbar-item header-search-bar">
                            <div class="input-group stylish-input-group">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="flaticon-search" aria-hidden="true"></span>
                                    </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Find Something . . .">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="navbar-item dropdown header-admin">
                            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <div class="admin-title">
                                    <h5 class="item-title">{{ Auth::user()->name }}</h5>
                                    <span>Admin</span>
                                </div>
                                <div class="admin-img">
                                    <img src="img/figure/admin.jpg" alt="Admin">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="item-header">
                                    <h6 class="item-title">{{ Auth::user()->name }}</h6>
                                </div>
                                <div class="item-content">
                                    <ul class="settings-list">
                                        <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                        <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                        <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                        <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                        {{-- <li><a href="{{ route('logout') }}"><i class="flaticon-turn-off"></i>Log Out</a></li> --}}
                                        <li><a href="login.html"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                        {{-- <li >
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="navbar-item dropdown header-message">
                            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="far fa-envelope"></i>
                                <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                                <span>5</span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="item-header">
                                    <h6 class="item-title">05 Message</h6>
                                </div>
                                <div class="item-content">
                                    <div class="media">
                                        <div class="item-img bg-skyblue author-online">
                                            <img src="img/figure/student11.png" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Maria Zaman</span> 
                                                    <span class="item-time">18:30</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-img bg-yellow author-online">
                                            <img src="img/figure/student12.png" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Benny Roy</span> 
                                                    <span class="item-time">10:35</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-img bg-pink">
                                            <img src="img/figure/student13.png" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Steven</span> 
                                                    <span class="item-time">02:35</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-img bg-violet-blue">
                                            <img src="img/figure/student11.png" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Joshep Joe</span> 
                                                    <span class="item-time">12:35</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar-item dropdown header-notification">
                            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                                <span>8</span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="item-header">
                                    <h6 class="item-title">03 Notifiacations</h6>
                                </div>
                                <div class="item-content">
                                    <div class="media">
                                        <div class="item-icon bg-skyblue">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="post-title">Complete Today Task</div>
                                            <span>1 Mins ago</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-icon bg-orange">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="post-title">Director Metting</div>
                                            <span>20 Mins ago</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-icon bg-violet-blue">
                                            <i class="fas fa-cogs"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="post-title">Update Password</div>
                                            <span>45 Mins ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                         <li class="navbar-item dropdown header-language">
                            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" 
                            data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                            {{-- <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">Spanish</a>
                                <a class="dropdown-item" href="#">Franchis</a>
                                <a class="dropdown-item" href="#">Chiness</a>
                            </div> --}}
                        </li>
                    </ul>
                </div>
            </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
</body>
</html>
        