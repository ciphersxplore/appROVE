<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        appROVE
    </title>
    
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    
    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Kodchasan|Paytone+One|Raleway&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('videos/houses.mp4') }}" type="video/mp4">
            </video>
            <div class="container-fluid">
                
                {{-- nav bar --}}
                <nav class="navbar navbar-expand-md text-white bg-transparent">
                    <a class="navbar-brand m-2" href="#"><img src="{{ asset('image/name.png') }}" alt="" width="250px" height="auto"></a>
                </nav>
                
                @if(session()->has('error'))
                <div class="alert alert-danger mb-0">
                    {{ session()->get('error') }}
                </div>
                @endif
                
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->pull('success') }}
                </div>
                @endif
                <div class="row">
                    
                    {{-- message --}}
                    <div class="col-md-6">
                        <img src="{{ asset('image/landing.png') }}" class="img-fluid m-5 mt-3" alt="" width="80%" height="auto">
                        
                        <div id="carouselId" class="carousel slide ml-5" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <p class="home_com">Instilling sustainable and responsible consumerism.</p>
                                </div>
                                <div class="carousel-item">
                                    <p class="home_com">Crafting strategic marketing and accountable production.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Login / Register --}}
                    
                    <div class="col-md-4 offset-md-1 mt-5">
                        <div class="card-landing card-signin mt-3" >
                            <div class="card-body">
                                
                                
                                <ul id="clothingnav1" class="nav nav-tabs nav-fill " role="tablist">
                                    <li class="nav-item"> <a class="nav-link active  btn_outline__purple btn_purple btn-block" href="#home1" id="hometab1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Sign in</a> </li>
                                    <li class="nav-item"> <a class="nav-link btn_purple btn_outline__purple btn-block"  href="#paneTwo1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats">Register</a> </li>
                                </ul>
                                
                                <!-- Login-->
                                <div id="clothingnavcontent1" class="tab-content ">
                                    <div role="tabpanel" class="tab-pane fade show active " id="home1" aria-labelledby="hometab1">
                                        
                                        <h1 class="login-heading mt-3 text-center">Welcome HERO!</h1>
                                        <form class="form-signin" action="/user/dashboard" method="get">
                                            @csrf
                                            <div class="form-label-group">
                                                <input type="number" id="inputPhone" class="form-control" placeholder="0912-345-678" required autofocus name="contactNumber">
                                                <label for="inputPhone">Phone Number</label>
                                            </div>
                                            
                                            <div class="form-label-group">
                                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <button class="btn btn-warning btn-block text-uppercase" {{-- href="{{ url('/user/dashboard') }} --}} type="submit" style="border: 2px white inset ">Submit</button>
                                        </form>
                                    </div>
                                    
                                    {{-- Register --}}
                                    <div role="tabpanel" class="tab-pane fade" id="paneTwo1" aria-labelledby="hatstab1">
                                        <form class="form-signin" action="/user/registration" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <h1 class="login-heading mt-3 text-center">Be ONE of US!</h1>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="offset-md-4 \">
                                                        <div class="avatar-zone" style="border-radius:50%">
                                                            <img class="img-fluid output_image" style="object-fit:contain; border-radius:50%" src="{{ asset('image/profile/add_user_image.png') }}" accept="image/*" onchange="preview_image(event)">
                                                        </div>
                                                        
                                                        <input type="file" class="upload_btn image_input" name="image" required>
                                                        <div class="overlay-layer">Upload</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputFirstname" class="form-control" placeholder="First Name" name="firstName" required autofocus>
                                                        <label for="inputFirstname" class="ml-2">First Name</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputLastname" class="form-control" placeholder="Last Name" name="lastName" required autofocus>
                                                        <label for="inputLastname" class="ml-2">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <input type="email" id="input_r_Email" class="form-control" placeholder="Email address" name="email" required>
                                                        <label for="input_r_Email">Email address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <input type="number" id="input_r_Contact" class="form-control" placeholder="Contact Number" name="contactNumber" required>
                                                        <label for="input_r_Contact">Contact Number</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <input type="number" id="input_r_Age" class="form-control" placeholder="Email address" name="age" required>
                                                        <label for="input_r_Age">Age</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="selectWrapper">
                                                        <select class="selectBox " name="gender" required>
                                                            <option value="admin">Male</option>
                                                            <option value="employer">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="password" id="input_r_Password" class="form-control" placeholder="Password" name="password" required>
                                                <label for="input_r_Password">Password</label>
                                            </div>
                                            
                                            <div class="form-label-group">
                                                <input type="password" id="input_r_ConfirmPassword" class="form-control" placeholder="Confirm Password" name="Confirm_password"  required>
                                                <label for="input_r_ConfirmPassword">Confirm password</label>
                                                <span class="ml-3" id="message"></span>
                                            </div>
                                            <button class="btn btn-warning btn-block text-uppercase" type="submit" style="border: 2px white inset">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
</body>
</html>
