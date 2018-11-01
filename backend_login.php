<!DOCTYPE html>
<html>
<head>
	<title>HAMRO DOOKAN</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style sheet -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
   <!--  custom css -->
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
     <!--  jquery -->
     <script src="assets/js/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script >

     </script>
</head>
<body>
	   <div id="error"></div>
	    <?php  session_start();
     if(isset($_POST['login-submit'])){
     
      $con=new mysqli("localhost","root","","hamrodookan");
      if(!$con){
         die("Error Databse");
      }
      $username=$_POST['username'];
      $password=$_POST['password'];
      // $sql="SELECT *FROM backend_register WHERE `username`='$username'AND`password`='$password'";
      // $result=$con->query($sql);
      //    if($result->num_rows>0){
      //     while ($row=$result->fetch_assoc()){
      //        $_SESSION['usernames']=$username;
      //        echo "<script> location.href='backend.php'</script>";
        
      //   }
      // }
      //   else{
      //   echo" <script> $(error).html('Username And Password Not Valid<div>Try Again !!!!!</div>'); </script>";
      //   }
      	 $sql = "SELECT username, password FROM backend_register WHERE username = ? AND password = ?";

	if($stmt = mysqli_prepare($con, $sql)){
		mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            $param_username = $username;
            $param_password = $password;

		if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
            	$_SESSION['usernames']=$username;
               echo "<script> location.href='backend.php'</script>";
            }
            else{
            	echo" <script> $(error).html('Username And Password Not Valid<div>Try Again !!!!!</div>'); </script>";
            }
		}
	}
	else{
		echo "Error while preparing the statement";
	}
        mysqli_close($con);
     }
    ?>
	<?php
 //     session_start();
  if((isset($_SESSION['usernames']))){
       header('location:backend.php');
 }
 else{//if session is not store than goes to login page

  }
?>

  <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<h4>Backend Login system</h4>
								<a  class="active" id="login-form-link">Login</a>
							</div>

						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>