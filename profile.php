<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
error_reporting(0);
include("hpserver.php");
//session code start
$ad_active =  $_SESSION["ad_username"];

if($ad_active == true){
   
}
else {
  //echo "<script>alert('please login first')</script>"; 
   header("location:index.php");
}//session code end
?>
<!DOCTYPE HTML>
<html>
<head>
<title>hospitaplus admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
			<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="admin_home.php">Hi <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="admin_home.php"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
				<ul class="nav nav-pills nav-stacked custom-nav">
					
                    <li class="active"><a href="admin_home.php"><i class="lnr lnr-menu"></i><span>Dashboard</span></a></li>
						
                    <li ><a href="#"><i class="lnr lnr-user"></i><span>Profile</span></a></li>
                    
                    <li ><a href="viewpd.php"><i class="lnr lnr-eye"></i> <span>View Appointment</span></a></li>
                    
                    <li><a href="Appointmentform.php"><i class="lnr lnr-users"></i> <span>Take Appointment</span></a></li>
					
                    <li><a href="seacrh.php"><i class="lnr lnr-select"></i> <span>Search</span></a></li>              	  	
				  
                    <li><a href="records.php"><i class="lnr lnr-book"></i> <span>Previous Records</span></a></li>
					
                    <li><a href="ad_logout.php"><i class="lnr lnr-power-switch"></i> <span>Log out</span></a></li>
						
					</ul>
				<!--sidebar nav end-->
		</div>
		</div> 
    <!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content ">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a> 
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li><h3>Hospitaplus</h3></li>
						
								
									   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/xyz.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Vikrant<span>Administrator</span></p><!-- admin name -->
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="ad_logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					          	
					<div class="clearfix"></div> 
				</div>
			  </div>  
			<!--notification menu end -->
			</div>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Hospital profile</h3>
						<div style="width:90%;height:auto;margin-left:5%;margin-bottom:3%;
                                    background-color:white;padding:1%;">
                    <div style="border-bottom:2px solid black;width:95%;text-align:center;">
                        <h1>Rohini Clinic</h1>
                            </div>
                    <div style="width:95%;text-align:center;margin-top:1%;height:auto;">
                            <img src="images/profile.jpg" width="50%" height="50%;" > 
                        <p >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id rutrum enim. Etiam ornare nisl quis nulla finibus laoreet. Vivamus ac imperdiet mauris. Praesent interdum volutpat orci, maximus mattis nulla vulputate non. Donec euismod nisi a lacus interdum congue. Quisque non arcu non quam efficitur dignissim nec ac ipsum. Duis tincidunt nunc mauris, et vehicula erat viverra ut. Aenean vel sem quam. Suspendisse augue purus, egestas quis diam nec, posuere egestas diam.

                        </p>
                        <hr>
                        <h3>Clinic Timing</h3>
                        
                        <h5>Morning: 10:00 am to 3:00 pm</h5>
                        <h5>Evening: 5:00 pm to 7:00 pm</h5>
                         <hr>
                        <h3>Clinic Address</h3>
                       
                        <h5>A1/a2, Giriraj Industrial Estate, Mahakali Caves Road, Andheri (west)<br>
                        Mumbai, Maharashtra </h5>
                        <h5>Contact details :
                         02226871136,02226871136</h5>
                            </div> 
                            
                            <hr>
                            
                    <div style="width:95%;margin-top:1%;padding:2%;height:auto;text-align:center;">
                         <h2>Doctor's profile</h2>
                        <hr>
                        <h3>Dr. Avdhesh Singh</h3>
                        <h5>MBBS</h5>
                        <h5>Speciality:Psychologist,Neurologist</h5>
                        <h5>Experience :10+ yrs</h5>
                        
                    </div>
					
						
				</div>
			</div>
		</div> 
		<!--footer section start-->
			<footer>
			   <p>&copy 2021 Hospitaplus Admin Panel. All Rights Reserved | Design by <a href="#" target="_blank">Vikrant Sonkar.</a></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>