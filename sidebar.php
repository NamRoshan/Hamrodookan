     <div class="col-md-2 col-sm-4 col-xs-12  ">
       <div class="sidebar ">
        <ul class="nav ">
            <div class="bold">Top Categories</div>
            <li role="separator" class="divider"></li>
    <div id="accordion" role="tablist">
       <li ><a href="#mobile"  class="underline">Mobile</a></li>
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
           <li><a href="alldata.php?id=<?php echo $row['product_id']; ?> " class="mobiles-data-show"><?php echo $row['product_name']; ?></a></li>
           <?php
               }
            }
          ?>
      </div>
    </div>
  </div>
  <!-- Next heading -->
  <div class="card dropdown-header">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="mains-icon">Oppo</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
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
           <li><a href="alldata.php?id=<?php echo $row['product_id']; ?> "  class="mobiles-data-show"><?php echo $row['product_name']; ?></a></li>
           <?php
               }
            }
          ?>
      </div>
    </div>
  </div>
</div>
            <!-- for computer -->

<div id="accordion" role="tablist">
       <li ><a href="#computer" class="underline">Computer</a></li>
  		<div class="card dropdown-header" >
    	<div class="card-header" role="tab" id="headingThree">
      	<h5 class="mb-0">
       		 <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
          		<span class="mains-icon">HP</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        	</a>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body ">
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
           <li><a href="alldata.php?id=<?php echo $row['product_id']; ?> "  class="computer-data-show"><?php echo $row['product_name']; ?></a></li>
           <?php
               }
            }
          ?>
      </div>
    </div>
  </div>
  <!-- Next heading -->
  <div class="card dropdown-header">
    <div class="card-header" role="tab" id="headingFour">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <span class="mains-icon">Apple</span> &nbsp &nbsp<span class="plus-icon"><i class="glyphicon glyphicon-plus"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
         <?php $con=new mysqli("localhost","root","","hamrodookan");
             if(!$con)
             {
              echo "eroor";
             }
             $sql="select *from Apple_computer ";
                $result=$con->query($sql);
                  if($result->num_rows>0){
                    while ($row=$result->fetch_assoc()){
                       ?>
           <li><a href="alldata.php?id=<?php echo $row['product_id']; ?> "  class="computer-data-show"><?php echo $row['product_name']; ?></a></li>
           <?php
               }
            }
          ?>
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