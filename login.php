<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home | E-Shopper</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		</head><!--/head-->
		<body>
			<section id="form"><!--form-->
			<div class="container">
				  <?php 
				  error_reporting(0);
				  session_start();
				  if(strlen($_SESSION['user_id']))
                            {  
                            	header("location:checkout2.php"); ?>

                            	<?php }
                            else{ ?>
				<?php if(isset($_GET['message']) && $_GET['message']==1){ ?>
				<div class="alert alert-success">
					<button type="button" class="close pl-1" data-dismiss="alert">×</button>
					<strong>You Are Successfuly Register!!</strong>
				</div>
				<?php } ?>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<?php
						if (isset($_GET['err']) && $_GET['err']==1){ ?>
						<p class="text-danger">Email and Password is incorrect.</p>
						<?php } ?>
						<form action="login_check.php" method="POST">
							
							<input type="email" name="email" placeholder="Email Address" />
							<input type="text" name="password" placeholder="Enter Your Password" />
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button type="submit" name="Login" class="btn btn-default">Login</button>
						</form>
						</div><!--/login form-->
					</div>
					<div class="col-sm-1">
						<h2 class="or">OR</h2>
					</div>
					<div class="col-sm-4">
						<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="signup.php" method="POST" onsubmit="return validation()">
							<div class="form-group">
								<input type="text" name="name" id="name" placeholder="Name"/>
								<span id="name_error" class="text-danger font-weight-bold"></span>
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" placeholder="Email Address" />
								<span id="email_error" class="text-danger font-weight-bold"></span>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" placeholder="Password"/>
								<span id="password_error" class="text-danger font-weight-bold"></span>
							</div>
							<div class="form-group">
								<input type="text" name="number" id="number" placeholder="Enter Your Number">
								<span id="number_error" class="text-danger font-weight-bold"></span>
							</div>
							<div class="form-group">
								<textarea name="address" id="address" placeholder="Enter Your Shipping Address"></textarea>
								<span id="address_error" class="text-danger font-weight-bold"></span>
							</div>
							<br><br>
							<input type="submit" class="btn btn-default" value="Signup">
						</form>
						</div><!--/sign up form-->
					</div>
				</div>
			</div>
			</section><!--/form-->
		<?php } ?>
		
			<script>
			function validation(){
			var flag = true;
			var name = document.getElementById('name').value;
			var email= document.getElementById('email').value;
			var password= document.getElementById('password').value;
			var number= document.getElementById('number').value;
			var address= document.getElementById('address').value;


			var namecheck = /^[A-Za-z. ]{3,30}$/;
			
			var emailcheck = /^[A-Za-z0-9+_.-]+@(.+)$/;


			var passwordcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;





			
			var numbercheck = /^[789][0-9]{9}$/;





			var addresscheck = /^[#.0-9a-zA-Z\s,-]+$/;
			if (!name.match(namecheck)) {
			document.getElementById('name_error').innerHTML = "** username is invalid";
			flag = false;
			}else{
			document.getElementById('name_error').innerHTML = "";
			}
			if (!email.match(emailcheck)) {
			document.getElementById('email_error').innerHTML = "** Email is invalid ";
			flag = false;
			}else{
			document.getElementById('email_error').innerHTML = "";
			}
			if (!password.match(passwordcheck)) {
			document.getElementById('password_error').innerHTML = "**  password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character ";
			flag = false;
			}else{
			document.getElementById('password_error').innerHTML = "";
			
			}
			if (!number.match(numbercheck)) {
			document.getElementById('number_error').innerHTML = "** Mobile Number is invalid ";
			flag = false;
			}else{
			document.getElementById('number_error').innerHTML = "";
			
			}
			if (!address.match(addresscheck)) {
			document.getElementById('address_error').innerHTML = "address is incorrect eg. #1, North Street, Chennai - 11";
			flag = false;
			}else{
			document.getElementById('address_error').innerHTML = "";
			
			}
			if(flag == true){
			return true;
			}else{
			return false;
			}
			}
			
			</script>
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			
		</body>
	</html>