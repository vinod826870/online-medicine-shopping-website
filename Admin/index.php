<?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>
<?php require_once('include/topbar.php');?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Online Medicine Shopping</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </div>
<div class="row mb-3">
  <!-- Earnings (Monthly) Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="category.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Create Category</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-plus-circle fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <!-- Earnings (Annual) Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="insert-product.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Insert Product</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fab fa-product-hunt fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <!-- New User Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="manage-users.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Manage User</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <!-- Earnings (Annual) Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="todays-order.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Todays Order</div>
                      <br><br>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <!-- Earnings (Annual) Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="pending-orders.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Orders</div>
                      <br><br>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-secondary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <!-- Earnings (Annual) Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="delivered-orders.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Delivered Orders</div>
                      <br><br>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <!-- Pending Requests Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="manage-products.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Manage Products</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-basket fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <!-- Pending Requests Card Example -->
            <a class="col-xl-3 col-md-6 mb-4" href="user-logs.php">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">User Logs</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="far fa-address-card fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>

</div>
<!---Container Fluid-->
</div>
<?php require_once('include/footer.php');?>
<?php }else{
header('location:login.php');
} ?>