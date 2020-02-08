<?php
session_start();
//&& basename(__FILE__)!="index.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Cart :: w3layouts</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/hover.css" rel="stylesheet" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<!---- tabs---->
	<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />

</head>
<body>
	<!---->
	<div class="header">
		<div class="container">
			<div class="header-left">
				<div class="top-menu">
					<ul>
						<li class="active"><a href="index.php">HOME</a></li>
						<li><a class="scroll" href="woman.php">COFFEE PAINTING</a></li>
						<li><a class="scroll" href="man.php">QUILLING</a></li>			 
					</ul>
				</div>
			</div>
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
			<div class="header-right">
				<div class="currency">			 
					<a href="#"><i class="c1"></i></a>
					<a class="active" href="#"><i class="c2"></i></a>
					<a href="#"><i class="c3"></i></a>
					<a href="#"><i class="c4"></i></a>
				</div>		 
				<div class="signin">
					<div class="cart-sec">
						<a href="cart.php"><img href="cart.php" src="images/cart.png" alt=""/>(0)</a></div>
						<?php
//&& basename(__FILE__)!="index.php"
						if(isset($_SESSION['username'])==TRUE)
						{
							?>
							<ul>
								
								<li><a href="login/logout.php"> LOGOUT</a></li>
							</ul>
							<?php
						}
						else
						{
							?>
							<ul>
								<li><a href="registration.php">REGISTRATION</a> <span>/<span> &nbsp;</li>
									<li><a href="login.php"> LOGIN</a></li>
								</ul>			 
								<?php
							}
							
							?>			 
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!---->
			<div class="cart">
				<div class="container">
					<div class="cart-info">
						<h3>There are no items in the cart(0)</h2>
							<p>Vestibulum rhoncus nibh quis dui fermentum iaculis In consequat dolor in lorem egestas ultrices.</p>
							<a href="man.php">CONTINUE SHOPPING</a>
						</div>
						<div class="cart-list">
							<h3>Categories</h3>
							<div class="col-md-4 carting">			
								<ul>
									<li><a href="#">Always free from repetition</a></li>
									<li><a href="#">Vestibulum rhoncus nibh quis dui fermentum iaculis.</a></li>
									<li><a href="#">The standard chunk of Lorem Ipsum</a></li>
									<li><a href="#">In consequat dolor in lorem egestas ultrices.</a></li>
									<li><a href="#">Aliquam sollicitudin eros id luctus consequat.</a></li>
									<li><a href="#">Always free from repetition</a></li>
								</ul>	
							</div>
							<div class="col-md-4 carting">			
								<ul>
									<li><a href="#">Always free from repetition</a></li>
									<li><a href="#">Vestibulum rhoncus nibh quis dui fermentum iaculis.</a></li>
									<li><a href="#">The standard chunk of Lorem Ipsum</a></li>
									<li><a href="#">In consequat dolor in lorem egestas ultrices.</a></li>
									<li><a href="#">Aliquam sollicitudin eros id luctus consequat.</a></li>
									<li><a href="#">Always free from repetition</a></li>
								</ul>	
							</div>
							<div class="col-md-4 carting">			
								<ul>
									<li><a href="#">Always free from repetition</a></li>
									<li><a href="#">Vestibulum rhoncus nibh quis dui fermentum iaculis.</a></li>
									<li><a href="#">The standard chunk of Lorem Ipsum</a></li>
									<li><a href="#">In consequat dolor in lorem egestas ultrices.</a></li>
									<li><a href="#">Aliquam sollicitudin eros id luctus consequat.</a></li>
									<li><a href="#">Always free from repetition</a></li>
								</ul>	
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!---->
				<div class="footer">
					<div class="container">
						<p>Copyright &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
						<div class="social">
							<a href="#"><span class="icon1"></span></a>
							<a href="#"><span class="icon2"></span></a>
							<a href="#"><span class="icon3"></span></a>
							<a href="#"><span class="icon4"></span></a>
						</div>
						<div class="clearfix"></div>
					</div>	 
				</div>
				<!---->		
			</body>
			</html>