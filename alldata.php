<?php session_start(); ?>
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
    <!-- owl carousel -->
    <link rel="stylesheet" href="owl/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owlcarousel/assets/owl.theme.default.min.css">
     <!--  jquery -->
     <script src="assets/js/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
       <script >
    $(document).ready(function(){

     //this is for hiding view plus minus icon
        $('.collapse').on('shown.bs.collapse',function(){
          $(this).parent().find('.glyphicon-plus').removeClass('glyphicon-plus').addClass('glyphicon-minus');
        }).on('hidden.bs.collapse',function(){
          $(this).parent().find('.glyphicon-minus').removeClass('glyphicon-minus').addClass('glyphicon-plus');
        });  
            // for hidding the data from all mobile computer 
        $('.mobiles-data-show').click(function(){
             $('.mobiles-data').css('display', 'block');
             $('.hide-body').css('display','none');
          });
        $('.computer-data-show').click(function(){
             $('.computer-data').css('display', 'block');
             $('.hide-body').css('display','none');
        });
                $('.all-view').click(function(){
             $('.computer-data').css('display', 'block');
             $('.hide-body').css('display','none');
             $('.mobiles-data').css('display', 'block');
        });
          $('.cart-click').click(function(){
              var value = $('.cart-max-size').val();
              if(value >5)
              {
                alert("Max Sige is 5");
                return false;
              }
            
            
        });

    });
   </script>
   <!-- owl carousel query -->
   <script src="owl/owlcarousel/owl.carousel.js"></script>
   <?php
  include("header.php");
?>
  <?php
  $id= $_GET['id'];
  require_once("dbcontroller.php");
$db_handle = new DBController();

  $product_array = $db_handle->runQuery("SELECT * FROM alldata WHERE product_id='$id'");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
<div id="<?php echo $product_array[$key]["product_id"]; ?>" class="mobiles-data">           
<div class="container">
      <div class="row">
      <form method="post" action="index.php?action=add&product_id=<?php echo $product_array[$key]["product_id"]; ?>">
        <div class="col-md-4 col-sm-4 col-xs-12">
             <div class="well well-small">
                <h4 name="product_name"><?php echo $product_array[$key]["product_name"]; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div data-thumb="<?php echo $product_array[$key]["image"]; ?>" >
                   <img src="<?php echo $product_array[$key]["image"]; ?>" class="img-responsive" data-imagezoom="true">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                <div class="col-md-8 col-sm-8 col-xs-12">
             <div class="well well-small">
                <h4><?php echo $product_array[$key]["modelnumber"]; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $product_array[$key]["keyfeature1"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature2"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature3"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature4"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature5"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature6"]; ?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo "$".$product_array[$key]["price"]; ?>
                   </div>
                   <div class="stock">
                    <span class="text-bold">Stock:</span>
                    <?php 
                    //echo $product_array[$key]["quantity"];
                    $stock = $product_array[$key]["quantity"];
                
                  
                    ?>
                
                    <span ><?php echo "$stock"; ?></span>
                    
                   
                    </div>
                    <div >
                   <input type="text" id="add_quantitys" name="quantitys" value="1" size="2" class="text-cart form-control cart-max-size"/>
                   </div>
                    <div class="cart-buy">
                    <div class="carts">
                   <?php   
                     if(isset($_SESSION["cart_item"])){
                        foreach ($_SESSION["cart_item"] as $item){
                       ?><input type="hidden" name="" value="<?php echo $item["quantitys"]; ?>">
                    <?php 
                     if($item["quantitys"]>=$stock)
                     {
                      echo "<script>alert('Out of Stock'); </script>";
                      return false ;
                     }
                     else{

                     }
                  } }?>
                      <?php 
                        if ($stock > 0) {
                        echo '<input type="submit" class="btn btn-default btnAddAction cart-click " id="cart-clicks" value="Add to cart" hidden="" >';
                        ?>
                   </div>
                   <div class="buy-item">
                     <a href="check.php" class="btn btn-default">BuyNow</a>
                   </div>
                   <?php 
                 }
                   else{
                    echo "<script>alert('Out of Stock');</script>";
                   
                   }
                      ?>
                    </div>
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
     </form>

      </div>
    </div>
   </div> 

  <?php
      }
  }
  ?>
   
