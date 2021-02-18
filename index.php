
<?php require_once('include/header.php');?>
<section id="slider"><!------------------------slider---------------------------->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div id="slider-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#slider-carousel" data-slide-to="1"></li>
					<li data-target="#slider-carousel" data-slide-to="2"></li>
				</ol>
				
				<div class="carousel-inner">
					<div class="item active">
						<div class="col-sm-6">
							<h1><span>E</span>-MEDICINE</h1>
							<h2>Online Medicine Website</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<button type="button" class="btn btn-default get">Get it now</button>
						</div>
						<div class="col-sm-6">
							<img src="images/istockphoto.jpg" class="girl img-fluid" width="500" height="300" alt="" />
							<img src="images/home/pricing.png"  class="pricing" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<h1><span>E</span>-MEDICINE</h1>
							<h2>100% Medicine Provide</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<button type="button" class="btn btn-default get">Get it now</button>
						</div>
						<div class="col-sm-6">
							<img src="images/istockphoto2.jpg" class="girl img-fluid" width="500" height="300" alt="" />
							<img src="images/home/pricing.png"  class="pricing" alt="" />
						</div>
					</div>
					
					<div class="item">
						<div class="col-sm-6">
							<h1><span>E</span>-MEDICINE</h1>
							<h2>Online Medicine Website</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<button type="button" class="btn btn-default get">Get it now</button>
						</div>
						<div class="col-sm-6">
							<img src="images/istockphoto3.jpg" class="girl img-fluid" width="500" height="300" alt="" />
							<img src="images/home/pricing.png" class="pricing" alt="" />
						</div>
					</div>
					
				</div>
				
				<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			
		</div>
	</div>
</div>
</section><!---------------------------- /slider ------------------------------->
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"><!----------------- left-sidebar-col ------------------>
			<div class="left-sidebar">
				
				<div class="price-range"><!--price-range-->
				<h2>Price Range</h2>
				<div class="well text-center">
					<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
					<b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
				</div>
				</div><!--/price-range-->
				
				<div class="shipping text-center"><!--shipping-->
				<img src="images/home/shipping.jpg" alt="" />
				</div><!--/shipping-->
				
			</div>
			</div><!----------------- left-sidebar-col ------------------>
			<div class="col-sm-9 padding-right"><!----------------- right-sidebar-col ------------------>
			
			
			<div class="category-tab"><!--category-tab-->
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<?php
					require_once('Admin/include/config.php');
					$sql=mysqli_query($conn,"select id,category_name  from pro_categories");
					while($row=mysqli_fetch_array($sql))
					{
					?>
					<li><a  id="<?php echo $row['id'];?>" class="text-warning cat_product">
						<?php echo $row['category_name'];?>
					</a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade active in" id="tshirt" >
					<div id="cat_product_display">
						
					</div>
				</div>
				
				
			</div>
			</div><!--/category-tab-->
			
			<div class="recommended_items"><!--recommended_items-->
			<h2 class="title text-center">recommended items</h2>
			<section class="section">
	                   	<div  class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="3">
	   
<?php

include('database_connection.php');

$query = "SELECT * FROM `pro_products`";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
foreach($result as $row)
	{
?>



		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">
	       <a href="product_details.php?pid=<?php echo $row["id"]; ?>">		
			<img src="admin/img/<?php echo $row['product_image']; ?>" class="img-fluid" width="200"
                  height="180" /><br />
              </a>
            	<h4 class="text-info"><?php echo $row['product_name']; ?></h4>
            	<h4 class="text-danger">Rs <?php echo $row["product_price"]; ?></h4>
            	<input type="text" name="quantity" id="quantity<?php echo $row['id']; ?>" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name<?php echo $row['id']; ?>" value="<?php echo $row['product_name']; ?>" />
            	<input type="hidden" name="hidden_price" id="price<?php echo $row['id']; ?>" value="<?php echo $row['product_price']; ?>" />
            	<input type="button" name="add_to_cart" id="<?php echo $row['id']; ?>" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
									
			</div>
			</div>
		</div>
<?php } }?>

	
			                   	</div>
	                   </section>
			</div><!--/recommended_items-->
			
			</div><!----------------- /right-sidebar-col ------------------>
		</div>
	</div>
</section>

<?php require_once('include/footer.php')?>



