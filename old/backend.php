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
    	$('.minus-icon').css('display', 'none');
      $('.computer-data').css('display', 'none');
      $('.mobiles-data').css('display', 'none');
      $('.mains-icon').click(function(){
            $('.plus-icon').toggleClass('visible');
      });
            $('.plus-icon').click(function(){
            $('.plus-icon').toggleClass('visible');
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
    });
   </script>
   <!-- owl carousel query -->
   <script src="owl/owlcarousel/owl.carousel.js"></script>
</head>
<body>

<?php
  include("header.php");
?>
<div class="hide-body">
<div class="container">
    <div class="row ">
   <!-- sidebar -->
   <?php include('sidebarbackend.php');?>
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
 <!--  for all view -->
 <?php include ('alldata.php'); ?>
   <?php
     include('footer.php');
   ?> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>