<!-- for oppo mobiles -->
  <?php
  require_once("dbcontroller.php");
$db_handle = new DBController();
  $product_array = $db_handle->runQuery("SELECT * FROM oppo_mobile WHERE product_id='$id'");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
<div id="<?php echo $product_array[$key]["product_id"]; ?>" class="mobiles-data">           
<div class="container">
      <div class="row">
      <form method="post" action="index.php">
        <div class="col-md-4 col-sm-4 col-xs-12">
             <div class="well well-small">
                <h4 name="product_name"><?php echo $product_array[$key]["product_name"]; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="<?php echo $product_array[$key]["image"]; ?>" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                <div class="col-md-8 col-sm-8 col-xs-12">
             <div class="well well-small">
                <h4><?php echo $product_array[$key]["modelnumber"]; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $product_array[$key]["keyfeature1"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature2"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature3"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature4"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature5"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature6"]; ?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo "$".$product_array[$key]["price"]; ?>
                   </div>
                   <div class="stock">
                    <span class="text-bold">Stock:</span>
                    <?php echo $product_array[$key]["quantity"];?>
                      <?php 
                    //echo $product_array[$key]["quantity"];
                    $stock = $product_array[$key]["quantity"];
                
                  
                    ?>
                    </div>
                    <div >
                   <input type="text" name="quantitys" value="1" size="2" class="text-cart form-control cart-max-size"/>
                   </div>
                    <div class="cart-buy">
                      <div class="carts">
                   <?php   
                     if(isset($_SESSION["cart_item"])){
                        foreach ($_SESSION["cart_item"] as $item){
                       ?><input type="hidden" name="" value="<?php echo $item["quantitys"]; ?>">
                    <?php 
                     if($item["quantitys"]>=$stock)
                     {
                      echo "<script>alert('Out of Stock'); </script>";
                      return false ;
                     }
                     else{

                     }
                  } }?>
                  <input type="hidden" name="id" value="<?php echo $product_array[$key]["product_id"]; ?>"">
                      <?php 
                        if ($stock > 0) {
                        echo '<input type="submit" class="btn btn-default btnAddAction" value="Add to cart" name="oppo_mobile">';
                        ?>
                   </div>
                   <div class="buy-item">
                     <a href="check.php" class="btn btn-default">BuyNow</a>
                   </div>
                   <?php 
                 }
                   else{
                    echo "<script>alert('Out of Stock');</script>";
                   
                   }
                      ?>
           
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
     </form>

      </div>
    </div>
   </div> 

  <?php
      }
  }
  ?>
 

<!-- NOw for computer full view  -->
  <?php
  require_once("dbcontroller.php");
$db_handle = new DBController();
  $product_array = $db_handle->runQuery("SELECT * FROM hp_computer WHERE product_id='$id'");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
