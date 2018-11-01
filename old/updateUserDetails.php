<?php
// include Database connection file
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "hamrodookan"; // MySQL Database name
 
// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);
 
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
 
// check request
if(isset($_POST))
{
    // get values
    
    $id = $_POST['id'];
  $product_id=$_POST['product_id'];
  $product_name=$_POST['product_name'];
  $model_number=$_POST['model_number'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];
  $key1=$_POST['key1'];
  $key2=$_POST['key2'];
  $key3=$_POST['key3'];
  $key4=$_POST['key4'];
  $key5=$_POST['key5'];
  $key6=$_POST['key6'];
  
 
    // Updaste User details
    $query = "UPDATE alldata SET product_id = '$product_id', product_name = '$product_name', modelnumber = '$model_number', price = '$price', quantity = '$quantity', keyfeature1 = '$key1', keyfeature2 = '$key2', keyfeature3 = '$key3', keyfeature4 = '$key4', keyfeature5 = '$key5', keyfeature6 = '$key6' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>