  <?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>
<?php require_once('include/topbar.php');?>
<?php
require_once('include/config.php');
$select = "SELECT * FROM `pro_categories`";
$query = mysqli_query($conn,$select);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h6 class="m-0 font-weight-bold text-primary">
    <?php
    if(isset($_GET['success_message']) && $_GET['success_message']==1){ ?>
    <div class="alert alert-success">
      <button type="button" class="close pl-1" data-dismiss="alert">×</button>
      <strong>Added Category!</strong>
    </div>
    <?php } ?>
    <?php
    if(isset($_GET['success_message']) && $_GET['success_message']==3){ ?>
    <div class="alert alert-warning">
      <button type="button" class="close pl-1" data-dismiss="alert">×</button>
      <strong>Edit Category!</strong>
    </div>
    <?php } ?>
    <?php
    if(isset($_GET['success_message']) && $_GET['success_message']==2){ ?>
    <div class="alert alert-danger">
      <button type="button" class="close pl-1" data-dismiss="alert">×</button>
      <strong>Deleted Category!</strong>
    </div>
    <?php } ?>
    </h6>
    
    <a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal">
      <i class="far fa-plus-square fa-lg pr-1"></i> <span>Add New Categories</span></a>
      
    </div>
    <!-- Add Categories Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="catinsert.php" method="POST">
            <div class="modal-header">
              <h4 class="modal-title">Add Categories</h4>
              <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="category_name" placeholder="Enter Category Name" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" name="categories" class="btn btn-success" value="Add">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Add Categories Modal HTML -->
    <!-- Row -->
    <div class="row">
      <!-- CategoryTable with Hover -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">All Category Show</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                  <th>SR NO.</th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; while ($res = mysqli_fetch_assoc($query)) { ?>
                
                <tr>
                  <td><?php echo ++$i; ?></td>
                  <td><?php echo $res['category_name']; ?></td>
                  <td>
                    <a href="#" class="btn btn-warning editbtn" data-toggle="modal" data-target="#editEmployeeModal"
                      onclick="editemp(<?php echo $res['id']; ?>)" >
                      <i class="fas fa-edit"></i>
                      <span>Edit</span></a>
                      <a href="Category_delete.php?d_id=<?php echo $res['id']; ?>" class="btn btn-danger">
                      <i class="far fa-trash-alt pr-1"></i>Delete</a>
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
  <!-- Edit Categories Modal HTML -->
  <div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="Category_update.php">
          <div class="modal-header">
            <h4 class="modal-title">Edit Categories</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="category" id="first_name" class="form-control" required>
            </div>
            <input type="hidden" name="id" id="id" class="form-control">
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Edit Categories Modal HTML -->
  <script>
  function editemp(id){
  //alert(id);
  $.ajax({
  'url':"disply_EditModel_data.php",
  "data":'e_id='+id,
  'type':'get',
  'datatype':'json',
  'success':function(response){
  //console.log(response.category_name);
  var res=JSON.parse(response);
  $('input[name="category"]').val(res.category_name);
  $('input[name="id"]').val(res.id);
  }
  });
  }
  </script>
  <?php require_once('include/footer.php');?>
  <?php }else{
  header('location:login.php');
  } ?>