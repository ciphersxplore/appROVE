<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>
        appROVE
    </title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
  <link rel="shortcut icon" href="{{ asset('image/logo2.png') }}" type="image/x-icon">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Top Navbar -->
    <div class="sticky-top">
        <ul class="nav" id="navlogo">
            <li class="nav-item">
                <a href="{{ url('/user/dashboard') }}"><img id="approvelogo" src="{{ asset('image/name.png') }}"></a>
                
            </li>
        </ul>
    </div>
    <!-- Side Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="#"><i class="fas fa-user-md"></i> Jobs</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="#"><i class="fas fa-book-open    "></i> Trainings</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="#"><i class="fa fa-bus" aria-hidden="true"></i> Schedules</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>   
            </ul>
        </div>
    </nav>
    
    <div class="row container-fluid">
        <div class="col-2">
            <div class="sidenav">
                <img id="profilepic" src="{{ asset('image/profile/1x1.jpg') }}">
                <hr class="alert-light">
                <ul class="sidebar navbar-nav pl-3">
                    <li li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Settings</span>
                        </a>
                    </li> --}}
                    <li li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            <i class="fa fa-question" aria-hidden="true"></i>
                            <span>Help & Support</span>
                        </a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>Contact Us</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <h6 class="dropdown-header">Create Screens:</h6>
                            <p class="dropdown-item" href="register.html">Raise Ticket</p>
                            <p class="dropdown-item" href="forgot-password.html">Email Us</p>
                            <p class="dropdown-item" href="login.html">Call Us</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            
            <div class="profileinfo">
                <div class="row pt-4 pb-4">
                    <div class="col-11 mt-2">
                        <h6>Name:</h6>
                        <h1>Dan Kriss Camerino</h1>
                        <hr>
                    </div>
                </div>
                
                <div class="row mt-1 personalInfo">
                    <div class="col-2">
                        
                    </div>
                    <div class="col-2">
                        <h6>Gender</h6>
                    </div>
                    <div class="col-3">
                        <h6>Contact</h6>
                    </div>
                    <div class="col-5">
                        <h6>Email</h6>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-2">
                        <h5>28</h5>
                    </div>
                    <div class="col-2">
                        <h5>Male</h5>
                    </div>
                    <div class="col-3">
                        <h5>09778215279</h5>
                    </div>
                    <div class="col-5">
                        <h5>kriss.camerino@gmail.com</h5>
                    </div>
                </div>
            </div>
            
            
            <div class="profileinfo col-12 mt-4">
                <div class="row pt-5">
                    <div class="col-12">
                        <div>
                            <h6 class="nameTag">Skills:</h6> 
                            <h5>Carpentry, Encoding, Masonry, Pokemon Training</h5>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <hr style="border: 1px dashed #999;">
                        <h6 class="nameTag">Trainings:</h6>
                        <h5>Sinnoh League Runner Up, NCIII Bookkeeping</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row justify-content-center" style="padding-top: 5.6rem;">
                <div class="col-12 px-5">
                    <div class="card mx-auto">
                        <div class="card-header text-center">
                            <h3>Active Trainings</h3>
                        </div>
                        <div class="card-body">
                            <div class="card mx-auto text-light bg-dark mb-3" style="max-width: 25rem;">
                                <div class="card-header">Training 01</div>
                                <div class="card-body">
                                    <h5 class="card-title">NCIII - Bookkeeping</h5>
                                    <p class="card-text">Schedule: Tuesday, 08:00 AM - 05:00 PM</p>
                                    <button class="btn btn-success btn-block" type="button">Attend</button>
                                </div>
                            </div>
                            <div class="card mx-auto text-light bg-dark mb-3" style="max-width: 25rem;">
                                <div class="card-header">Training 02</div>
                                <div class="card-body">
                                    <h5 class="card-title">NCII: Construction and Carpentry</h5>
                                    <p class="card-text">Schedule: Tuesday, 08:00 AM - 05:00 PM</p>
                                    <button class="btn btn-success btn-block" type="button">Attend</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>
