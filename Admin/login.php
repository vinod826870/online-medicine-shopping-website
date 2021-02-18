<?php require_once('include/header.php');?>
<!-- Login Content -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-4">
      <div class="card shadow-sm my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
              <div class="login-form">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login</h1>
                </div>
                <?php
                if (isset($_GET['err']) && $_GET['err']==1){ ?>
                <p class="text-danger">Email and Password is incorrect.</p>
                <?php } ?>
                <form action="login_check.php" method="POST" class="user">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Remember
                      Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                  </div>
                  
                </form>
                
                <!-- <div class="text-center">
                  <a class="font-weight-bold small" href="register.php">Create an Account!</a>
                </div> -->
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