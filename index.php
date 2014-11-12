<?php
if(file_exists("includes/config.php"))
{
	include_once("includes/config.php");
}
else
{
	header('Location: install.php');
}
?>

<?php 
if(isset($_SESSION['cart']))
{
	echo "<div id='cart'><a id='cart' href='checkout.php'>".count($_SESSION['cart']);
	if(count($_SESSION['cart']) > 1)
	{
		echo " items";
	}
	else
	{
		echo " item";
		echo "</a></div>";
	}
}
else
{
	$_SESSION['cart'] = array();
	echo "<div id='cart'>0</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title><?php echo SITETITLE; ?></title>
<?php include('includes/header.php')?>
<meta name="generator" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
		<link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
		<link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<!-- CSS code from Bootply.com editor -->

<style type="text/css">
/*
A custom Bootstrap 3.1 theme from http://bootply.com\

This CSS code should follow the 'bootstrap.css'
in your HTML file.

license: MIT
author: bootply.com
*/

body {
padding-top:70px;
}

.productsrow {
-moz-column-width: 18em;
-webkit-column-width: 18em;
-moz-column-gap: 1em;
-webkit-column-gap: 1em;
}

.menu-category {
display: inline-block;
margin-bottom:  0.25rem;
padding:  1rem;
width:  100%;
}

.product-image {
width: 100%;
}

.product {
padding-top:22px;
}

.btn-product {
background-color:#222;
	color:#eee;
	border-radius:0;
}

.yellow {
color:yellow;
text-shadow:#ccc 1px 1px 0;
}

/* end custom CSS */
</style>
</head>

<!-- HTML code from Bootply.com editor -->

<body  >

<!--template-->
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container" style="">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo PATH;?>"><?php echo SITETITLE;?></a>
		</div>
				<div class="collapse navbar-collapse" style="">
				<ul class="nav navbar-nav">
						<li class="active"><a href="#" class="" style="">Explore</a>

								</li>
								<li><a href="#" class="">Looks</a>
										</li>
										<li><a href="#" class="">Style</a>

												</li>
												<li><a href="#" class="">About</a>

												</li>
												<li><a href="<?php echo PATHADMIN;?>login.php" class="" contenteditable="false">Sign in</a>

												</li>
												</ul>
												</div>
												<!--/.nav-collapse -->
												</div>
												</div>
												<div class="container">
												<div class="col-md-12">
														<div class="center-block text-center">
														<h1>E-Commerce Template</h1>
														<p class="lead">Get Your Style On</p>
														</div>
														<div class="container">
																<div class="menu row">
																		<div class="product col-sm-6">
																		<a href="#"><img class="img-responsive" src="/assets/example/ec_guy.jpg"><i class="btn btn-product fa fa-star"></i></a>
																				<hr>
																				<h2>Denim Jacket</h2>
																				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
																				Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
																				dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
																				Aliquam in felis sit amet augue.</p>
																				<hr>
																				<h2 class="text-right">$39</h2>
																				<button class="btn btn-primary btn-lg ">Add to Cart</button>
																				<hr>
																				 

																				<ul class="nav nav-tabs">
																				<li class="active"><a data-toggle="tab" href="#reviews">Reviews</a></li>
																				<li><a data-toggle="tab" href="#details">Details</a></li>
																				<li><a data-toggle="tab" href="#sizing">Sizing</a></li>
																				</ul>

																				<div class="tab-content">
																				<div class="tab-pane active" id="reviews">

																				<h4>Buyer Reviews</h4>
																						<ul class="list-unstyled">
																						<li class="clearfix">(Mike R.) I bought this last month before a.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
																						<li class="clearfix">(Karen) The size of this jacket was a little larger.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
																						<li class="clearfix">(CAS) I love this jacket. I purchased this as part..  <i class="fa fa-star fa-2x yellow pull-right"></i><i class="fa fa-star fa-2x yellow pull-right"></i></li>
																						<li class="clearfix">(William D.) Great value with cool style. If you want.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
																						</ul>

																								</div>
                      <div class="tab-pane" id="details"><h4>Product Informartion</h4></div>
                      <div class="tab-pane" id="sizing"><h4>Size Chart</h4></div>
                      		</div>


                      		</div>
                      		<div class="col-sm-6">
                      		<div class="productsrow">
                        <div class="product menu-category">
                        <div class="menu-category-name list-group-item active">Accessories</div>
                        <div class="product-image">
                        <img class="product-image menu-item list-group-item" src="/assets/example/ec_belt.jpg">
                        </div> <a href="#" class="menu-item list-group-item">Belt<span class="badge">£28</span></a>

                        		</div>
                        		<div class="product menu-category">
                        		<div class="menu-category-name list-group-item active">Jeans</div>
                            <div class="product-image">
                            <img class="product-image menu-item list-group-item" src="/assets/example/ec_jeans.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Dark Blue Jeans<span class="badge">$80</span></a>

                            </div>
                            <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Pants</div>
                            <div class="product-image">
                            		<img class="product-image menu-item list-group-item" src="/assets/example/ec_pants.jpg">
                            		</div> <a href="#" class="menu-item list-group-item">Light Grean Chinos<span class="badge">$59</span></a>

                            		</div>
                            		<div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Denim</div>
                            <div class="div-image">
                            		<img class="product-image menu-item list-group-item" src="/assets/example/ec_jacket.jpg">
                            		</div> <a href="#" class="menu-item list-group-item">Denim Jacket<span class="badge">$56</span></a>

                            		</div>
                            				<div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Accessories</div>
                            <div class="product-image">
                            <img class="product-image menu-item list-group-item" src="/assets/example/ec_socks.jpg">
                            		</div> <a href="#" class="menu-item list-group-item">Socks<span class="badge">$56</span></a>

                            		</div>
                            				<div class="product menu-category">
                            						<div class="menu-category-name list-group-item active">Belt</div>
                            						<div class="product-image">
                            								<img class="product-image menu-item list-group-item" src="/assets/example/ec_belt.jpg">
                            								</div> <a href="#" class="menu-item list-group-item">Brown Belt<span class="badge">£18</span></a>

                            										</div>
                            										<div class="product menu-category">
                            												<div class="menu-category-name list-group-item active">Layer</div>
                            												<div class="product-image">
                            												<img class="product-image menu-item list-group-item" src="/assets/example/ec_sweater.jpg">
                            												</div> <a href="#" class="menu-item list-group-item">Shawl Neck<span class="badge">46</span></a>

                            														</div>
                            																</div>
                            																</div>
                            																</div>
                            																<!--/row-->
                            																</div>
                            																<!--/container-->
                            																</div>
</div>
<!--/template-->

        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>







        <!-- JavaScript jQuery code from Bootply.com editor  -->

        <script type='text/javascript'>

        $(document).ready(function() {



        });

        </script>
        <?php include('includes/footer.php')?>
</body>
</html>