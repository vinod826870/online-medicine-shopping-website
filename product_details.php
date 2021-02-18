
<?php
//session_start();
error_reporting(0);
require_once('Admin/include/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM pro_products WHERE id={$id}";
		$query_p=mysqli_query($conn,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['product_price']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}
?>
<?php
error_reporting(0);
require_once('include/header.php');?>
<link href="css/product_details.css" rel="stylesheet">
<section>
	<div class="container">
		<div class="row">
			<?php
			require_once('Admin/include/config.php');
							$pid = $_GET['pid'];
							$select = "SELECT * FROM `pro_products` WHERE `id`=".$pid;
							$ret = mysqli_query($conn,$select);
							//$num=mysqli_num_rows($ret);
							//print_r($num);
								while ($rw = mysqli_fetch_assoc($ret))
			{ ?>

			<div class="col-md-6">
				<a href="Admin/img/<?php echo $rw['product_image'];?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(Admin/img/<?php echo $rw['product_image'];?>);">
					<img src="admin/img/<?php echo $rw['product_image']; ?>" class="img-fluid" width="400"
                  height="400" /><br />
				</a>
			</div>
			<div class="col-md-6">

				<!-- Heading -->
				<h4 class="text-info mb-2"><?php echo $rw['product_name']; ?></h4>
				
				<div class="col-auto">
					<!-- Rating -->
					<div class="rating font-size-xs text-dark" data-value="4">
						<div class="rating-item">
							<i class="fa fa-star"></i>
						</div>
						<div class="rating-item">
							<i class="fa fa-star"></i>
						</div>
						<div class="rating-item">
							<i class="fa fa-star"></i>
						</div>
						<div class="rating-item">
							<i class="fa fa-star"></i>
						</div>
						<div class="rating-item">
							<i class="fa fa-star"></i>
						</div>
					</div>
					<a class="font-size-sm text-reset ml-2" href="#reviews">
						Reviews (6)
					</a>
					
				</div>
				<!-- Price -->
				<div class="mb-7">
					<span class="ml-1 font-size-h5 font-weight-bolder text-primary">Rs.<?php echo $rw['product_price']; ?></span>
					<span class="font-size-sm ml-1">(In Stock)</span>
				</div>
				<!-- Form -->
				<form>
					<div class="form-group">
						<!-- Label -->
						<p class="mb-5">
							Category: <strong id="colorCaption"><?php echo $rw['cat_id']; ?></strong>
						</p>
						<!-- Radio -->
						
					</div>
					<div class="form-group">
						
						<div class="form-row mb-7">
                            <div class="col-xs-3">
							<input type="text" class="form-control" name="quantity" id="quantity<?php echo $rw['id']; ?>" value="1" size="5" />
						</div>
							<br><br>

							<input type="hidden" name="hidden_name" id="name<?php echo $rw['id']; ?>" value="<?php echo $rw['product_name']; ?>" />
            	<input type="hidden" name="hidden_price" id="price<?php echo $rw['id']; ?>" value="<?php echo $rw['product_price']; ?>" />
                    <div class="col-xs-3">
            	<input type="button" name="add_to_cart" id="<?php echo $rw['id']; ?>" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
            </div>
            <br>
            <br>


            
							
						</div>
						<!-- Share -->
						<p class="mb-0">
							<span class="mr-4">Share:</span>
							<a class="btn btn-xxs btn-circle btn-light font-size-xxxs text-gray-350" href="#!">
								<i class="fa fa-twitter"></i>
							</a>
							<a class="btn btn-xxs btn-circle btn-light font-size-xxxs text-gray-350" href="#!">
								<i class="fa fa-facebook"></i>
							</a>
							<a class="btn btn-xxs btn-circle btn-light font-size-xxxs text-gray-350" href="#!">
								<i class="fa fa-pinterest"></i>
							</a>
						</p>
					</div>
				</form>
				<!-- Nav tabs -->
				<div class="card">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i>  <span>Description</span></a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-star"></i>  <span>Review</span></a></li>
					</ul>
					
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<?php echo $rw['product_description']; ?>
							
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							<div id="review" class="tab-pane active">
								<div class="product-tab">
									
									<form role="form" class="cnt-form" name="review" method="post">
										
										<div class="product-add-review">
											<h4 class="title">Write your own review</h4>
											<div class="review-table">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 star</th>
																<th>2 stars</th>
																<th>3 stars</th>
																<th>4 stars</th>
																<th>5 stars</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="cell-label">Quality</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
															
															
														</tbody>
														</table><!-- /.table .table-bordered -->
														</div><!-- /.table-responsive -->
														</div><!-- /.review-table -->
														
														<div class="review-form">
															<div class="form-container">
																
																
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label for="exampleInputName">Your Name <span class="astk">*</span></label>
																			<input type="text" class="form-control txt" id="exampleInputName" placeholder="" name="name" required="required">
																			</div><!-- /.form-group -->
																			<div class="form-group">
																				<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
																				<input type="text" class="form-control txt" id="exampleInputSummary" placeholder="" name="summary" required="required">
																				</div><!-- /.form-group -->
																			</div>
																			<div class="col-md-6">
																				<div class="form-group">
																					<label for="exampleInputReview">Review <span class="astk">*</span></label>
																					<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder="" name="review" required="required"></textarea>
																					</div><!-- /.form-group -->
																				</div>
																				</div><!-- /.row -->
																				
																				<div class="action text-right">
																					<button name="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
																					</div><!-- /.action -->
																					<!-- /.cnt-form -->
																					</div><!-- /.form-container -->
																					</div><!-- /.review-form -->
																					</div></form><!-- /.product-add-review -->
																					
																					</div><!-- /.product-tab -->
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
																<?php } ?>
															</div>
															
														</div>
													</section>
													<?php require_once('include/footer.php')?>
													