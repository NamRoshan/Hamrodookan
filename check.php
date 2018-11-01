 <?php
 session_start();
      $con=new mysqli("localhost","root","","hamrodookan");
      if(!$con){
        echo'Error on Database';
      }
       $sql="select *from student where status='1'";
 if((isset($_SESSION['username']))){
      header('location:https://www.paypal.com/webapps/hermes?token=4TS01528SL941613D&useraction=commit&mfid=1515396052044_6a0b86b863d27');
 }
 else{//if session is not store than goes to login page
    header('location:login.php');
 }
 ?>