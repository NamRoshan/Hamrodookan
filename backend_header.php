
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantitys"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM alldata WHERE product_id='" . $_GET["product_id"] . "'");
      $itemArray = array($productByCode[0]["product_id"]=>array('name'=>$productByCode[0]["product_name"], 'quantity'=>$productByCode[0]["quantity"],'product_id'=>$productByCode[0]["product_id"], 'quantitys'=>$_POST["quantitys"],'images'=>$productByCode[0]["image"], 'price'=>$productByCode[0]["price"]));

      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["product_id"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["product_id"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantitys"])) {
                  $_SESSION["cart_item"][$k]["quantitys"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantitys"] += $_POST["quantitys"];

              }
          }
        }

    
         else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      } 
                  
      else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  break;
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
      
          if($_GET["product_id"] == $k)

            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  
}
}
?>
<div class="navbar-view">	
     <nav class="navbar navbar-default ">

        <div class="navbar-show">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hamro Dookan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="backend.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
 
        </div><!--/.nav-collapse -->


      </div>
  </div>
         <div class="navbarmain">
     <div class="container">
 <!-- **********************compuany name********************************-->
       <div class="row">
          <div class="col-xs-12">
                
              <ul class="nav  navbar-left text-center navmargin ">
                 <div class="container">
                   <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    <li class="text-main-design"><input type="text" name="" class="text-desing " placeholder="Search...."><span class="btn btn-defalut " style="border:1px solid #cbcaca; border-radius: 0px;background: white;"><i class="glyphicon glyphicon-search"></i></span></li>
                  </div>
                  <div class="col-md-4  col-sm-4 col-xs-12">
                    <div style="border-radius: 10px;">
                       <li class="icon-design" >
                         <i class=" glyphicon glyphicon-user " data-toggle="modal" data-target="#profile"></i>
                        <div>Profile</div></li>
                          <li class="icon-design"><i class="glyphicon glyphicon-shopping-cart cartdiv" data-toggle="modal" data-target="#cart-poup">
                                      <?php
                          if(isset($_SESSION["cart_item"])){
                         $item_total = 0;  
                         foreach ($_SESSION["cart_item"] as $item){
                         $item_total +=$item["quantitys"];
                          ?>
                        <span><?php echo $item_total  ?></span>
                         <?php
                        }
                        }
                       ?>
                      </i><div>Cart</div></li>
                    </div>

               </div>
               </div>
               </div>
               
               </ul>
          </div>
        </div>
      </div>
  </div>
    </nav>
</div>
<!-- poup for profile -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="panel " style="background: none;">
                    <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <div class="row">
                        <div class="col-xs-3">
                          <a href="#" class="active" id="login-form-link">LOG ME OUT</a>
                        </div>
                        <div class="col-xs-3">
                          <a href="#" id="register-form-link">SETTING</a>
                        </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="login-form" action="sessiondestroy.php" method="post" role="form" style="display: block;">
                            <?php
                                                       //     session_start();
                            if((isset($_SESSION['usernames']))){
                                ?>   <h1><i class=" glyphicon glyphicon-user " ></i><?php echo $_SESSION['usernames']; ?></h1>  <?php
                           }
                           else{//if session is not store than goes to login page

                            } 
                            ?>
                          
                                         <div class="modal-footer">
                                          <input type="submit" name="logout" value="Logout" class="btn btn-danger">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                         </div>
                          </form>
                          <form id="register-form" action="sessiondestroy.php" method="post" role="form" style="display: none;">
                             <h4>Update User name</h4>
                              <div class="modal-body">
              
                              <div class="form-group">
                                  <label for="Product Id">Usename</label>
                                  <input type="text" name="Username" placeholder="Username" class="text-design form-control">
                              </div>

                              <div class="form-group">
                                  <label for="Product Name">Password</label>
                                  <input type="password" name="Password" placeholder="Password" class="text-design form-control Password" minlength="6" >
                              </div>
                               <div class="form-group">
                                  <label for="Product Name">Confirm Password</label>
                                  <input type="password" name="Confirm-Password" placeholder="Confirm-Password" class="text-design form-control Confirm-Password"  minlength="6">
                              </div>
                            </div>
                              <div class="modal-footer">
                                 <input type="submit" name="update_usename" id="register-submit" value="Update" class="btn btn-active">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                             </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                
              
          
        </div>
    </div>
</div>

<!-- this is for cart popup -->

 <div class="modal fade" id="cart-poup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title upload-product-samsung" id="myModalLabel">Cart</h4>
            </div>
            <div class="modal-body">
                              <?php
                if(isset($_SESSION["cart_item"])){
                    $item_total = 0;
                ?>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-3 col-xs-3">
              <table class="table table-bordered table-striped">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Remove</th>
                 </tr>
                    <?php   
                    foreach ($_SESSION["cart_item"] as $item){
                    ?>
                      <tr>
                      <td ><strong><img src="<?php echo $item["images"]; ?>" style="width: 100px; height:100px; "></strong></td>
                    <td ><strong><?php echo $item["name"]; ?></strong></td>
                    <td ><?php echo $item["quantity"]; ?></td>
                    <td ><?php echo $item["quantitys"]; ?></td>
                    <td ><?php echo "$".$item["price"]; ?></td>
                    <td ><a href="index.php?action=remove&product_id=<?php echo $item["product_id"]; ?>" class="btnRemoveAction">Remove Item</a></td>
                    </tr>
                    <?php
                    $item_total += ($item["price"]*$item["quantitys"]);
                }
                ?>

                <tr>
                <td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
                </tr>
                </table> 
              </div>
            </div>
          </div>
               <?php
                }
                ?>       
               
            </div>
            <div class="modal-footer">
                <input type="submit" name="" value="Buy NOw" class="btn btn-default">
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

            </div>
           </form> 
        </div>
    </div>
</div>
<!-- add to cart php -->