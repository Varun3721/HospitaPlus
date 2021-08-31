
<?php 
$errors=array();
error_reporting(0);
$connection = mysqli_connect("localhost","root","","hospitaplus");
 
if($connection){//start of connection


if(isset($_POST['ad_login'])){
    $ad_un = $_POST['ad_us'];
    $ad_pass = $_POST['ad_pass'];
    $fetch_ad_detail ="SELECT * FROM admin where ad_username='$ad_un' && ad_password='$ad_pass'";
    $exe = mysqli_query($connection,$fetch_ad_detail);
    $total = mysqli_num_rows($exe);
    if($total == 1){
            $_SESSION["ad_username"]= $ad_un;
            header("location:admin_home.php");
    }
    else{array_push($errors, "enter valid details");}
}//end of login--------------------------
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
        if($exe_insert){header("location:viewpd.php");}
        else{header("location:Appointmentform.php");}
    
}//end of 


}//end of connection
else{
    
   header("location:blank.html");
}
?>