<!-- Delete Samsung Records -->
 <?php
// check request
if(isset($_POST['ids']) && isset($_POST['ids']) != "")
{
      $con=new mysqli("localhost","root","","hamrodookan");
  if(!$con){
    die("error");
  }
    $id=$_POST['ids'];
  $sql="DELETE FROM `alldata`  WHERE `id`='$id' ";
  if($con->query($sql)==true){
     echo"<script> alert('ECORD DELETE SUCESS'); </script>";
  }
  else{
    echo 'Sorry No Delete Record';
  }
}
//###############################################Oppo Delete ######################################
if(isset($_POST['id_oppo']) && isset($_POST['id_oppo']) != "")
{
      $con=new mysqli("localhost","root","","hamrodookan");
  if(!$con){
    die("error");
  }
    $id=$_POST['id_oppo'];
  $sql="DELETE FROM `oppo_mobile`  WHERE `id`='$id' ";
  if($con->query($sql)==true){
     echo" <script> alert('RECORD Delete SUCESS'); </script>";
  }
  else{
    echo 'Sorry No Delete Record';
  }
}
//############################################### HP Delete ######################################
if(isset($_POST['id_hp']) && isset($_POST['id_hp']) != "")
{
      $con=new mysqli("localhost","root","","hamrodookan");
  if(!$con){
    die("error");
  }
    $id=$_POST['id_hp'];
  $sql="DELETE FROM `hp_computer`  WHERE `id`='$id' ";
  if($con->query($sql)==true){
     echo" <script> alert('RECORD Delete SUCESS'); </script>";
  }
  else{
    echo 'Sorry No Delete Record';
  }
}
//############################################### Apple Delete ######################################
if(isset($_POST['id_apple']) && isset($_POST['id_apple']) != "")
{
      $con=new mysqli("localhost","root","","hamrodookan");
  if(!$con){
    die("error");
  }
    $id=$_POST['id_apple'];
  $sql="DELETE FROM `apple_computer`  WHERE `id`='$id' ";
  if($con->query($sql)==true){
     echo" <script> alert('RECORD Delete SUCESS'); </script>";
  }
  else{
    echo 'Sorry No Delete Record';
  }
}
?>