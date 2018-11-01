<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Add view POPUP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record For Samsung</h4>
            </div>
            <div class="modal-body">
              
                <div class="form-group">
                    <label for="Product Id">Product Id</label>
                    <input type="text" name="product_id" placeholder="product id" class="text-design form-control">
                </div>

                <div class="form-group">
                    <label for="Product Name">Product Name</label>
                    <input type="text" name="product_name" placeholder="product Name" class="text-design form-control"  >
                </div>

                <div class="form-group">
                    <label for="Model Number">Model Number</label>
                    <input type="text" name="model_number" placeholder="Model Number" class="text-design form-control" >
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="text" name="price" placeholder="Price" class="text-design form-control"  >
                </div>
                <div class="form-group">
                    <label for="Quantity">Quantity</label>
                    <input type="text" name="quantity" placeholder="Quantity" class="text-design form-control"  >
                </div>
                <div class="form-group">
                    <label for="Key Feature 1">Key Feature 1</label>
                    <input type="text" name="key1" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="Key Feature 2">Key Feature 2</label>
                    <input type="text" name="key2" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 3</label>
                    <input type="text" name="key3" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
               <div class="form-group">
                    <label for="email">Key Feature 4</label>
                    <input type="text" name="key4" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 5</label>
                    <input type="text" name="key5" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 6</label>
                    <input type="text" name="key6" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Image</label>
                   <input type="file" name="file" class="upload-design">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" name="upload-product" value="Upload" class="btn btn-default">
            </div>
           </form> 
        </div>
    </div>
</div>
<!--  for Insert php -->
<div id="backend-show">
<div id="errors"></div>

      <?php
        if(isset($_POST['upload-product']))
        {
        $con=new mysqli("localhost","root","","hamrodookan");
        if(!$con){
        	die("error");
        }
        	$name=$_FILES['file']['name'];

		$tmp_name=$_FILES['file']['tmp_name'];
		$location='images/';
		 $target='images/'.$name;
		 if(move_uploaded_file($tmp_name,$location.$name)){
				  $p_id=$_POST['product_id'];
				  $p_name=$_POST['product_name'];
				  $model_number=$_POST['model_number'];
				  $price=$_POST['price'];
				  $quantity=$_POST['quantity'];
				  $key1=$_POST['key1'];
				  $key2=$_POST['key2'];
				  $key3=$_POST['key3'];
				  $key4=$_POST['key4'];
				  $key5=$_POST['key5'];
				  $key6=$_POST['key6'];

        $sql="INSERT INTO `alldata`( `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES ('$p_id','$p_name','".$target."','$model_number','$price','$key1','$key2','$key3','$key4','$key5','$key6','$quantity')";
        if(mysqli_query($con,$sql)){
        	echo " <script> $(errors).html('Upload Sucessfully'); </script>";
        }

        else{
        	echo" <script> $(errors).html('Error on Save Information<div>Try Again !!!!!</div>'); </script>";
        }
    }
        }
      ?>
</div>


<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Update View POPUP for samsung!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
  
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update Record For Samsung</h4>
            </div>
            <div class="modal-body">
              
                <div class="form-group">
                    <label for="Product Id">Product Id</label>
                    <input type="text" id="product_id" value="" class="text-design form-control">
                </div>

                <div class="form-group">
                    <label for="Product Name">Product Name</label>
                    <input type="text" id="product_name" placeholder="product Name" class="text-design form-control"  >
                </div>

                <div class="form-group">
                    <label for="Model Number">Model Number</label>
                    <input type="text" id="model_number" placeholder="Model Number" class="text-design form-control" >
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="text" id="price" placeholder="Price" class="text-design form-control"  >
                </div>
                <div class="form-group">
                    <label for="Quantity">Quantity</label>
                    <input type="text" id="quantity" placeholder="Quantity" class="text-design form-control"  >
                </div>
                <div class="form-group">
                    <label for="Key Feature 1">Key Feature 1</label>
                    <input type="text" id="key1" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="Key Feature 2">Key Feature 2</label>
                    <input type="text" id="key2" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 3</label>
                    <input type="text" id="key3" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
               <div class="form-group">
                    <label for="email">Key Feature 4</label>
                    <input type="text" id="key4" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 5</label>
                    <input type="text" id="key5" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 6</label>
                    <input type="text" id="key6" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <img src="" id="image" >
                    <label for="email">Image</label>
                   <input type="file" id="file" class="upload-design">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-default" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>

        </div>
    </div>
</div>