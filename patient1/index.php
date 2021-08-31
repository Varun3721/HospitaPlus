<?php
include("pcon.php");
$query = "SELECT * FROM tb1_current WHERE tb1_current.p_app=(SELECT min(p_app) FROM tb1_current);";
$exe = mysqli_query($connection,$query);
$result = mysqli_fetch_assoc($exe);
$total = mysqli_num_rows($exe);
if($total == 0){
    $app = 0;
}
else{
$app = $result['p_app'];}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="10" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospita+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Hospita+</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>


                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile">Profile</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>



        <div class="container text-center">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                   <img src="./img/logo.png" alt="hospita+" />

                </div>
                <div class="col-md-7 col-sm-12">
                    
                    <h2>Appointment No.</h2>
                    <h1><?php echo $app; ?></h1>
                    <a href="patientapp" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Get
                        Appointment</a>
                </div>
            </div>

            <div class="row1">
                <div class="col-md-12 col-sm-12">
                     <h3>Rohini's Clinic Timing</h3>
                    <p>At Morning-8.00am to 10.00am</p>
                    <p>At Evening-2.00pm to 4.00pm</p>



                </div>
            </div>
        </div>

    </header>


    <main>
        <section class="section1">
            <div class='container text-center'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img src="./img/sab.jpg" alt="hospita" />

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left">
                            <h1>HospitaPlus a better choice</h1>
                            <p class=pt-4>
                                We welcome you at whenever you got switched to a new way of
                                taking registration,well you are now free with your hospital
                                and waiting ambience and too a efficient doctor-patient builds
                                up that favours patient confidence to more in curing.
                            </p>
                            <p>
                                In today's world of extra carefullness and self healtg
                                care ,we need to bring a space where we can be feel free
                                for our ambience to be not neglected ,HospitaPlus is that
                                platform for giving user to get appointed and in near future
                                getting more and more add up features.

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
    <footer id="contactus">
        <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5 col-md-5">
                    <h1 class='text-light'>Contact Us</h1>
                    <p class="text-muted">
                        For more Suggestion,and any feedback,Please contact us
                    </p>
                    <p class="pt-4 text-muted">
                        © 2021 Hospita+, Inc. All Rights Reserved

                    </p>
                </div>
                <div class="col-md-5">
                    <h4 class="text-light">
                        Connect to us
                    </h4>

                    <form class="form-inline">
                        <div class="col pl-">
                            <div class="input-group pr-5">
                                <input type="text" class="form-control bg-dark text-white" placeholder="Email">
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