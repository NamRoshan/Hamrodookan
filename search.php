<!DOCTYPE html>
<html>
<head>
  <title></title>
      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
   <!--  custom css -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    
     <!--  jquery -->
     <script src="assets/js/jquery.min.js"></script>
     <script src="typeahead.min.js"></script>
</head>
<body>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "hamrodookan");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "(SELECT * FROM alldata WHERE product_name LIKE '%".$_POST["query"]."%') UNION (SELECT * FROM oppo_mobile WHERE product_name LIKE '%".$_POST["query"]."%') UNION (SELECT * FROM apple_computer WHERE product_name LIKE '%".$_POST["query"]."%') UNION (SELECT * FROM hp_computer WHERE product_name LIKE '%".$_POST["query"]."%')";  
      $result = mysqli_query($connect, $query);  
      $output = '';  
      if(mysqli_num_rows($result) > 0)  
      {  

           while($row = mysqli_fetch_array($result))  
           {  
          $output .= '<div class="row-fluid">
                        <div class="item">
                         <ul class="thumbnails">
                          <li class="sapn3"  style="width: 253px;padding-left:13px;">
                           <div class="thumbnail">
                             <i class="tag"></i>
                               <div class="img-design hover-design" >
                                <a href="alldata.php?id='. $row["product_id"].'">
                                  <img src='.$row['image'].' alt="Buy More" class="img-responsive" >
                                </a>
                                 
                                </div>
                              
                               <div class="caption design">
                
                                <h5>'.$row['product_name'].'</h5>
                                <h4><a href="alldata.php?id='.$row['product_id'].' "  class="btn mobiles-data-show">VIEW</a><span class="pull-right">$'.$row['price'].'</span></h4>
                              </div>
                          
                         </div>
                       </li>
                     </ul>
                    </div>
                  </div>';  
           }  
      }  
      else  
      {  
           $output .= '<div class="text-center" style="font-size:25px; color:red; margin-bottom:200px;">Product name not found !!!!</div>';  
      }  
      $output .= '
                  ';  
      echo $output;  
 }  
 ?>  
</body>
</html>
 