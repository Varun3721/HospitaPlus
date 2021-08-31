<?php
session_start();
include("pcon.php");
$active = $_SESSION["app"];
if($active == true){
    
}
else{
    header("location:patientapp.php");
}
$view = "SELECT * FROM tb1_current where tb1_current.p_app = '$active'";

    $ve= mysqli_query($connection,$view);

    $row = mysqli_fetch_assoc($ve);

?>
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
    <style>
        #tb{
            padding-top: 5%;
            padding-bottom: 3%;
            height: auto;
            background-color: #40C2E3 ;
           
        }
        #tb table {
            
            border-radius: 20px;
            background-color: white;
            margin-left: 19%;
            margin-right: 19%;
            
            width: 60%;
        }
         #app {
            background-color: ;
            margin-left: 19%;
            margin-right: 19%;
            font-size: 4vw;
            width: 60%;
             text-align: center;
             padding-bottom: 3%;
             color:white;
        }
        #tb table td{
            
            text-align: center;
            padding: 1% 0% 1% 0%;
            width: 70%;
            font-size: 1.5vw;
        }
         #tb table th{
            
            text-align: center;
            padding: 1% 0% 1% 0%;
            width: 30%;
             font-size: 1.5vw;
        }
        
    </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="Hospitaplus.php"><h3>Hospita+</h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
       
      </div>
    </nav>
  </header>
  <div>
    <div id="tb">
        <div id="app">Your Appointment No:<h1> <?php echo $row['p_app']; ?></h1></div>
        <table>
        
            <?php
           echo "<tr><th colspan='2'>Appointment Details</th></tr>
           <tr><th>Id</th><td>".$row['p_id']."</td></tr> 
           
           <tr><th>Date</th><td>".$row['p_date']."</td></tr>
           <tr><th>Name</th><td>".$row['p_name']."</td></tr>
           <tr><th>Gender</th><td>".$row['p_gender']."</td></tr>
           <tr><th>Age</th><td>".$row['p_age']."</td></tr>
           <tr><th>Contact</th><td>".$row['p_contact']."</td></tr>
           <tr><th>Address</th><td>".$row['p_address']."</td></tr>";
                ?>
        </table>
    </div>
  </div>

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
