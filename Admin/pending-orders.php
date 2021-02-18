<?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>
<?php require_once('include/topbar.php');?>
<?php require_once('include/config.php');?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    
  </div>
  <!-- Row -->
  <div class="row">
    <!-- ProductTable with Hover -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">All Pending Order Show</h6>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <th>#</th>
                <th> Name</th>
                <th width="50">Email /Contact no</th>
                <th>Shipping Address</th>
                <th>Product </th>
                <th>Qty </th>
                <th>Amount </th>
                <th>Order Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once('include/config.php');
              $status='Delivered';
              $select ="select pro_users.name as username,pro_users.email as useremail,pro_users.contact_number as usercontact,pro_users.shipping_address as shippingaddress,pro_products.product_name as productname,pro_orders.quantity as quantity,pro_orders.orderDate as orderdate,pro_products.product_price as productprice,pro_orders.id as id  from pro_orders join pro_users on  pro_orders.userId=pro_users.id join pro_products on pro_products.id=pro_orders.productId where pro_orders.orderStatus!='$status' or pro_orders.orderStatus is null";
              $query=mysqli_query($conn,$select);
              $cnt=1;
              while($row=mysqli_fetch_assoc($query))
              {
              ?>
              
              
              <tr>
                <td><?php echo htmlentities($cnt);?></td>
                <td><?php echo htmlentities($row['username']);?></td>
                <td><?php echo htmlentities($row['useremail']);?>/<?php echo htmlentities($row['usercontact']);?></td>
                
                <td><?php echo htmlentities($row['shippingaddress']);?></td>
                <td><?php echo htmlentities($row['productname']);?></td>
                <td><?php echo htmlentities($row['quantity']);?></td>
                <td><?php echo htmlentities($row['quantity']*$row['productprice']);?></td>
                <td><?php echo htmlentities($row['orderdate']);?></td>
                
                <td>
                  <a href="updateorder.php?oid=<?php echo htmlentities($row['id']);?>" title="Update order" class="text-success">
                    <i class="fas fa-edit fa-lg"></i>
                    
                  </a>
                </td>
              </tr>
              <?php $cnt=$cnt+1; } ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Row-->
  
</div>
<!---Container Fluid-->
<?php require_once('include/footer.php');?>
<?php }else{
header('location:login.php');
} ?>