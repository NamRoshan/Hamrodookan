<!-- Update Samsung Records -->
 <?php
// check request
if(isset($_POST))
{
      $con=new mysqli("localhost","root","","hamrodookan");
  if(!$con){
    die("error");
  }
     $name=$_FILES['file']['name'];

    $tmp_name=$_FILES['file']['tmp_name'];
    $location='images/';
     $target='images/'.$name;
     if(move_uploaded_file($tmp_name,$location.$name)){
          $p_id=$_POST['product_id'];
          $p_name=$_POST['product_name'];
          $model_number=$_POST['model_number'];
          $price=$_POST['price'];
          $quantity=$_POST['quantity'];
          $key1=$_POST['key1'];
          $key2=$_POST['key2'];
          $key3=$_POST['key3'];
          $key4=$_POST['key4'];
          $key5=$_POST['key5'];
          $key6=$_POST['key6'];

    $id=$_POST['id'];
    $sql="UPDATE `alldata` SET `product_id`=[$p_id],`product_name`=[$p_name],`image`=[".$target."],`modelnumber`=[$model_number],`price`=[$price],`keyfeature1`=[$key1],`keyfeature2`=[$key2],`keyfeature3`=[$key3],`keyfeature4`=[$key4],`keyfeature5`=[$key5],`keyfeature6`=[$key6],`quantity`=[$quantity] WHERE `id`='$id'";
  if($con->query($sql)==true){
     echo" Sucess";
  }
  else{
    echo 'Sorry No Delete Record';
  }
}
}
?>