  <?php
      session_start();
  if((isset($_SESSION['usernames']))){

 }
 else{//if session is not store than goes to login page
         header('location:backend_login.php');
  }
?>
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
     <script src="assets/js/script.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script >
    $(document).ready(function(){
      $('.computer-data').css('display', 'none');
      $('.mobiles-data').css('display', 'none');
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
                // when you want insert many insert button for which you want insert that button display
          $('.samsung-insert').click(function(){
             $('.upload-product-samsung').css('display','block');
            $('.upload-product-hp').css('display','none');
            $('.upload-product-oppo').css('display','none');
            $('.upload-product-apple').css('display','none');
        });
            $('.oppo-insert').click(function(){
            $('.upload-product-oppo').css('display','block');  
            $('.upload-product-hp').css('display','none');
            $('.upload-product-samsung').css('display','none');
            $('.upload-product-apple').css('display','none');
        });
            $('.hp-insert').click(function(){
            $('.upload-product-hp').css('display','block');
            $('.upload-product-oppo').css('display','none');
            $('.upload-product-samsung').css('display','none');
            $('.upload-product-apple').css('display','none');
        });
           $('.apple-insert').click(function(){
            $('.upload-product-apple').css('display','block');
            $('.upload-product-oppo').css('display','none');
            $('.upload-product-samsung').css('display','none');
            $('.upload-product-hp').css('display','none');
        });
             $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
          });
          $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
          });
           // validation on form update backend login form
             $("#register-submit").click(function(){

                var a=$('.Password').val();
              var b=$('.Confirm-Password').val();
              
              if (a==b)
              {
             return true;
              }
              else 
              {
              alert('Password not match Please try Again !!!!');
               return false;
              }
               });
    });
   </script>
   <!-- owl carousel query -->
   <script src="owl/owlcarousel/owl.carousel.js"></script>
</head>
<body>

<?php
  include("backend_header.php");
?>
<div class="hide-body">
<div class="container">
    <div class="row ">
   <!-- sidebar -->
<?php include ('include_sidebarbackend.php');?>
<div class="col-md-4 col-sm-8 col-xs-12">
<div class="span9"> 
    <div class="well well-small">
        <h4>Feature Products<small class="pull-right">10 +Featured Products</small></h4>
      <div class="row-fluid">
            <!-- owl carousel -->
 <!--  Demos -->
    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
  <?php $con=new mysqli("localhost","root","","hamrodookan");
 if(!$con)
 {
  echo "eroor";
 }
 $sql="select *from feature_product ";
    $result=$con->query($sql);
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
           ?>
            <div class="item">
                   <ul class="thumbnails">
                   <li class="sapn3">
                   <div class="thumbnail">
                     <i class="tag"></i>
                       <a href="#"><img src="<?php echo $row['image'];?>" alt="Buy More" class="img-responsive"></a>
                        <div class="caption">
                          <h5><?php echo $row['product_name'];?></h5>
                          <h4><a href="<?php echo "#".$row['product_id']; ?>" class="btn all-view">VIEW</a><span class="pull-right">Rs.<?php echo $row['price'];?></span></h4>
                        </div>
                   </div>
                </li>
                </ul>
            </div>
                      <?php
        }
      }
?>

          </div>
            <script>
            $(document).ready(function() {
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:2,
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
            })
          </script>
        </div>
      </div>
    </section>
      </div>
    </div>
  </div>
    
</div> 

    </div>
</div>

 <!-- for mobile -->
 <?php include('mobile.php'); ?>
<!-- End nav bar -->
  <!--  for computer -->
  <?php include("computer.php"); ?>
</div>
<!-- backend view -->
<?php include('alldatabackend.php') ?>

   <?php
     include('footer.php');
   ?> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>