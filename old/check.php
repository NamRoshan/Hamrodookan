 <?php
 session_start();
      $con=new mysqli("localhost","root","","hamrodookan");
      if(!$con){
        echo'Error on Database';
      }
       $sql="select *from student where status='1'";
 if((isset($_SESSION['username']))){
      header('location:index.php');
 }
 else{//if session is not store than goes to login page
    header('location:login.php');
 }
 ?>