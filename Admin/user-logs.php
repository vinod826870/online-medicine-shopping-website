<?php
session_start();
if (isset($_SESSION['medicine_id']) && $_SESSION['medicine_id']) {
?>
<?php
include('include/config.php');
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
					<h6 class="m-0 font-weight-bold text-primary">All User Login Details Show</h6>
				</div>
				<div class="table-responsive p-3">
					<table class="table align-items-center table-flush table-hover" id="dataTableHover">
						<thead class="thead-light">
							<tr>
								<th>#</th>
								<th> User Email</th>
								<th>User IP </th>
								<th>Login Time</th>
								<th>Logout Time </th>
								<th>Status </th>
							</tr>
						</thead>
						<tbody>
							<?php $query=mysqli_query($conn,"select * from user_log");
							$cnt=1;
							while($row=mysqli_fetch_array($query))
							{
							?>
							
							<tr>
								<td><?php echo htmlentities($cnt);?></td>
								<td><?php echo htmlentities($row['userEmail']);?></td>
								<td><?php echo htmlentities($row['userip']);?></td>
								<td> <?php echo htmlentities($row['loginTime']);?></td>
								<td><?php echo htmlentities($row['logout']); ?></td>
								<td><?php $st=$row['status'];
											if($st==1)
											{
												echo "Successfull";
											}
											else
											{
												echo "Failed";
											}
								?></td>
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