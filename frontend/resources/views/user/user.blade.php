@extends('layouts.app')

@section('content')

<body>
    <div class="sticky-top">
        <ul class="nav" id="navlogo">
            <li class="nav-item">
                <a href="#"><img id="approvelogo" src="assets/image/approve.png"></a>

            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-2">
            <div class="sidenav">
                <img id="profilepic" src="assets/image/one.jpg">
                <span id="profilename">Dan kriss Camerino</span>
                <small id="profileemail">dkcamerino03@gmail.com</small>
            </div>
        </div>

        <div class="col-6">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i>Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-md"></i>Jobs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-question"></i>Help and support</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>


                    </ul>
                </div>
            </nav>
            <hr>
            <div class="card cstatus bg-light mb-3" style="max-width: 10rem;">
                <div class="card-body">
                    <p class="card-text">Age: 28</p>
                </div>
            </div>

            <div class="card cstatus bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <p class="card-text">Phone: 09778215379</p>
                </div>
            </div>

            <div class="card cstatus bg-light mb-3" style="max-width: 10rem;">
                <div class="card-body">
                    <p class="card-text">Gender: Male</p>
                </div>
            </div>

            <div class="card cstatus bg-light mb-3" style="max-width: 10rem;">
                <div class="card-body">
                    <p class="card-text">Status: Single</p>
                </div>
            </div>

            <div class="card cstatus bg-light mb-3" style="max-width: 40rem;">
                <div class="card-body">
                    <p class="card-text">Address: Taytay Rizal Ridgemont Subd.</p>
                </div>
            </div>

            <div class="card cstatus bg-light mb-3" style="max-width: 40rem;">
                <div class="card-body">
                    <p class="card-text">Skills:</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

    </div>



        <script src="assets/js/script.js"></script>
    </body>
