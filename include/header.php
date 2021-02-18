<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | E-MEDICINE</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link href="css/owl.transitions.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <style>
        .inner-left-md{
        padding-left: 60px;
        }
         .popover
        {
            width: 100%;
            max-width: 800px;
        }
        /* ---------------->  shopping cart clear button css <-----------------  */
        .btn-default{
            margin-top: 16px;
        }
        .pr-5{
           margin-right: 60px;
        }

        /* ---------------->  /shopping cart clear button css <-----------------  */
        /* ---------------->  owlCarousel arrows css <-----------------  */
        .fa-chevron-left {
    position: absolute;
    top: 50%;
    left: 0%;
    font-size: 40px;
    color: 
    #C2C2C1;
}
 .fa-chevron-right {
    position: absolute;
    top: 50%;
    right: 0%;
    font-size: 40px;
    color: 
    #C2C2C1;
}

/* ------------->  /owlCarousel arrows css <---------------------  */
        </style>
        </head><!--/head-->
        <body>
            <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 7021447081</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> vinod826870@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div><!--/header_top-->
            
            <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 clearfix">
             
            
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse_cart">
                            <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="sr-only">Menu</span>
                        
                        </button>
                        <a class="navbar-brand" href="/">E-MEDICINE</a>
                    </div>
                    
                    <div id="navbar-cart" class="navbar-collapse collapse col-md-4 collapse_cart">
                        <ul class="nav navbar-nav">
                            <li>
                                <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    <span class="badge"></span>
                                    <span class="total_price">Rs 0.00</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
            <div id="popover_content_wrapper" style="display: none">
                <span id="cart_details"></span>
                
                <div align="right">
                    <form action="Checkout.php" method="post">
                    <button class="btn btn-primary">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Check out
                    </button>
                     </form>
                    <a href="#" class="btn btn-default" id="clear_cart">
                    <span class="glyphicon glyphicon-trash"></span> Clear
                    </a>
                </div>
           
            </div>
        
                    </div>
                    <div class="col-md-8 clearfix">
                        <div class="shop-menu clearfix pull-right">
                            <ul class="nav navbar-nav">
                                <?php
                                error_reporting(0);
                                //session_start();
                                if(strlen($_SESSION['user_id']))
                                { ?>
                                
                                <li><a href="index.php"><i class="fa fa-user"></i> Welcome -<?php echo htmlentities($_SESSION['user_name']);?></a></li>
                                <?php } ?>
                                <!-- <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="order-history.php"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
                                
                            <?php if(strlen($_SESSION['user_id']))
                            {    ?>
                            <li><a href="logout.php"><i class="fa fa-lock"></i>Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="product.php">Products</a></li>
                                <li><a href="order-history.php">Order Details</a></li>
                                <li><a href="Checkout.php">Cart</a></li>
                                <!-- <li><a href="login.php">Login</a></li> -->
                            </ul>
                        </li>
                        <li><a href="contact-us.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div> -->
        </div>
    </div>
    </div><!--/header-bottom-->
    



    </header><!--/header-->