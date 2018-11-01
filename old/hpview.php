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
     <!--  jquery -->
     <script src="assets/js/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script >
    $(document).ready(function(){
    	$('.minus-icon').css('display', 'none');
      $('.mains-icon').click(function(){
            $('.plus-icon').toggleClass('visible');
      });
            $('.plus-icon').click(function(){
            $('.plus-icon').toggleClass('visible');
      });

    });
   </script>
   <!-- owl carousel query -->
   <script src="owl/owlcarousel/owl.carousel.js"></script>
</head>
<body>
    <?php  include("header.php");?>
    <div class="container">
      <div class="row">
         <?php  include('sidebar.php');?>
             <!-- End !!sidebar -->
        <div class="col-md-4 col-sm-4 col-xs-4">
             <div class="well well-small">
                <h4>HP Laptop<small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="img/hp1.jpg" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                <div class="col-md-6 col-sm-4 col-xs-8">
             <div class="well well-small">
                <h4>HP 15-bu003tu Laptop (6th Gen Intel Core i3- 4GB RAM- 1TB HDD- 39.62cm(15.6)- DOS) (Black)</h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li> Latest 7th Gen. Intel® Core™ i7 processor</li>
                      <li> Windows 10 Home / Windows 10 Pro</li>
                      <li> Latest GeForce® GTX 1070 8GB GDDR5 with desktop level performance</li>
                      <li> 17.3" Full HD (1920x1080), 120 Hz Refresh Rate and 5ms response time p</li>
                      <li>17.3" built-in 4K LCD with 3840 X 2160 resolution and 100% Adobe RGB</li>
                      <li>  Exclusive Cooler Boost 4 Technology</li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.50000
                   </div>
                    <div class="cart-buy">
                    <div class="carts">
                     <a href="" class="btn btn-default">Add to cart</a>
                   </div>
                   <div class="buy-item">
                     <a href="check.php" class="btn btn-default">BuyNow</a>
                   </div>
                    </div>
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div>     
      </div>
    </div>
    <!-- footer -->
       <?php
     include('footer.php');
   ?> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 </body>   