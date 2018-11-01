    <?php
     if(isset($_POST['login-submit'])){
      session_start();
      $con=new mysqli("localhost","root","","hamrodookan");
      if(!$con){
         die("Error Databse");
      }
      $username=$_POST['username'];
      $password=$_POST['password'];
      $sql="SELECT *FROM register WHERE `username`='$username'AND`password`='$password'";
      $result=$con->query($sql);
         if($result->num_rows>0){
          while ($row=$result->fetch_assoc()){
             $_SESSION['username']=$username;
             echo "<script> location.href='index.php'</script>";
        
        }
      }
        else{
        echo" <script> $(error).html('Not match'); </script>";
        }
        mysqli_close($con);
     }
    ?>