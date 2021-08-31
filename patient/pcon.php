<?php

$connection = mysqli_connect("localhost","root","","hospitaplus");
error_reporting(0);
if($connection){
    if(isset($_POST['app_submit'])){
        
         $name= mysqli_real_escape_string($connection, $_POST['name']);
         $age=  mysqli_real_escape_string($connection, $_POST['age']);
         $number=  mysqli_real_escape_string($connection, $_POST['number']);
         $address= mysqli_real_escape_string($connection, $_POST['address']);
         $gender=  mysqli_real_escape_string($connection, $_POST['gender']);
        
        $view = "SELECT * FROM tb1_current";

    $ve= mysqli_query($connection,$view);

    $total = mysqli_num_rows($ve);
        
        if($total == 0){$app = 1;}
        else{
            $get_maxapp ="SELECT * FROM tb1_current WHERE p_app=(SELECT max(p_app) FROM tb1_current)";
            $e= mysqli_query($connection,$get_maxapp);
            $get = mysqli_fetch_assoc($e);
            $app = $get['p_app'] + 1;
        }
     
  $insert = " INSERT INTO tb1_current (p_app,p_name, p_age, p_contact, p_address, p_gender) VALUES ('$app','$name','$age','$number','$address','$gender')";
    $exe_insert= mysqli_query($connection,$insert) or die("Error in Query".mysqli_error($connection));
      if($exe_insert){
          $_SESSION["app"]= $app;
          header("location:appslip.php");
      }
    
}
}
else{
    header("location:blank.php");
}
?>