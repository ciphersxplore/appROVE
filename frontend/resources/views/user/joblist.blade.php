<!DOCTYPE html>
<html>
<head>
<hr>
	<h2 class='jobs'> Job Listings</h2>
<hr>

<section class="search_body">

      <div class="input-group md-form form-md form-1 pl-0">
      
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
    
</section>  <meta charset="utf-8">
  <meta name= "viewport" content= "width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE-Edge">

  <title>appROVE: Job Listings</title>

  <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/captureicon.png">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap.min.css">

  <!-- Custom CSS -->
  <link href="assets/styles/stylish-portfolio.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>


  <hr>
  <h2 class='jobs'> Job Listings</h2>
  <hr>

  <section class="search_body">

    <div class="input-group md-form form-md form-1 pl-0">

      <input class="form-control" id="myInput" type="text" placeholder="Search..">

    </section>

    <section class="main_body">
      <div id="myDIV">
        <div class="card col-lg-12"> 
          <div class="row cardrow">
            <div class="card-img col-lg-5">
              <img src="assets\images\gallery\home-credit.png">
            </div>

            @forelse($jobs as $job)
            <div class="parag col-lg-5">
              <a href="https://www.kalibrr.com/c/home-credit-indonesia-recruitment-page-for-marketing-strategy-team/jobs/131930/2w-product-manager?job_ref=&sort=Alphabetical&source=job-board-1-1-15-487&similar_job_code=1"><h4>{{$job->jobTitle}}</h4></a>
              <a class="links" href="https://www.kalibrr.com/c/home-credit-indonesia-recruitment-page-for-marketing-strategy-team/jobs/131930/2w-product-manager?job_ref=&sort=Alphabetical&source=job-board-1-1-15-487&similar_job_code=1">Home Credit Indonesia (Recruitment Page for MARKETING & STRATEGY team)</a>. <p>Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

              <p> Posted a month ago · Apply before 1 Oct </p>
              <p>Recruiter was hiring a day ago</p>

              <p align="right">
                <button type="submit" class="btn btn-success btn-lg">Apply</button>
              </p>
            </div>
            @endforelese
          </div>
        </div>
      </section>
      <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myDIV *").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
    </body>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="assets/js/stylish-portfolio.min.js"></script>
 </html>