<div id="<?php echo $product_array[$key]["product_id"]; ?>" class="mobiles-data">           
<div class="container">
      <div class="row">
      <form method="post" action="index.php">
        <div class="col-md-4 col-sm-4 col-xs-12">
             <div class="well well-small">
                <h4 name="product_name"><?php echo $product_array[$key]["product_name"]; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="<?php echo $product_array[$key]["image"]; ?>" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                              <div class="col-md-8 col-sm-8 col-xs-12">
             <div class="well well-small">
                <h4><?php echo $product_array[$key]["modelnumber"]; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $product_array[$key]["keyfeature1"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature2"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature3"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature4"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature5"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature6"]; ?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo "$".$product_array[$key]["price"]; ?>
                   </div>
                   <div class="stock">
                    <span class="text-bold">Stock:</span>
                    <?php echo $product_array[$key]["quantity"];?>
                      <?php 
                    //echo $product_array[$key]["quantity"];
                    $stock = $product_array[$key]["quantity"];
                
                  
                    ?>
                    </div>
                    <div >
                   <input type="text" name="quantitys" value="1" size="2" class="text-cart form-control cart-max-size"/>
                   </div>
                    <div class="cart-buy">
                      <div class="carts">
                   <?php   
                     if(isset($_SESSION["cart_item"])){
                        foreach ($_SESSION["cart_item"] as $item){
                       ?><input type="hidden" name="" value="<?php echo $item["quantitys"]; ?>">
                    <?php 
                     if($item["quantitys"]>=$stock)
                     {
                      echo "<script>alert('Out of Stock'); </script>";
                      return false ;
                     }
                     else{

                     }
                  } }?>
                  <input type="hidden" name="id" value="<?php echo $product_array[$key]["product_id"]; ?>"">
                      <?php 
                        if ($stock > 0) {
                        echo '<input type="submit" class="btn btn-default btnAddAction" value="Add to cart" name="hp_computer">';
                        ?>
                   </div>
                   <div class="buy-item">
                     <a href="check.php" class="btn btn-default">BuyNow</a>
                   </div>
                   <?php 
                 }
                   else{
                    echo "<script>alert('Out of Stock');</script>";
                   
                   }
                      ?>
           
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
     </form>

      </div>
    </div>
   </div> 

  <?php
      }
  }
  ?>
 

<!--  this for all view of apple computer -->
  <?php
  require_once("dbcontroller.php");
$db_handle = new DBController();
  $product_array = $db_handle->runQuery("SELECT * FROM apple_computer WHERE product_id='$id'");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
<div id="<?php echo $product_array[$key]["product_id"]; ?>" class="mobiles-data">           
<div class="container">
      <div class="row">
      <form method="post" action="index.php">
        <div class="col-md-4 col-sm-4 col-xs-12">
             <div class="well well-small">
                <h4 name="product_name"><?php echo $product_array[$key]["product_name"]; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="<?php echo $product_array[$key]["image"]; ?>" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                              <div class="col-md-8 col-sm-8 col-xs-12">
             <div class="well well-small">
                <h4><?php echo $product_array[$key]["modelnumber"]; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $product_array[$key]["keyfeature1"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature2"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature3"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature4"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature5"]; ?></li>
                      <li><?php echo $product_array[$key]["keyfeature6"]; ?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo "$".$product_array[$key]["price"]; ?>
                   </div>
                   <div class="stock">
                    <span class="text-bold">Stock:</span>
                    <?php echo $product_array[$key]["quantity"];?>
                      <?php 
                    //echo $product_array[$key]["quantity"];
                    $stock = $product_array[$key]["quantity"];
                
                  
                    ?>
                    </div>
                    <div >
                   <input type="text" name="quantitys" value="1" size="2" class="text-cart form-control cart-max-size"/>
                   </div>
                    <div class="cart-buy">
                      <div class="carts">
                   <?php   
                     if(isset($_SESSION["cart_item"])){
                        foreach ($_SESSION["cart_item"] as $item){
                       ?><input type="hidden" name="" value="<?php echo $item["quantitys"]; ?>">
                    <?php 
                     if($item["quantitys"]>=$stock)
                     {
                      echo "<script>alert('Out of Stock'); </script>";
                      return false ;
                     }
                     else{

                     }
                  } }?>
                  <input type="hidden" name="id" value="<?php echo $product_array[$key]["product_id"]; ?>"">
                      <?php 
                        if ($stock > 0) {
                        echo '<input type="submit" class="btn btn-default btnAddAction" value="Add to cart" name="apple_computer">';
                        ?>
                   </div>
                   <div class="buy-item">
                     <a href="check.php" class="btn btn-default">BuyNow</a>
                   </div>
                   <?php 
                 }
                   else{
                    echo "<script>alert('Out of Stock');</script>";
                   
                   }
                      ?>
           
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
     </form>

      </div>
    </div>
   </div> 

  <?php
      }
  }
  ?>
   <?php
     include('footer.php');
   ?> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/imagezoom.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</body>
</html>