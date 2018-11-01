<?php
 if(isset($_POST['register-submit'])){
   $con=new mysqli("localhost","root","","hamrodookan");
    if(!$con){
    	die("error");
    }
 	$us=$_POST['username'];
 	$email=$_POST['email'];
 	$pass=$_POST['password'];
 	        $sql="INSERT INTO `register`(`username`,`password`,`email`) VALUES ('$us','$pass','$email')";
        if(mysqli_query($con,$sql)){
        	echo "Save Suceessfully";
        }
        else{
        	echo"Error on SAve";
        }
 }
?>