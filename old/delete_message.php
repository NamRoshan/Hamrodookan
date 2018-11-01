<!-- Delete Samsung Records -->
 <?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
      $con=new mysqli("localhost","root","","hamrodookan");
  if(!$con){
    die("error");
  }
    $id=$_POST['id'];
  $sql="DELETE FROM `alldata`  WHERE `id`='$id' ";
  if($con->query($sql)==true){
     echo" Sucess";
  }
  else{
    echo 'Sorry No Delete Record';
  }
}
?>