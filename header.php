
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

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(isset($_POST["oppo_mobile"])) {

 
    if(!empty($_POST["quantitys"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM oppo_mobile WHERE product_id='" . $_POST["id"] . "'");
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




}
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(isset($_POST["hp_computer"])) {

 
    if(!empty($_POST["quantitys"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM hp_computer WHERE product_id='" . $_POST["id"] . "'");
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




}
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(isset($_POST["apple_computer"])) {

 
    if(!empty($_POST["quantitys"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM apple_computer WHERE product_id='" . $_POST["id"] . "'");
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
            <li ><a href="index.php">Home</a></li>
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
                    <div class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-6 col-xs-12">
                <div class="input-group search-form">
       
          <input type="text" placeholder="Search..." name="search" id="search" class="input-lg typeahead txtCountry form-control" autocomplete="off">
          <span class="input-group-addon"><i  class="glyphicon glyphicon-search"></i></span>
         
  
      </div>
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
                            <?php     
                            if((isset($_SESSION['username']))){
                            ?>
                        <div class="col-xs-3">

                          <a href="#" class="active" id="login-form-link">LOG ME OUT</a>

                        </div>
                         <?php } else { ?>
                        <div class="col-xs-5">
                          <i class="glyphicon glyphicon-user"></i>&nbsp&nbsp<a href="login.php" id="register-form-link">LOG ME / REGISTER</a>
                        </div>
                         <?php }?>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="login-form" action="sessiondestroy.php" method="post" role="form" style="display: block;">
                            <?php     
                            if((isset($_SESSION['username']))){
                            ?>
                             <h1><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION['username'];  ?></h1>
                       
                                         <div class="modal-footer">
                                          <input type="submit" name="logout-main" value="Logout" class="btn btn-danger">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                         </div>
                                         <?php } else { ?>
                                         <div>
                                           <!-- <h1>Login</h1> -->
                                         </div>
                                         <?php }?>
                            
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
                                  <input type="text" name="Password" placeholder="Password" class="text-design form-control Password"  >
                              </div>
                               <div class="form-group">
                                  <label for="Product Name">Confirm Password</label>
                                  <input type="text" name="Confirm-Password" placeholder="Confirm-Password" class="text-design form-control Confirm-Password"  >
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
                <table class="table table-hover table-responsive" id="my-cart-table">
                  <tbody>
                     <?php   
                    foreach ($_SESSION["cart_item"] as $item){
                    ?>
                    <tr title="summary 2" data-id="2" data-price="9.00">
                    <td class="text-center" style="width: 30px;"><img width="100px" height="100px" src="<?php echo $item["images"]; ?>"></td>
                    <td><?php echo $item["name"]; ?></td>
                    <td></td>
                    <td></td>
                    <td title="Total" class="my-product-total">$18</td>
                    <td title="Remove from Cart" class="text-center" style="width: 30px;">
                      <a href="index.php?action=remove&product_id=<?php echo $item["product_id"]; ?>" class="btn btn-xs btn-danger my-product-remove">X</a>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><strong>Stock</strong></td>
                    <td></td><td></td><td>
                      <strong id="my-cart-grand-total"><?php echo $item["quantity"]; ?></strong>
                    </td><td></td>
                  </tr>
                  <tr style="color: red"><td></td><td><strong>Qunatity</strong></td>
                    <td></td><td></td><td><strong id="my-cart-discount-price"><?php echo $item["quantitys"]; ?></strong></td><td></td></tr>
                    <tr style="color: red"><td></td><td><strong>Price</strong></td>
                    <td></td><td></td><td><strong id="my-cart-discount-price">RS.<?php echo $item["price"]; ?></strong></td><td></td></tr>
                  
                  </tbody>
               
                  <?php }?>
                </table>
              <table class="table table-bordered table-striped">
                
                    <?php   
                    foreach ($_SESSION["cart_item"] as $item){
                    ?>
                  
                    <?php
                    $item_total += ($item["price"]*$item["quantitys"]);
                }
                ?>

                <tr>
                <td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
                </tr>
                </table> 
               <?php
                }
                ?>       
               
            </div>
            <div class="modal-footer">
                <a href="check.php" class="btn btn-default">BuyNow</a>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

            </div>
           </form> 
        </div>
    </div>
</div>
<!-- add to cart php -->


