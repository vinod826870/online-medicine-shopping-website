
<?php session_start();
error_reporting(0);
require_once('Admin/include/config.php');
if(strlen($_SESSION['login'])==0)
{
	header('location:login.php');
}
else{
?>
<?php require_once('include/header.php')?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
			</div><!-- /.breadcrumb-inner -->
			</div><!-- /.container -->
			</div><!-- /.breadcrumb -->
			<div class="body-content outer-top-xs">
				<div class="container">
					<div class="row inner-bottom-sm">
						<div class="shopping-cart">
							<div class="col-md-12 col-sm-12 shopping-cart-table ">
								<div class="table-responsive">
									<form name="cart" method="post">
										<table class="table table-bordered table-hover table-striped">
											<thead>
												<tr>
													<th class="cart-romove item">#</th>
													<th class="cart-description item">Image</th>
													<th class="cart-product-name item">Product Name</th>
													<th class="cart-qty item">Quantity</th>
													<th class="cart-sub-total item">Price Per unit</th>
													<th class="cart-total item">Grandtotal</th>
													<th class="cart-total item">Payment Method</th>
													<th class="cart-description item">Order Date</th>
													<th class="cart-total last-item">Action</th>
												</tr>
												</thead><!-- /thead -->
												<tbody>
													<?php 
													include('database_connection.php');
													$query=mysqli_query($conn,"select pro_products.product_image as pimg1,pro_products.product_name as pname,pro_products.id as proid,pro_orders.productId as opid,pro_orders.quantity as qty,pro_products.product_price as pprice,pro_orders.paymentMethod as paym,pro_orders.orderDate as odate,pro_orders.id as orderid from pro_orders join pro_products on pro_orders.productId=pro_products.id where pro_orders.userId='".$_SESSION['id']."' and pro_orders.paymentMethod is not null");
													$cnt=1;
													while($row=mysqli_fetch_array($query))
													{
													?>
													<tr>
														<td><?php echo $cnt;?></td>
														<td class="cart-image">
															<a class="entry-thumbnail" href="product_details.php?pid=<?php echo $row['opid'];?>">
								 								<img src="admin/img/<?php echo $row['pimg1'];?>" alt="" width="84" height="146">
															</a>
														</td>
														<td class="cart-product-name-info">
															<h4 class='cart-product-description'><a href="product_details.php?pid=<?php echo $row['opid'];?>">
															<?php echo $row['pname'];?></a></h4>
														</td>
														<td class="cart-product-quantity">
															<?php echo $qty=$row['qty']; ?>
														</td>
														<td class="cart-product-sub-total"><?php echo $price=$row['pprice']; ?>  </td>
														<td class="cart-product-grand-total"><?php echo (($qty*$price)+$shippcharge);?></td>
														<td class="cart-product-sub-total"><?php echo $row['paym']; ?>  </td>
														<td class="cart-product-sub-total"><?php echo $row['odate']; ?>  </td>
														<td>
															<a href="javascript:void(0);" class="btn btn-success btn-xs" onClick="popUpWindow('track-order.php?oid=<?php echo htmlentities($row['orderid']);?>');" title="Track order">
															Track
														</a>
														</td>
														</tr>
														<?php $cnt=$cnt+1;} ?>
														</tbody><!-- /tbody -->
														</table><!-- /table -->
													</div>
												</div>
												</div><!-- /.shopping-cart -->
												</div> <!-- /.row -->
											</form>
											<!-- ============================================== BRANDS CAROUSEL ============================================== -->
											<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
											</div><!-- /.body-content -->
											<script language="javascript" type="text/javascript">//======= Track popUpWindow code =========//
											var popUpWin=0;
											function popUpWindow(URLStr, left, top, width, height)
											{
												if(popUpWin)
												{
													if(!popUpWin.closed) popUpWin.close();
												}
												popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
											}
											</script>                  <!-- //======= Track popUpWindow code =========// -->
											<?php require_once('include/footer.php')?>

											<?php } ?>