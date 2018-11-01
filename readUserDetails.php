<?php
 
// Connection variables 
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
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $user_id = $_POST['id'];
 
    // Get User Details
    $query = "SELECT * FROM alldata WHERE id = '$user_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
//###############################OPPO ##############################
if(isset($_POST['id_oppo']) && isset($_POST['id_oppo']) != "")
{
    // get User ID
    $user_id = $_POST['id_oppo'];
 
    // Get User Details
    $query = "SELECT * FROM oppo_mobile WHERE id = '$user_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
//###############################HP ##############################
if(isset($_POST['id_hp']) && isset($_POST['id_hp']) != "")
{
    // get User ID
    $user_id = $_POST['id_hp'];
 
    // Get User Details
    $query = "SELECT * FROM hp_computer WHERE id = '$user_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
//###############################Apple ##############################
if(isset($_POST['id_apple']) && isset($_POST['id_apple']) != "")
{
    // get User ID
    $user_id = $_POST['id_apple'];
 
    // Get User Details
    $query = "SELECT * FROM apple_computer WHERE id = '$user_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
 
?>