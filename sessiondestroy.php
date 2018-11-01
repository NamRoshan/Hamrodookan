<?php
function dismis(){
	 session_start();
 if(session_destroy()){
 	header("location:backend_login.php");
 }
}
if(isset($_POST['logout']))
{
 dismis();
}
// main page logout
function dismis_main(){
  session_start();
 if(session_destroy()){
  header("location:login.php");
 }
}
if(isset($_POST['logout-main']))
{
 dismis_main();
}
?>
<!-- update user name -->
  <?php
   if(isset($_POST['update_usename'])){
    $con=new mysqli("localhost","root","","hamrodookan");
    if(!$con){
      die("error");
    }
     $Username=$_POST['Username'];
     $Password=$_POST['Password'];
  
     $sql="UPDATE `backend_register` SET `username`='$Username',`password`='$Password' ";
      if($con->query($sql)==true)
 {
   echo "<script>alert('Update Login Form Sucessfully');</script>";
    header("location:destroy.php");
 }
 else
 {
   echo "<script>alert('Faile Login Form Update' );</script>";
 }
   }
     ?>