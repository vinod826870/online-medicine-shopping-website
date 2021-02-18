<?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>
<?php require_once('include/topbar.php');?>
<?php
require_once('include/config.php');
$select = "SELECT * FROM `pro_users`";
$query = mysqli_query($conn,$select);
?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!-- Row -->
  <div class="row">
    <!-- ProductTable with Hover -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">All User Show</h6>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <th>Sr.No.</th>
                <th>Name</th>
                <th>Email </th>
                <th>Number</th>
                <th>Address</th>
                <!-- <th>Reg Date</th> -->
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
              <?php $i=0; while ($res = mysqli_fetch_assoc($query)) { ?>
              
              <tr>
                <td><?php echo ++$i;?></td>
                <td><?php echo $res['name'];?></td>
                <td><?php echo $res['email'];?></td>
                <td><?php echo $res['contact_number'];?></td>
                <td><?php echo $res['shipping_address'];?></td>
                <!-- <td><?php echo $res['regDate']; ?></td> -->
                <!-- <td>
                  <a href="#">
                    <i class="fas fa-edit fa-lg text-success"></i>
                    
                  </a>
                  
                  
                  <a href="#">
                    <i class="far fa-trash-alt fa-lg text-danger"></i>
                  </a>
                </td> -->
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Row-->
  </div>  <!---Container Fluid-->
  <?php require_once('include/footer.php');?>
  <?php }else{
  header('location:login.php');
  } ?>