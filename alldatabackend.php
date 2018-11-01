<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Add view POPUP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title upload-product-samsung" id="myModalLabel">Add New Record For Samsung</h4>
                <h4 class="modal-title upload-product-oppo" id="myModalLabel">Add New Record For OPPO</h4>
                <h4 class="modal-title upload-product-hp" id="myModalLabel">Add New Record For HP</h4>
                <h4 class="modal-title upload-product-apple" id="myModalLabel">Add New Record For APPLE</h4>
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
                    <input type="number" name="price" placeholder="Price" class="text-design form-control"  >
                </div>
                <div class="form-group">
                    <label for="Quantity">Quantity</label>
                    <input type="number" name="quantity" placeholder="Quantity" class="text-design form-control"  >
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
                <input type="submit" name="upload-product-samsung" value="Upload" class="btn btn-default upload-product-samsung">
                <input type="submit" name="upload-product-oppo" value="Upload" class="btn btn-default upload-product-oppo">
                <input type="submit" name="upload-product-hp" value="Upload" class="btn btn-default upload-product-hp">
                <input type="submit" name="upload-product-apple" value="Upload" class="btn btn-default upload-product-apple">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

            </div>
           </form> 
        </div>
    </div>
</div>
<!--  for Insert for samsung php -->
<div id="backend-show">
<div id="errors"></div>

      <?php
        if(isset($_POST['upload-product-samsung']))
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

        $sql="INSERT INTO `alldata`( `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES ('$p_id','$p_name','".$target."','$model_number','$price','$key1','$key2','$key3','$key4','$key5','$key6','$quantity') ";
        if(mysqli_query($con,$sql)){
        	echo " <script> alert('UPLOAD SUCESS'); </script>";
        }

        else{
        	echo"  <script> alert('UPLOAD Error');";
        }
    }
        }
      ?>

   <!-- insert for oppo --> 
   
      <?php
        if(isset($_POST['upload-product-oppo']))
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

        $sql="INSERT INTO `oppo_mobile`( `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES ('$p_id','$p_name','".$target."','$model_number','$price','$key1','$key2','$key3','$key4','$key5','$key6','$quantity') ";
        if(mysqli_query($con,$sql)){
            echo " <script> alert('UPLOAD SUCESS'); </script>";
        }

        else{
            echo"  <script> alert('UPLOAD Error');";
        }
    }
        }
      ?>
   <!-- insert for HP --> 
   
      <?php
        if(isset($_POST['upload-product-hp']))
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

        $sql="INSERT INTO `hp_computer`( `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES ('$p_id','$p_name','".$target."','$model_number','$price','$key1','$key2','$key3','$key4','$key5','$key6','$quantity') ";
        if(mysqli_query($con,$sql)){
            echo " <script> alert('UPLOAD SUCESS'); </script>";
        }

        else{
            echo"  <script> alert('UPLOAD Error');";
        }
    }
        }
      ?>
          <!-- insert for Apple --> 
   
      <?php
        if(isset($_POST['upload-product-apple']))
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

        $sql="INSERT INTO `apple_computer`( `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES ('$p_id','$p_name','".$target."','$model_number','$price','$key1','$key2','$key3','$key4','$key5','$key6','$quantity') ";
        if(mysqli_query($con,$sql)){
            echo " <script> alert('UPLOAD SUCESS'); </script>";
        }

        else{
            echo"  <script> alert('UPLOAD Error'); </script>";
        }
    }
        }
      ?> 
</div>


