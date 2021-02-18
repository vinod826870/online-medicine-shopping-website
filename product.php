


<?php require_once('include/header.php')?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
					<?php
					require_once('Admin/include/config.php');
					$sql=mysqli_query($conn,"select id,category_name  from pro_categories");
					while($row=mysqli_fetch_array($sql))
					{
					?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
							<a id="<?php echo $row['id'];?>" class="text-warning cat_product">
								<?php echo $row['category_name'];?>
							</a>
							</h4>
						</div>
					</div>
					
					<?php } ?>
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
			</div>
			</div><!--/category-products-->
			
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
				<h2 class="title text-center">Select Category</h2>
				<div class="col-sm-12">
                    
					<div id="cat_product_display">
						

					</div>

					
					
					
					
				</div>
				
				
				
				
				
				</div><!--features_items-->
				
			</div>
		</div>
	</div>
</section>
<?php require_once('include/footer.php')?>