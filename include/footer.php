<footer id="footer"><!--Footer-->
<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="companyinfo">
					<h2><span>e</span>-medicine</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="images/home/iframe1.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
				
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="images/home/iframe2.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
				
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="images/home/iframe3.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
				
				<div class="col-sm-3">
					<div class="video-gallery text-center">
						<a href="#">
							<div class="iframe-img">
								<img src="images/home/iframe4.png" alt="" />
							</div>
							<div class="overlay-icon">
								<i class="fa fa-play-circle-o"></i>
							</div>
						</a>
						<p>Circle of Hands</p>
						<h2>24 DEC 2014</h2>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="address">
					<img src="images/home/map.png" alt="" />
					<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer-widget">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Service</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Online Help</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Order Status</a></li>
						<li><a href="#">Change Location</a></li>
						<li><a href="#">FAQ’s</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Quock Shop</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Homeopathy</a></li>
						<li><a href="#">Vitamins</a></li>
						<li><a href="#">Ayurveda</a></li>
						<li><a href="#">Health Foods</a></li>
						<li><a href="#">Healthcare Devices</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Policies</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privecy Policy</a></li>
						<li><a href="#">Refund Policy</a></li>
						<li><a href="#">Billing System</a></li>
						<li><a href="#">Ticket System</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>About Shopper</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Company Information</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Store Location</a></li>
						<li><a href="#">Affillate Program</a></li>
						<li><a href="#">Copyright</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-sm-offset-1">
				<div class="single-widget">
					<h2>About Shopper</h2>
					<form action="#" class="searchform">
						<p>Get the most recent updates from <br />our site and be updated your self...</p>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<p class="pull-left">Copyright © 2013 E-MEDICINE Inc. All rights reserved.</p>
			<p class="pull-right">Designed by <span><a href="#">Vinod</a></span></p>
		</div>
	</div>
</div>

</footer><!--/Footer-->


<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>

<script src="js/main.js"></script>

<script>  
$(document).ready(function(){

	load_product();
	load_cart_data_order_summary();

	load_cart_data();
    
	function load_product()
	{
		$.ajax({
			url:"fetch_item.php",
			method:"POST",
			success:function(data)
			{
				$('.display_item').html(data);
			}
		});
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}
/* ------------------->  checkout Order Summary table data <-----------------------------*/
	function load_cart_data_order_summary()
	{
		$.ajax({
			url:"fetch_cart_summary.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details_summary').html(data.cart_details_summary);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);

			}
		});
	}
/* ------------------->  checkout Order Summary remove code <-----------------------------*/
	$(document).on('click', '.delete_summary', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
					location.reload();
				}
			});
		}
		else
		{
			return false;
		}
	});


/* ------------------->  /checkout Order Summary table data <-----------------------------*/

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	 $(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data_order_summary();
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
					//location.reload();
				}
			});
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});





    
});


$(document).on('click','.cat_product', function(){
	var cat_product = $(this).attr("id");
	$.ajax({

		url : 'cat_product_ajax.php',
		method: 'GET',
		data: {cat_product:cat_product},
		success : function(data){

			$('#cat_product_display').html(data);

		}

	});

});

</script>
<script>

// magnific popup
	$(document).ready(function() {
  $('.gallery').magnificPopup({
  	type:'image',
  	gallery: {
  		enabled: true
    }
  });
});
$('.homepage-owl-carousel').each(function(){ 

    var owl = $(this);
    var  itemPerLine = owl.data('item');
    if(!itemPerLine){
        itemPerLine = 3;
    }
    owl.owlCarousel({
        navigation : true,
        pagination : false,
        nav:true,

        navigationText: ["prev", "next"],
        loop:true,
	dots:false,
	autoplayHoverPause:true,
	smartSpeed:650,autoplay:true,
        responsive:{
		0:{items:1},
		480:{items:1,},
		768:{items:2,},
		992:{items:3}
  }
 
    });
     $('.owl-prev').html('<i class="fa fa-chevron-left"></i>');
 $('.owl-next').html('<i class="fa fa-chevron-right"></i>');
});
</script>





</body>
</html>