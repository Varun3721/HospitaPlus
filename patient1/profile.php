<?php
session_start();
include("pcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hospita+</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" /> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />

  <link rel="stylesheet" href="./css/appoint.css" />
     
    <!--- ssssssssssssssssssss -->
     <script>
   
    </script>
</head>

<body style="background-color:#f9f9f9;">
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Hospita+</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div >
    <!-- 2 column grid layout with text inputs for the first and last names -->
   
      
      
                           
              		
						<div style="width:90%;height:auto;margin-left:5%;margin-top:1%;margin-bottom:3%;
                                    background-color:white;padding:1%;">
                    <div style="border-bottom:2px solid black;width:95%;text-align:center;">
                        <h1>Rohini Clinic</h1>
                            </div>
                    <div style="width:95%;text-align:center;margin-top:1%;height:auto;">
                            <img src="img/profile.jpg" width="50%" height="50%;" > 
                        <p >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id rutrum enim. Etiam ornare nisl quis nulla finibus laoreet. Vivamus ac imperdiet mauris. Praesent interdum volutpat orci, maximus mattis nulla vulputate non. Donec euismod nisi a lacus interdum congue. Quisque non arcu non quam efficitur dignissim nec ac ipsum. Duis tincidunt nunc mauris, et vehicula erat viverra ut. Aenean vel sem quam. Suspendisse augue purus, egestas quis diam nec, posuere egestas diam.

                        </p>
                        <hr>
                        <h4>Clinic Timing</h4>
                        
                        <h6>Morning: 10:00 am to 3:00 pm</h6>
                        <h6>Evening: 5:00 pm to 7:00 pm</h6>
                         <hr>
                        <h4>Clinic Address</h4>
                       
                        <h6>A1/a2, Giriraj Industrial Estate, Mahakali Caves Road, Andheri (west)<br>
                        Mumbai, Maharashtra </h6>
                        <h6>Contact details :
                         02226871136,02226871136</h6>
                            </div> 
                            
                            <hr>
                            
                    <div style="width:95%;margin-top:1%;padding:2%;height:auto;text-align:center;">
                         <h2>Doctor's profile</h2>
                        <hr>
                        <h4>Dr. Avdhesh Singh</h4>
                        <h6>MBBS</h6>
                        <h6>Speciality:Psychologist,Neurologist</h6>
                        <h6>Experience :10+ yrs</h6>
                        
                    </div>
					
						
				</div>             
                        
      </div>
      <!-- end for class "row" -->
 
    <!-- end for class "container" -->
  

  <footer id="contactus">
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-md-5">
          <h1 class="text-light">Contact Us</h1>
          <p class="text-muted">
            For more Suggestion,and any feedback,Please contact us
          </p>
          <p class="pt-4 text-muted">
            © 2021 Hospita+, Inc. All Rights Reserved
          </p>
        </div>
        <div class="col-md-5">
          <h4 class="text-light">Connect to us</h4>

          <form class="form-inline">
            <div class="col pl-">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" placeholder="Email" />
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-dark">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
</body>

</html>