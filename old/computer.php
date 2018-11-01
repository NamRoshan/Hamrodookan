<div id="computer">
  <div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div>
        <h1>Computer</h1>
        <hr>
      </div>
               <div class="well well-small">
            <h4>HP<small class="pull-right">20 +Featured Products</small></h4>
             <?php $con=new mysqli("localhost","root","","hamrodookan");
 if(!$con)
 {
  echo "eroor";
 }
 $sql="select *from hp_computer";
    $result=$con->query($sql);
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
           ?>
            <div class="row-fluid">
                <div class="item">
                    <ul class="thumbnails">
                      <li class="sapn3"  style="width: 253px;padding-left:13px;">
                         <div class="thumbnail">
                           <i class="tag"></i>
                             <a href="#"><img src="<?php echo $row['image'];?>" alt="Buy More"></a>
                              <div class="caption">
                                <h5><?php echo $row['product_name']; ?></h5>
                                <h4><a href="<?php echo "#".$row['product_id']; ?>" class="btn computer-data-show">VIEW</a><span class="pull-right">$<?php echo $row['price'];?></span></h4>
                              </div>
                         </div>
                      </li> 
                    </ul>
                   </div>
             
             <!-- Next iteam -->
            
                        </div>
    
          <?php
        }
      }
?>

    </div>
    </div>
  </div>
</div>


<!-- new barand -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div>
      
        <hr>
      </div>
               <div class="well well-small">
            <h4>Apple<small class="pull-right">20 +Featured Products</small></h4>
                <?php $con=new mysqli("localhost","root","","hamrodookan");
 if(!$con)
 {
  echo "eroor";
 }
 $sql="select *from apple_computer";
    $result=$con->query($sql);
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
           ?>
            <div class="row-fluid">
                <div class="item">
                    <ul class="thumbnails">
                      <li class="sapn3"  style="width: 253px;padding-left:13px;">
                         <div class="thumbnail">
                           <i class="tag"></i>
                             <a href="#"><img src="<?php echo $row['image'];?>" alt="Buy More"></a>
                              <div class="caption">
                                <h5><?php echo $row['product_name']; ?></h5>
                                <h4><a href="<?php echo "#".$row['product_id']; ?>" class="btn computer-data-show">VIEW</a><span class="pull-right">$<?php echo $row['price'];?></span></h4>
                              </div>
                         </div>
                      </li> 
                    </ul>
                   </div>
             
             <!-- Next iteam -->
            
                        </div>
    
          <?php
        }
      }
?>
    </div>
    </div>
  </div>
</div>
</div>