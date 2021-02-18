
<?php
require_once('Admin/include/config.php');
require_once('database_connection.php');
//session_start();
require_once('include/header.php');
?>
<div class="container">
	<h2 class="text-center title">Order Summary</h2>
                

				<span id="cart_details_summary" class="cart_details"></span>
				<div align="right">
					<!--<a href="#" class="btn btn-primary" id="check_out_cart">-->
					
				
				</div>
			<h2 class="title">Select Payment method</h2>
			<div id="collapseOne" class="panel-collapse collapse in">
											<!-- panel-body  -->
											<div class="panel-body">
		 										<form action="login.php" method="post">
													<input type="radio" name="paymethod" value="COD" checked="checked"> COD
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="radio" name="paymethod" value="CARD"> Debit / Credit card <br /><br />
													<button type="submit"  name="Psubmit" class="btn btn-success">Place order</button>
													
												</form>
											</div>
											<!-- panel-body  -->
											</div>
		</div>



<?php 
require_once('include/footer.php');
?>