<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Update View POPUP for samsung!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
         <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title upload-product-samsung" id="myModalLabel">UPDATE Record For Samsung</h4>
                <h4 class="modal-title upload-product-oppo" id="myModalLabel">UPDATE Record For OPPO</h4>
                <h4 class="modal-title upload-product-hp" id="myModalLabel">UPDATE Record For HP</h4>
                <h4 class="modal-title upload-product-apple" id="myModalLabel">UPDATE Record For APPLE</h4>
            </div>
            <div class="modal-body">
              
                <div class="form-group">
                    <label for="Product Id">Product Id</label>
                    <input type="text" id="product_id" name="product_id" value="" class="text-design form-control">
                </div>

                <div class="form-group">
                    <label for="Product Name">Product Name</label>
                    <input type="text" id="product_name" name="product_name" placeholder="product Name" class="text-design form-control"  >
                </div>

                <div class="form-group">
                    <label for="Model Number">Model Number</label>
                    <input type="text" id="model_number" name="model_number" placeholder="Model Number" class="text-design form-control" >
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="number" id="price" name="price" placeholder="Price" class="text-design form-control"  >
                </div>
                <div class="form-group">
                    <label for="Quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Quantity" class="text-design form-control"  >
                </div>
                <div class="form-group">
                    <label for="Key Feature 1">Key Feature 1</label>
                    <input type="text" id="key1" name="key1" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="Key Feature 2">Key Feature 2</label>
                    <input type="text" id="key2" name="key2" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 3</label>
                    <input type="text" id="key3" name="key3" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
               <div class="form-group">
                    <label for="email">Key Feature 4</label>
                    <input type="text" id="key4" name="key4" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 5</label>
                    <input type="text" id="key5" name="key5" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <label for="email">Key Feature 6</label>
                    <input type="text" id="key6" name="key6" placeholder="Key Feature 1st" class="text-design form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="hidden_user_image" id="hidden_user_image">
                    <label for="file">Image</label>
                   <input type="file" id="file" name="file" class="upload-design" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" name="update-product-samsung" value="Update" class="btn btn-default upload-product-samsung">
                <input type="submit" name="update-product-oppo" value="Update" class="btn btn-default upload-product-oppo">
                <input type="submit" name="update-product-hp" value="Update" class="btn btn-default upload-product-hp">
                <input type="submit" name="update-product-apple" value="Update" class="btn btn-default upload-product-apple">
                
                <input type="hidden" id="hidden_user_id" name="id">
            </div>
         </form>
        </div>
    </div>
