<?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>
<?php require_once('include/topbar.php');?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Insert Product</h6>
          <?php
          if(isset($_GET['msg']) && $_GET['msg']==5){ ?>
          <div class="alert alert-secondary">
            <button type="button" class="close pl-1" data-dismiss="alert">×</button>
            <strong>Product Inserted Successfully !!</strong>
          </div>
          <?php } ?>
        </div>
        <div class="card-body">
          <form action="product_insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select class="form-control" name="category" id="exampleFormControlSelect1">
                <option>Select Category</option>
                <?php
                require_once('include/config.php');
                $sel = "SELECT * FROM `pro_categories`";
                $query=mysqli_query($conn,$sel);
                while($res=mysqli_fetch_array($query))
                {?>
                <option value="<?php echo $res['id'];?>"><?php echo $res['category_name']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputName">Product Name</label>
              <input type="text" class="form-control" name="product_name" id="exampleInputName" aria-describedby="emailHelp"
              placeholder="Enter Product Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPrice">Product Price</label>
              <input type="text" class="form-control" name="product_price" id="exampleInputPrice" aria-describedby="emailHelp"
              placeholder="Enter Product Price">
            </div>
            <div class="form-group">
              <label for="exampleInputDes">Product Description</label>
              <textarea class="form-control" name="product_description" id="exampleInputDes" rows="3"></textarea>
            </div>
            
            <div class="form-group">
              <label for="exampleInputImage">Product Image</label>
              <div class="custom-file">
                <input type="file" name="productimage" class="custom-file-input" id="exampleInputImage">
                <label class="custom-file-label" name="productimage" for="customFile">Choose file</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Add">
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