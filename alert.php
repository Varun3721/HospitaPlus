<!-- Registation code -->
<?php
require("config.php");
$errors = array(); 

if (isset($_GET['sign-up'])) {
  // for fetch data from form

  $email  = mysqli_real_escape_string($conn, $_GET['email']);
  $name  = mysqli_real_escape_string($conn, $_GET['name']);
  $mno    = mysqli_real_escape_string($conn, $_GET['mno']);
  $details    = mysqli_real_escape_string($conn, $_GET['details']);
  $password  = mysqli_real_escape_string($conn, $_GET['password']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  $emailqueary = "SELECT * FROM registation WHERE email='$email'";

  $query = mysqli_query($conn, $emailqueary);

  $emailcount = mysqli_num_rows($query);

  if ($emailcount > 0) {

    $_SESSION['success'] = "Not Registered,Email already exitst";
    $_SESSION['icon'] = "error";
    $_SESSION['title'] = "Try Again";

    header('location:index.php');

  }
   else
    {
    $insertquery ="INSERT INTO `registation`(`email`, `name`, `mno`,`password`,`details`) VALUES('$email','$name','$mno','$password','0')";

    $iquery = mysqli_query($conn, $insertquery);

    if ($iquery) 
    {
      $_SESSION['success'] = "Good Job";
      $_SESSION['icon'] = "success";
      $_SESSION['title'] = "Successfully Registered. Now You can Login.";

      header('location:index.php');
    } 
    else {
      $_SESSION['success'] = "Not Registered";
      $_SESSION['icon'] = "error";
      $_SESSION['title'] = "Try Again";
      header('location:index.php');
    }
  }
}
?>
<!-- Registation code end -->
<!-- Login code  -->
<?php

if (isset($_GET['login'])) {

  $email = mysqli_real_escape_string($conn, $_GET['email']);
  $password = mysqli_real_escape_string($conn, $_GET['password']);


  $sql = "SELECT * FROM `registation` WHERE email = '$email'";

  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row

  if ($count) {

    $data = mysqli_fetch_assoc($result);
    $db_pass = $data['password'];

    if ($db_pass == $password) {

     
      if ($data['details'] == 1) {

        if ($data['verify'] == 1) {

          $_SESSION['verify'] = "hi";
          header('location:Main-Page/index.php');

        } 
        else {
          $_SESSION['unverified']= 'hi';
          header('location:unverified_user.php');
        }
      } 
      else {

        $_SESSION['id']= $data['id'];
        header("location:Main-Page/add_details.php");
      }
    } 
    else {

      $_SESSION['success'] = "Login Creaditionals are Wrong";
      $_SESSION['icon'] = "error";
      $_SESSION['title'] = "Try Again";
      header('location:index.php');
    }
  } 
  else {

    $_SESSION['success'] = "This Email id is not Found. Frist Register Yourself.";
    $_SESSION['icon'] = "error";
    $_SESSION['title'] = "Try Again";
    header('location:index.php');
  }
}



// <!-- Login code end -->
// Add details code Start
if (isset($_POST['details'])) {
  $fname  = mysqli_real_escape_string($conn, $_POST['fname']);
  $mname  = mysqli_real_escape_string($conn, $_POST['mname']);
  $gender    = mysqli_real_escape_string($conn, $_POST['gender']);
  $dob    = mysqli_real_escape_string($conn, $_POST['dob']);
  $rno  = mysqli_real_escape_string($conn, $_POST['rno']);
  $address  = mysqli_real_escape_string($conn, $_POST['address']);
  $p_address  = mysqli_real_escape_string($conn, $_POST['p_address']);
  $city  = mysqli_real_escape_string($conn, $_POST['city']);
  $state  = mysqli_real_escape_string($conn, $_POST['state']);
  $possition  = mysqli_real_escape_string($conn, $_POST['possition']);
  $job_profile  = mysqli_real_escape_string($conn, $_POST['job_profile']);
  $job_location  = mysqli_real_escape_string($conn, $_POST['job_location']);
  $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
  $skill  = mysqli_real_escape_string($conn, $_POST['skill']);
  $bio  = mysqli_real_escape_string($conn, $_POST['bio']);
  $id = $_SESSION['id'];
  $profile_name = $_FILES["profile"]["name"];
  $profile_tempname = $_FILES["profile"]["tmp_name"]; 
  $folder = "Main-Page/profile-images/".$profile_name;
  $extension = pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION);

  if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png')
{
  move_uploaded_file($profile_tempname, $folder);  
  $sql = "UPDATE `registation` SET `details`= '1',`fname` = '$fname', `mname` = '$mname', 
  `dob` = '$dob',`rno`='$rno',`gender`='$gender',`cpossition`='$possition',
  `address`='$address',`present_address`='$p_address',`city`='$city',`state`='$state',
  `job_profile`='$job_profile',`job_location`='$job_location',`company_name`='$company_name',
  `skill`='$skill',`bio`='$bio',`profile_picture`='$folder' WHERE `registation`.`id` = $id";

  $query = mysqli_query($conn, $sql);

  if ($query) 
  {
    $_SESSION['success'] = "Good Job!!! Now You can Login.";
    $_SESSION['icon'] = "success";
    $_SESSION['title'] = "Successfully Addeded Your Details.";
    header('location:Main-Page/index.php');
        
    }
  else {
    $_SESSION['success'] = "Some Problem to adding the Details";
    $_SESSION['icon'] = "error";
    $_SESSION['title'] = "Try Again";
   header('location:Main-Page/add_details.php');
   
  }
}
else{
  $_SESSION['success'] = "Profile picture Extension is Wrong.";
  $_SESSION['icon'] = "error";
  $_SESSION['title'] = "Try Again";
  header('location:Main-Page/add_details.php');
}
}
// Add details code End
?>
<!-- Feedback code Start -->
<?php
if (isset($_POST['feedback'])) {
  
  $first_name  = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name  = mysqli_real_escape_string($conn, $_POST['last_name']);
  $email    = mysqli_real_escape_string($conn, $_POST['email']);
  $subject    = mysqli_real_escape_string($conn, $_POST['subject']);
  $message  = mysqli_real_escape_string($conn, $_POST['message']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  $sql = "INSERT INTO `feedback` (`first_name`, `last_name`, `email`, `subject`, `msg`)
   VALUES('$first_name','$last_name','$email','$subject','$message')";

  $query = mysqli_query($conn, $sql);

  if ($query) 
    {
      $_SESSION['success'] = "Good Job";
      $_SESSION['icon'] = "success";
      $_SESSION['title'] = "Message sent Successfully to Admin.";
      header('location:index.php');

    } 

    else {
      $_SESSION['success'] = "Message not Sent";
      $_SESSION['icon'] = "error";
      $_SESSION['title'] = "Try Again";
      header('location:index.php');
    }
  }
?>
<!-- Feedback code end -->