</div>
   <?php
        if(isset($_POST['update-product-samsung']))
        {
        $con=new mysqli("localhost","root","","hamrodookan");
        if(!$con){
            die("error");
        }
        // if Any new image is update
       if($_FILES["file"]["name"]!='')
        {
        $name=$_FILES['file']['name'];

        $tmp_name=$_FILES['file']['tmp_name'];
        $location='images/';
         $target='images/'.$name;
         unlink('images/$old_image');
          move_uploaded_file($tmp_name,$location.$name);
        }
        // if no image is update than old image
        else{
            $target=$_POST["hidden_user_image"];
        }

        $id = $_POST['id'];
          $product_id=$_POST['product_id'];
          $product_name=$_POST['product_name'];
          $model_number=$_POST['model_number'];
          $price=$_POST['price'];
          $quantity=$_POST['quantity'];
          $key1=$_POST['key1'];
          $key2=$_POST['key2'];
          $key3=$_POST['key3'];
          $key4=$_POST['key4'];
          $key5=$_POST['key5'];
          $key6=$_POST['key6'];

        $sql= "UPDATE `alldata` SET `product_id` = '$product_id', `product_name` = '$product_name',`image`='".$target."', `modelnumber` = '$model_number', `price` = '$price', `quantity` = '$quantity', `keyfeature1` = '$key1', `keyfeature2` = '$key2', `keyfeature3` = '$key3', `keyfeature4` = '$key4', `keyfeature5` = '$key5', `keyfeature6` = '$key6' WHERE    `id` = '$id'";
        if(mysqli_query($con,$sql)){
            echo " <script> alert('UPDATE SUC
            ESSFULLY'); </script>";
        }

        else{
            echo" <script> $(errors).html('Error on Save Information<div>Try Again !!!!!</div>'); </script>";
        }
    

            }


    ?>        
    <!-- ################################################UPDATE oppo########################################## -->
     <?php
        if(isset($_POST['update-product-oppo']))
        {
        $con=new mysqli("localhost","root","","hamrodookan");
        if(!$con){
            die("error");
        }
        // if Any new image is update
       if($_FILES["file"]["name"]!='')
        {
        $name=$_FILES['file']['name'];

        $tmp_name=$_FILES['file']['tmp_name'];
        $location='images/';
         $target='images/'.$name;
         unlink('images/$old_image');
          move_uploaded_file($tmp_name,$location.$name);
        }
        // if no image is update than old image
        else{
            $target=$_POST["hidden_user_image"];
        }

        $id = $_POST['id'];
          $product_id=$_POST['product_id'];
          $product_name=$_POST['product_name'];
          $model_number=$_POST['model_number'];
          $price=$_POST['price'];
          $quantity=$_POST['quantity'];
          $key1=$_POST['key1'];
          $key2=$_POST['key2'];
          $key3=$_POST['key3'];
          $key4=$_POST['key4'];
          $key5=$_POST['key5'];
          $key6=$_POST['key6'];

        $sql= "UPDATE `oppo_mobile` SET `product_id` = '$product_id', `product_name` = '$product_name',`image`='".$target."', `modelnumber` = '$model_number', `price` = '$price', `quantity` = '$quantity', `keyfeature1` = '$key1', `keyfeature2` = '$key2', `keyfeature3` = '$key3', `keyfeature4` = '$key4', `keyfeature5` = '$key5', `keyfeature6` = '$key6' WHERE    `id` = '$id'";
        if(mysqli_query($con,$sql)){
            echo " <script> alert('UPDATE SUCESSFULLY'); </script>";
        }

        else{
            echo" <script> $(errors).html('Error on Save Information<div>Try Again !!!!!</div>'); </script>";
        }
    

            }


    ?> 
        <!-- ################################################UPDATE hp########################################## -->
     <?php
        if(isset($_POST['update-product-hp']))
        {
        $con=new mysqli("localhost","root","","hamrodookan");
        if(!$con){
            die("error");
        }
        // if Any new image is update
       if($_FILES["file"]["name"]!='')
        {
        $name=$_FILES['file']['name'];

        $tmp_name=$_FILES['file']['tmp_name'];
        $location='images/';
         $target='images/'.$name;
         unlink('images/$old_image');
          move_uploaded_file($tmp_name,$location.$name);
        }
        // if no image is update than old image
        else{
            $target=$_POST["hidden_user_image"];
        }

        $id = $_POST['id'];
          $product_id=$_POST['product_id'];
          $product_name=$_POST['product_name'];
          $model_number=$_POST['model_number'];
          $price=$_POST['price'];
          $quantity=$_POST['quantity'];
          $key1=$_POST['key1'];
          $key2=$_POST['key2'];
          $key3=$_POST['key3'];
          $key4=$_POST['key4'];
          $key5=$_POST['key5'];
          $key6=$_POST['key6'];

        $sql= "UPDATE `hp_computer` SET `product_id` = '$product_id', `product_name` = '$product_name',`image`='".$target."', `modelnumber` = '$model_number', `price` = '$price', `quantity` = '$quantity', `keyfeature1` = '$key1', `keyfeature2` = '$key2', `keyfeature3` = '$key3', `keyfeature4` = '$key4', `keyfeature5` = '$key5', `keyfeature6` = '$key6' WHERE    `id` = '$id'";
        if(mysqli_query($con,$sql)){
            echo "<script> alert('UPDATE SUCESSFULLY'); </script>";
        }

        else{
            echo" <script> $(errors).html('Error on Save Information<div>Try Again !!!!!</div>'); </script>";
        }
    

            }


    ?>         
     <?php
        if(isset($_POST['update-product-apple']))
        {
        $con=new mysqli("localhost","root","","hamrodookan");
        if(!$con){
            die("error");
        }
        // if Any new image is update
       if($_FILES["file"]["name"]!='')
        {
        $name=$_FILES['file']['name'];

        $tmp_name=$_FILES['file']['tmp_name'];
        $location='images/';
         $target='images/'.$name;
         unlink('images/$old_image');
          move_uploaded_file($tmp_name,$location.$name);
        }
        // if no image is update than old image
        else{
            $target=$_POST["hidden_user_image"];
        }

        $id = $_POST['id'];
          $product_id=$_POST['product_id'];
          $product_name=$_POST['product_name'];
          $model_number=$_POST['model_number'];
          $price=$_POST['price'];
          $quantity=$_POST['quantity'];
          $key1=$_POST['key1'];
          $key2=$_POST['key2'];
          $key3=$_POST['key3'];
          $key4=$_POST['key4'];
          $key5=$_POST['key5'];
          $key6=$_POST['key6'];

        $sql= "UPDATE `apple_computer` SET `product_id` = '$product_id', `product_name` = '$product_name',`image`='".$target."', `modelnumber` = '$model_number', `price` = '$price', `quantity` = '$quantity', `keyfeature1` = '$key1', `keyfeature2` = '$key2', `keyfeature3` = '$key3', `keyfeature4` = '$key4', `keyfeature5` = '$key5', `keyfeature6` = '$key6' WHERE    `id` = '$id'";
        if(mysqli_query($con,$sql)){
            echo "<script> alert('UPDATE SUCESSFULLY'); </script>";
        }

        else{
            echo" <script> $(errors).html('Error on Save Information<div>Try Again !!!!!</div>'); </script>";
        }
    

            }


    ?>             