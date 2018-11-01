<?php $con=new mysqli("localhost","root","","hamrodookan");
 if(!$con)
 {
 	echo "eroor";
 }
 $sql="select *from alldata ";
    $result=$con->query($sql);
      if($result->num_rows>0){
      	while ($row=$result->fetch_assoc()){
           ?>
<div id="<?php echo $row['product_id'];?>" class="mobiles-data">           
<div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['product_name']; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="<?php echo $row['image'];;?>" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                <div class="col-md-8 col-sm-8 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['modelnumber']; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $row['keyfeature1'];?></li>
                      <li> <?php echo $row['keyfeature2'];?></li>
                      <li> <?php echo $row['keyfeature3'];?></li>
                      <li> <?php echo $row['keyfeature4'];?></li>
                      <li><?php echo $row['keyfeature5'];?></li>
                      <li> <?php echo $row['keyfeature6'];?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo $row['price'];?>
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
   </div> 

          <?php
      	}
      }
?>
   
<!-- for oppo mobiles -->
<?php $con=new mysqli("localhost","root","","hamrodookan");
 if(!$con)
 {
 	echo "eroor";
 }
 $sql="select *from oppo_mobile ";
    $result=$con->query($sql);
      if($result->num_rows>0){
      	while ($row=$result->fetch_assoc()){
           ?>
<div id="<?php echo $row['product_id'];?>" class="mobiles-data">           
<div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['product_name']; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="<?php echo $row['image'];;?>" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                <div class="col-md-8 col-sm-8 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['modelnumber']; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $row['keyfeature1'];?></li>
                      <li> <?php echo $row['keyfeature2'];?></li>
                      <li> <?php echo $row['keyfeature3'];?></li>
                      <li> <?php echo $row['keyfeature4'];?></li>
                      <li><?php echo $row['keyfeature5'];?></li>
                      <li> <?php echo $row['keyfeature6'];?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo $row['price'];?>
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
   </div> 

          <?php
      	}
      }
?>
 

<!-- NOw for computer full view  -->
<?php $con=new mysqli("localhost","root","","hamrodookan");
 if(!$con)
 {
 	echo "eroor";
 }
 $sql="select *from hp_computer ";
    $result=$con->query($sql);
      if($result->num_rows>0){
      	while ($row=$result->fetch_assoc()){
           ?>
<div id="<?php echo $row['product_id'];?>" class="computer-data">           
<div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['product_name']; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="<?php echo $row['image'];;?>" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                <div class="col-md-8 col-sm-8 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['modelnumber']; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $row['keyfeature1'];?></li>
                      <li> <?php echo $row['keyfeature2'];?></li>
                      <li> <?php echo $row['keyfeature3'];?></li>
                      <li> <?php echo $row['keyfeature4'];?></li>
                      <li><?php echo $row['keyfeature5'];?></li>
                      <li> <?php echo $row['keyfeature6'];?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo $row['price'];?>
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
   </div> 

          <?php
      	}
      }
?>
 

<!--  this for all view of apple computer -->
 <?php $con=new mysqli("localhost","root","","hamrodookan");
 if(!$con)
 {
 	echo "eroor";
 }
 $sql="select *from apple_computer ";
    $result=$con->query($sql);
      if($result->num_rows>0){
      	while ($row=$result->fetch_assoc()){
           ?>
<div id="<?php echo $row['product_id'];?>" class="computer-data">           
<div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['product_name']; ?><small class="pull-right">Best Products</small></h4>
                  <div class="row-fluid">
                 <div >
                   <img src="<?php echo $row['image'];;?>" class="img-responsive">
                </div>
              </div>
              <div>
                
              </div>
           </div>
        </div> 
        <!-- end picture -->
                <div class="col-md-8 col-sm-8 col-xs-6">
             <div class="well well-small">
                <h4><?php echo $row['modelnumber']; ?></h4>
                <hr>
                  <div class="row-fluid">
                 <div class="shopping-main-view" >
                   <div class="title">Key features</div>
                    <ul>
                      <li><?php echo $row['keyfeature1'];?></li>
                      <li> <?php echo $row['keyfeature2'];?></li>
                      <li> <?php echo $row['keyfeature3'];?></li>
                      <li> <?php echo $row['keyfeature4'];?></li>
                      <li><?php echo $row['keyfeature5'];?></li>
                      <li> <?php echo $row['keyfeature6'];?></li>
                    </ul>
                    <hr>
                   <div class="price">
                     RS.<?php echo $row['price'];?>
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
   </div> 

          <?php
      	}
      }
?>