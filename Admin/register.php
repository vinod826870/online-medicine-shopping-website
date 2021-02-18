<?php require_once('include/header.php');?>
<!-- Register Content -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-9">
      <div class="card shadow-sm my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
              <div class="login-form">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Register</h1>
                </div>
                <form action="admin.php" method="POST">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first_name" id="exampleInputFirstName" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="exampleInputLastName" placeholder="Enter Last Name">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Register">
                  </div>
                  <hr>
                  <a href="index.html" class="btn btn-google btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="font-weight-bold small" href="login.php">Already have an account?</a>
                </div>
                <div class="text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Register Content -->