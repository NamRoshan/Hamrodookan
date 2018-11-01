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
     <script src="assets/js/jquery.min.js"></script>
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
</head>
<body>
<?php
  include("header.php");
?>
<div class="container">
    <div class="row ">
     <div class="col-md-2 col-sm-4 col-xs-12  ">
       <div class="sidebar ">
        <ul class="nav ">
            <div class="bold">Top Categories</div>
            <li role="separator" class="divider"></li>
    <div id="accordion" role="tablist">
       <li ><a  class="underline">Mobile</a></li>
  		<div class="card dropdown-header" >
    	<div class="card-header" role="tab" id="headingOne">
      	<h5 class="mb-0">
       		 <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
          		<span class="mains-icon">Samsung</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        	</a>
        </h5>
      </div>
      <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body ">
           <li><a href="">Samsung j1</a></li>
           <li><a href="">Samsung J2</a></li>
           <li><a href="">Samsung Beta</a></li>
           <li><a href="">Samsung keynode</a></li>
      </div>
    </div>
  </div>
  <!-- Next heading -->
  <div class="card dropdown-header">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="mains-icon">Acer</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
           <li><a href="">Acer doma 4.5</a></li>
           <li><a href="">Acer jampo</a></li>
           <li><a href="">Acer je5ff</a></li>
           <li><a href="">Acer jeZ</a></li>
      </div>
    </div>
  </div>
</div>
            <!-- for computer -->

<div id="accordion" role="tablist">
       <li ><a  class="underline">Computer</a></li>
  		<div class="card dropdown-header" >
    	<div class="card-header" role="tab" id="headingThree">
      	<h5 class="mb-0">
       		 <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
          		<span class="mains-icon">Apple</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        	</a>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body ">
           <li><a href="">Apple series</a></li>
           <li><a href="">Apple sova</a></li>
           <li><a href="">Apple nova 5r</a></li>
           <li><a href="">Apple s5c</a></li>
      </div>
    </div>
  </div>
  <!-- Next heading -->
  <div class="card dropdown-header">
    <div class="card-header" role="tab" id="headingFour">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <span class="mains-icon">Acer</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
           <li><a href="">Acer doma 4.5</a></li>
           <li><a href="">Acer jampo</a></li>
           <li><a href="">Acer je5ff</a></li>
           <li><a href="">Acer jeZ</a></li>
      </div>
    </div>
  </div>
</div>
           <!--  Here is for Camera -->
   <div id="accordion" role="tablist">
       <li ><a  class="underline">Camera</a></li>
  		<div class="card dropdown-header" >
    	<div class="card-header" role="tab" id="headingFive">
      	<h5 class="mb-0">
       		 <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" >
          		<span class="mains-icon">Sony</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        	</a>
        </h5>
      </div>
      <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body ">
           <li><a href="">Sony maham 5c</a></li>
           <li><a href="">Sony com r</a></li>
           <li><a href="">Sony da</a></li>
           <li><a href="">Sony dae</a></li>
      </div>
    </div>
  </div>
  <!-- Next heading -->
  <div class="card dropdown-header">
    <div class="card-header" role="tab" id="headingSix">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <span class="mains-icon">Panasonic</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
           <li><a href="">Panasonic maham</a></li>
           <li><a href="">Panasonic com r</a></li>
           <li><a href="">Panasonic da</a></li>
           <li><a href="">Panasonic dae</a></li>
      </div>
    </div>
  </div>
</div>
       <!-- End -->
  </ul>
 </div>
</div>
<div class="col-md-10 col-sm-8 col-xs-12">
<div class="span9"> 
    <div class="well well-small">
        <h4>Feature Products<small class="pull-right">200 +Featured Products</small></h4>
      <div class="row-fluid">
        <div id="imageCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active ">
              <ul class="thumbnails">
                <li class="sapn3">
                   <div class="thumbnail">
                     <i class="tag"></i>
                       <a href="#"><img src="assets/img/s2.jpg" alt="Buy More"></a>
                        <div class="caption">
                          <h5>Beats(1)</h5>
                          <h4><a href="" class="btn">VIEW</a><span class="pull-right">$20.75</span></h4>
                        </div>
                   </div>
                </li> 
                                <li class="sapn3">
                   <div class="thumbnail">
                     <i class="tag"></i>
                       <a href="#"><img src="assets/img/s2.jpg" alt="Buy More"></a>
                        <div class="caption">
                          <h5>Beats(1)</h5>
                          <h4><a href="" class="btn">VIEW</a><span class="pull-right">$20.75</span></h4>
                        </div>
                   </div>
                </li> 
                                <li class="sapn3">
                   <div class="thumbnail">
                     <i class="tag"></i>
                       <a href="#"><img src="assets/img/s2.jpg" alt="Buy More"></a>
                        <div class="caption">
                          <h5>Beats(1)</h5>
                          <h4><a href="" class="btn">VIEW</a><span class="pull-right">$20.75</span></h4>
                        </div>
                   </div>
                </li> 
 
              </ul>
            </div>
             
             <!-- Next iteam -->
                         <div class="item  ">
              <ul class="thumbnails">
                <li class="sapn3">
                   <div class="thumbnail">
                     <i class="tag"></i>
                       <a href="#"><img src="assets/img/s2.jpg" alt="Buy More"></a>
                        <div class="caption">
                          <h5>Beats(1)</h5>
                          <h4><a href="" class="btn">VIEW</a><span class="pull-right">$20.75</span></h4>
                        </div>
                   </div>
                </li> 
                                <li class="sapn3">
                   <div class="thumbnail">
                     <i class="tag"></i>
                       <a href="#"><img src="assets/img/s2.jpg" alt="Buy More"></a>
                        <div class="caption">
                          <h5>Beats(1)</h5>
                          <h4><a href="" class="btn">VIEW</a><span class="pull-right">$20.75</span></h4>
                        </div>
                   </div>
                </li> 
                                <li class="sapn3">
                   <div class="thumbnail">
                     <i class="tag"></i>
                       <a href="#"><img src="assets/img/s2.jpg" alt="Buy More"></a>
                        <div class="caption">
                          <h5>Beats(1)</h5>
                          <h4><a href="" class="btn">VIEW</a><span class="pull-right">$20.75</span></h4>
                        </div>
                   </div>
                </li> 

              </ul>
            </div>
          </div>
           <a href="#imageCarousel" class="carousel-control left" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                  <a href="#imageCarousel" class="carousel-control right" data-slide="next "><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
    </div>
  </div>
    
</div> 


<!-- <div class="col-md-6 col-sm-12  col-xs-12">
   <p>
    dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
        dkfkfddsfsdfsdfdsfddddddddddddddddddddddddddddddd dfkkkkkkkkkkkkkkkkkkkkkkkkkkkk
    dffffffffffffkkkkkkkkkkkkkkkkkkkkk dfffffffffffffffffffffffffffffffffffffffdf
    fddddddddddddddddddddddddddddddddddddd fffffffffffffffffffffffffffffffffffffffff
</p> 
</div> -->
    </div>
</div>

<!-- End nav bar -->
   
   <?php
     include('footer.php');
   ?>  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>