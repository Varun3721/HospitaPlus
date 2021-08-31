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
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Hospita+</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Hospitaplus.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="container-fluid">
      
        <div class="page-header">
          <h1>Patient Appointment Form</h1>
        </div>
       <div class="form_div" style="">
                            <form method="post" action="patientapp.php">
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Name" required>
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="age" placeholder="Age" 
        pattern="[0-9]{2-3}" title="please enter valid age" required>
  </div>
     <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="number" placeholder="contact number" 
        pattern="[0-9]{10}" title="please enter valid 10-digit mobile number"   required>
  </div>
     <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="address" placeholder="Address" required>
  </div>
                             <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
  <label class="form-check-label" for="exampleRadios2">
    female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="other" >
  <label class="form-check-label" for="exampleRadios3">
    Other
  </label>
</div>
                                <div class="sb_btn">
<input class="btn btn-primary" type="submit" value="Submit" name="app_submit">
<input class="btn btn-primary" type="reset" value="Reset" name="app_reset"></div>
</form>
                           
                            </div>
      </div>
      <!-- end for class "row" -->
 
    <!-- end for class "container" -->
  </main>

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