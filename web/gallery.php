<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();

	if(isset($_SESSION['username']))
	{
		$userName = $_SESSION['username'];	
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Pizza a Food Category Flat bootstrap Responsive website Template | Gallery :: w3layouts</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pizza Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/lightbox.css">
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
</head>
<style> 
input[type=text] {
    width: 120px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
	text-color:green;
	text-decoration:bold;
    background-color: white;
	border-color : orange;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 90%;
}
</style>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #4CAF50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  border-radius: 10px;
  width: 200px;
  height:100px;
  text-align: center
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<body>
	<!--banner-->
	<div class="banner about-bnr">
		<div class="banner-info about-bnr-info">
			<div class="container">
				<div class="logo">
					<div class="ribbon">
						<div class="ribbon-fold"><h1> <a href="index.php">Yummy Pizza</a></h1></div>
					</div>
					<h2>Better Ingredients better Pizza</h2>
				</div>			
				<!--navigation-->
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-center cl-effect-14">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>					
								
								<li><a href="gallery.php" class="active">Gallery</a></li>	
								<li><a href="contact.php">Contact</a></li>
								<li>
			<?php
				if(isset($_SESSION["username"]))
				{
					echo("<li><a href='order-pizza.php'>Order Pizza</a></li>
					<li><a href='edit-order.php'>My Cart</a></li>
			
					<li><a href='signin/login/logout.php'>Logout</a></li>");
				}
				else
				{
					echo("
					<li><a href='signin/index.php'>Sign Up</a></li>
					<li><a href='signin/index.php'>Login</a></li>
					");
				}
			?>
				
			
		                    </li>   		
							</ul>	
							
							<form>
								<br>
						        <br>
								<br>
						        <br>
					            <br>
					            <br>
								<input type="text"  align="left" name="search" placeholder="Search..">
						
							</form>
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>	
				<!--navigation-->
			</div>
		<br>
		<br>
	<br>
	<br>
	<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="signin\index.php"><button class="button" style="vertical-align:middle" align="right"><span>Sign up / login </span></button></a>-->
	
	</div>
	</div>
	<!--//banner-->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-text">
				<h3>Tasty Pizza</h3>
				<p>Special Offer to day</p>
				<a href="#" class="btn btn-1 btn-1b">More</a>
			</div>
			<!--welcome-->
			<div class="welcome">
				<h3 class="title">Welcome</h3>
				<p> </p>
				<div class="welcome-info">
					<div class="col-md-6 welcome-grids">
						<div class="welcome-img">
							<img src="images/img1.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="col-md-6 welcome-grids">
						<div class="welcome-img">
							<img src="images/img2.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<p> </p>			
			</div>
			<!--//welcome-->
		</div>
	</div>
	<!-- gallery -->
	<div class="gallery-top">
		<!-- container -->
		<div class="container">
			<h3 class="title">Gallery</h3>
			<div class="gallery-grids-top">
				<div class="gallery-grids">
					<div class="col-md-6 gallery-grid-top">
						<div class="gallery-grid-top-img">
							<a class="example-image-link" href="images/img7.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img7.jpg" alt=""/></a>
						</div>
					</div>
					<div class="col-md-6 gallery-right">
						<div class="gallery-right-grid">
							<div class="col-md-6 gallery-grid-img">
								<a class="example-image-link" href="images/img8.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img8.jpg" alt=""/></a>
							</div>
							<div class="col-md-6 gallery-grid-img">
								<a class="example-image-link" href="images/img9.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img9.jpg" alt=""/></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="gallery-right-grid gallery-right-top-grid">
							<div class="col-md-6 gallery-grid-img">
								<a class="example-image-link" href="images/img10.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img10.jpg" alt=""/></a>
							</div>
							<div class="col-md-6 gallery-grid-img">
								<a class="example-image-link" href="images/img11.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img11.jpg" alt=""/></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids gallery-grids-middle">
					<div class="col-md-4 gallery-grid middle-gallery-grid">
						<a class="example-image-link" href="images/img12.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img12.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid middle-gallery-grid">
						<a class="example-image-link" href="images/img13.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img13.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid middle-gallery-grid">
						<a class="example-image-link" href="images/img9.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img9.jpg" alt=""/></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/img15.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img15.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/img10.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img10.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/img11.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img11.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/img12.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img12.jpg" alt=""/></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<script src="js/lightbox-plus-jquery.min.js"></script>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //gallery -->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<h4>Address</h4>
				<ul>
					<li>New York Restaurant</li>
					<li>3926 Anmoore Road</li>
					<li>New York, NY 10014</li>
					<li>718-749-1714</li>
				</ul>					
			</div>
			<!--<div class="col-md-3 footer-left">
				<h4>Popular</h4>
				<ul>
					<li><a href="#">Proin placerat</a></li>
					<li><a href="#">Ipsum et rutrum</a></li>
					<li><a href="#">Proin semper utr</a></li>
					<li><a href="#">ligula sit amet</a></li>
				</ul>
			</div>-->
			<div class="col-md-3 footer-left">
				<h4>Details</h4>
				<ul>
					<li><a href="about.html">About</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-right">
				<p> © 2016 Pizza . All rights reserved </p>
				<div class="icons">
				<ul>
					<li><a href="#" class="twitter"> </a></li>
					<li><a href="#" class="twitter facebook"> </a></li>
					<li><a href="#" class="twitter chrome"> </a></li>
					<li><a href="#" class="twitter pinterest"> </a></li>
					<li><a href="#" class="twitter linkedin"> </a></li>
				</ul>
			</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>