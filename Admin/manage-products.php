<?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>
<?php require_once('include/topbar.php');?>
<?php
require_once('include/config.php');
$select = "SELECT * FROM `pro_products`";
$query = mysqli_query($conn,$select);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h6 class="m-0 font-weight-bold text-primary">
    <?php
    if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
    <div class="alert alert-danger">
      <button type="button" class="close pl-1" data-dismiss="alert">×</button>
      <strong>Product Delete Successfully !!</strong>
    </div>
    <?php } ?>
    <?php
    if(isset($_GET['msg']) && $_GET['msg']==2){ ?>
    <div class="alert alert-success">
      <button type="button" class="close pl-1" data-dismiss="alert">×</button>
      <strong>Product Update Successfully !!</strong>
    </div>
    <?php } ?>
    </h6>
    
  </div>
  <!-- Row -->
  <div class="row">
    <!-- ProductTable with Hover -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">All Products Show</h6>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <th>Sr.No.</th>
                <th>Product</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; while ($res = mysqli_fetch_assoc($query)) { ?>
              
              <tr>
                <td><?php echo ++$i;?></td>
                <td><?php echo $res['product_name'];?></td>
                <td><?php echo $res['product_price'];?></td>
                <td><?php echo $res['product_description'];?></td>
                <td><img src="img/<?php echo $res['product_image'] ?>" height="100" width="100"></td>
                <td>
                  <a href="edit-products.php?e_id=<?php echo $res['id']?>" class="text-success">
                    <i class="fas fa-edit fa-lg"></i>
                    
                  </a>
                  
                  
                  <a href="delete-products.php?id=<?php echo $res['id']?>&del=delete" class="text-danger">
                    <i class="far fa-trash-alt fa-lg"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Row-->
  
</div>
<!---Container Fluid-->
</div>
<?php require_once('include/footer.php');?>
<?php }else{
header('location:login.php');
} ?>