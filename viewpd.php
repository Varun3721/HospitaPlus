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

$view = "SELECT * FROM tb1_current ORDER BY p_app ASC";

    $ve= mysqli_query($connection,$view);

    $total = mysqli_num_rows($ve);

if($_GET['id']){
    $Tdi = $_GET['id'];
   
    //moving data to tb2---------------------------------------
    $select2="select * from tb1_current where tb1_current.p_id = $Tdi";
    $select2exe =mysqli_query($connection,$select2);
   // if($select2exe){echo "get";}
    //else{echo "not get";}
    $select2fetch = mysqli_fetch_assoc($select2exe);
    $tb2id = $select2fetch['p_id'];
     $tb2app = $select2fetch['p_app'];
     $tb2date = $select2fetch['p_date'];
     $tb2name = $select2fetch['p_name'];
     $tb2age = $select2fetch['p_age'];
     $tb2gender= $select2fetch['p_gender'];
     $tb2contact = $select2fetch['p_contact'];
     $tb2address = $select2fetch['p_address'];
     
    $insert2 = "INSERT INTO tb2_records (p_id, p_app, date, p_name, p_age, p_gender, p_address, p_contact) 
        VALUES ('$tb2id', '$tb2app', '$tb2date', '$tb2name', '$tb2age', '$tb2gender', '$tb2address', '$tb2contact')" ;
   $insert2exe = mysqli_query($connection,$insert2);
    if( $insert2exe){
         $delete = " delete from tb1_current where tb1_current.p_id = $Tdi";
$delete_exe =    mysqli_query($connection,$delete);
    }
    else{echo "not inserted";}
    //-----------------------------------------------------------------------
    
   
    if($delete_exe){
       // echo "<script>alert('data deleted')</script>";
       ?>
<meta http-equiv="refresh" content="1"> 

<?php
    
        # header('location: view.php?id');
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <style>
    table th,td{
        text-align: center;
    }
    </style>
    <script>
        function checkdelete(){
           return confirm("are you sure you want to delete!");
        }
        </script>
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
<script src="js/jquery-1.10.2.min.js">
    
        function checkdelete(){
           return confirm("are you sure you want to delete!");
        }
       
    </script>
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
						
                    <li><a href="profile.php"><i class="lnr lnr-user"></i><span>Profile</span></a></li>
                    
                    <li><a href="viewpd.php"><i class="lnr lnr-eye"></i> <span>View Appointment</span></a></li>
                    
                    <li><a href="Appointmentform.php"><i class="lnr lnr-users"></i> <span>Take Appointment</span></a></li>
					
                    <li><a href=""><i class="lnr lnr-select"></i> <span>Search</span></a></li>              	  	
				  
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
					<h3 class="blank1">Today's Appointment list</h3>
						<div class="tab-content">
 <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->  
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead style="position:sticky;">
                                       <tr>
                                        <td colspan="8" style="background-color:deepskyblue;color:white;text-align:center;"> 
                                            <?php echo $total; ?> records found </td>
                                        </tr> 
										<tr class="warning">
                                            <th>App no.</th>
											<th>Date</th>
											<th>Name</th>
                                            <th>Gender</th>
											<th>Age</th>
											<th>Mobile no.</th>
											<th>Address</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tbody>
                                        
									 <?php
    $di = 0;  
   
     while( $row =  mysqli_fetch_assoc($ve)){
      $di = $row['p_id'];
  echo "<tr>
<td>".$row['p_app']."</td>
<td>".$row['p_date']."</td>
<td>".$row['p_name']."</td>
<td>".$row['p_gender']."</td>
<td>".$row['p_age']."</td>
<td>".$row['p_contact']."</td>
<td>".$row['p_address']."</td>
<td><a href='viewpd.php?id=$di' onclick='return checkdelete()' >check</a></td>
 </tr>";
   }
    ?>
									</tbody> 
								</table>
							</div>
						</div>
 <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////  --> 
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