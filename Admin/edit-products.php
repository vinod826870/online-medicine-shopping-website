<?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>
<?php require_once('include/topbar.php');?>
<?php require_once('include/config.php');
//================= product table =====================//
$id = $_GET['e_id'];
$select = "SELECT * FROM `pro_products` WHERE `id`=".$id;
$query = mysqli_query($conn,$select);
$res = mysqli_fetch_assoc($query);
//================= /product table =====================//
?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
          
        </div>
        <div class="card-body">
          <form action="update_product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select class="form-control" name="category" id="exampleFormControlSelect1">
                <option>Select Category</option>
                <?php
                //================= category table =====================//
                $sel = "SELECT * FROM `pro_categories`";
                $query=mysqli_query($conn,$sel);
                while($rw=mysqli_fetch_array($query))
                //================= /category table =====================//
                {?>
                <option value="<?php echo $rw['id'];?>" <?php if ($rw['id']==$res['cat_id']){ echo "selected";}?>>
                  <?php echo $rw['category_name']; ?>
                </option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputName">Product Name</label>
              <input type="text" class="form-control" name="product_name" value="<?php echo $res['product_name']?>" id="exampleInputName" aria-describedby="emailHelp"
              placeholder="Enter Product Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPrice">Product Price</label>
              <input type="text" class="form-control" name="product_price" value="<?php echo $res['product_price']?>" id="exampleInputPrice" aria-describedby="emailHelp"
              placeholder="Enter Product Price">
            </div>
            <div class="form-group">
              <label for="exampleInputDes">Product Description</label>
              <textarea class="form-control" name="product_description" id="exampleInputDes" rows="3">
              <?php echo $res['product_description']?>
              </textarea>
            </div>
            <div class="form-group">
              Old Image :
              <img src="img/<?php echo $res['product_image']; ?>" height="100" width="100">
            </div>
            
            <div class="form-group">
              <label for="exampleInputImage">New Image</label>
              <div class="custom-file">
                <input type="file" name="new_image" class="custom-file-input" id="exampleInputImage">
                <label class="custom-file-label" name="new_image" for="customFile">Choose file</label>
              </div>
            </div>
            <input type="hidden" name="ex_file" value="<?php echo $res['product_image'];?>">
            <input type="hidden" name="id" value="<?php echo $res['id'];?>">
            <input type="submit" class="btn btn-primary" value="Update">
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>  <!-- /Container Fluid-->
  <?php require_once('include/footer.php');?>
  <?php }else{
  header('location:login.php');
  } ?>