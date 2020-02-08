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
	if(isset($_SESSION['email']))
	{
		$mail = $_SESSION['email'];	
	}
require_once("includes/config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Yummy Pizza a Food Category </title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pizza Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
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
    width: 100%;
}
</style>

<style>
.button {
    position: relative;
    background-color: #4CAF50;
    border: none;
    font-size: 28px;
    color: #FFFFFF;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
</style>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
	height:60px;
	width: 150px;
	margin:200px
    font-size: 16px;
    border: none;
}
.dropbtn{border-radius: 12px;}
.dropdown {
    position: relative;
    display: inline-block;
}
.container img {
    width: 100%;
    height: auto;
	}
.dropdown-content {
    display: none;
    position: absolute;
	text-color:blue
    background-color: green;
    min-width: 200px;
    box-shadow: 10px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: blue;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #4CAF50}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: orange;
}
</style>
<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: yellow;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: orange;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
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
<script>
	$(document).ready(function () {
	    size_li = $("#myList li").size();
	    x=1;
	    $('#myList li:lt('+x+')').show();
	    $('#loadMore').click(function () {
	        x= (x+1 <= size_li) ? x+1 : size_li;
	        $('#myList li:lt('+x+')').show();
	    });
	    $('#showLess').click(function () {
	        x=(x-1<0) ? 1 : x-1;
	        $('#myList li').not(':lt('+x+')').hide();
	    });
	});
</script>
</head>
<body>

	<!--banner-->
	<div class="banner">
		<div class="banner-info">
			<div class="container">
				<div class="logo">
					<div class="ribbon">
					
						<div class="ribbon-fold"><h1> <a href="index.php"> Yummy Pizza</a></h1></div>
					</div>
					<br>
					
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
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="veg.php">menu</a></li>	
								<li><a href="about.php">About</a></li>					
								
								<li><a href="gallery.php">Gallery</a></li>	
								<li><a href="contact.php">Contact</a></li>
								<li>
			<?php
				if(isset($_SESSION["username"]))
				{
					echo("<li><a href='profile.php'>Settings</a></li>
					<li><a href='pizzacart.php'>Cart
          <span class='glyphicon glyphicon-shopping-cart'></span>
        </a></li>
					
			        
					<li><a href='signin/login/logout.php'>Logout</a></li>");
				}
				else
				{
					echo("
					<li><a href='signin/index.php'>Sign Up</a></li>
					<li><a href='signin/index.php'>Login</a></li>
					");
				}
				echo("hi");
				
			?>
				
			
		                    </li>   						
							</ul>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<center><form class="example" action="search.php" style="margin:auto;max-width:300px" method="get">
                             <input type="text" placeholder="Search.." name="query">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
							</center>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>	
				<!--navigation-->
			</div>
		
	
	<!--//banner-->
	<!--banner-bottom-->
	
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
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
	

	<!--<center><a href="signin\index.php"><button class="button" style="vertical-align:middle" align="right"><span>Sign up / login </span></button></a>
	</center>-->
	<br>
	<br>
	<br>
	
	
	</div>
	</div>
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-text">
				<h3>Tasty Pizza</h3>
				<p>Special Offer to day</p>
				<a href="subs.php" class="btn btn-1 btn-1b">More</a>
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
	
	<!--//banner-bottom-->
	<!--services-->
	<!--<div class="services">
		<div class="container">
			<h3 class="title">Services</h3>
			<div class="servc-grids">
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!--menu-->
	<div class="menu">
		<div class="container">
		<!--<img src="C:\Users\sbmpc.student\Desktop\web\images\img7.jpg" alt="Snow" style="width:100%">-->
			<div class="menu-tag">
			<form>
				<!--<input type="button" class="button" value="MENU" name="menu" id="menu">-->
				<div class="dropdown">
  <a href="veg.php"><button class="dropbtn"><i><b>MENU</i></button></a>
 
</div>
				</form>
			</div>
			</div>
			<br>
			<br>
			<br>
			<div class="load_more">	
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>VEG EXTRAVAGANZA.</h4>
											<h6>Black Olives I Onion I Crisp Capsicum
I Mushroom I FreshTomato I Golden Corn I Extra Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 50</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4> CLOUD 9.</h4>
											<h6>Onion I Tomato I Babycorn I Paneer
I Crisp Capsicum I Jalapeno.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 62</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>VEGGIE PARADISE.</h4>
											<h6>BabyCorn I Black Olives I Crisp Capsicum
I Red Paprika.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 25</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>MEXICAN GREEN WAVE.</h4>
											<h6>Onion I Crisp Capsicum I Fresh Tomato
I Jalapeno sprinkled with exotic Mexican Herbs</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 30</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>NON-VEG-SUPREME.</h4>
											<h6>Black Olives I Onion I Crisp Capsicum
I Mushroom I Hot n Spicy Chicken I Chunky Chicken.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 50</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4> CHICKEN FIESTA.</h4>
											<h6>Chunky Chicken I Spicy Chicken
I Onion I Capsicum.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 62</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>CHEF'S CHICKEN CHOICE.</h4>
											<h6>chicken rashers I Black Olives I Crisp Capsicum
I Red Paprika.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 25</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>  CHICKEN GOLDEN DELIGHT.</h4>
											<h6>Golden Corn I Double Barbeque Chicken
I Extra Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs 30</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div> 
						</div>	
					</li>
					<li><div class="l_g">
							<div class="l_g_r g_r">
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Voluptate cillum fugiat.</h4>
											<h6>Cheese, tomato, mushrooms, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS50</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Metus varius laoreet.</h4>
											<h6>Chicken, mozzarella cheese, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS62</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Donec sodales magna.</h4>
											<h6>Tuna, Sweetcorn, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS25</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Saugue velit cursus.</h4>
											<h6>Pineapple, Minced Beef, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS30</h4>
											<h6>(inclusive all taxes)</h6>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Arcu pede enim justo.</h4>
											<h6>Tuna, Sweetcorn, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"></span>
										</div>
										<div class="menu-text-right">
											<h4>RS50</h4>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Cras dapibussemper nisi.</h4>
											<h6>Pineapple, Minced Beef, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS62</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Quam semper libero.</h4>
											<h6>Cheese, tomato, mushrooms, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Nam eget dui Etiam.</h4>
											<h6>Chicken, mozzarella cheese, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					<li><div class="l_g">
							<div class="l_g_r g_r">
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Voluptate cillum fugiat.</h4>
											<h6>Cheese, tomato, mushrooms, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS50</h4>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Metus varius laoreet.</h4>
											<h6>Chicken, mozzarella cheese, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS62</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Donec sodales magna.</h4>
											<h6>Tuna, Sweetcorn, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Saugue velit cursus.</h4>
											<h6>Pineapple, Minced Beef, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Arcu pede enim justo.</h4>
											<h6>Tuna, Sweetcorn, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS50</h4>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Cras dapibussemper nisi.</h4>
											<h6>Pineapple, Minced Beef, Cheese.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS62</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Quam semper libero.</h4>
											<h6>Cheese, tomato, mushrooms, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>RS25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Nam eget dui Etiam.</h4>
											<h6>Chicken, mozzarella cheese, onions.</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>Rs5030</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>	
					</li>
				</ul>
				<!--<div id="loadMore">Load more</div>
				<div id="showLess">Show less</div>-->
			</div>
		</div>
	
	<!--//menu-->
	<!-- testimonial -->
	<div class="testimonial">
		<!-- container -->
		<div class="container">
			<h3 class="title">Feedback About us</h3>
			<!-- banner-text Slider starts Here -->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
				// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});	
				});
			</script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="testimonial-grids">
							<div class="testimonial-left">
								<img src="images/t1.jpg" alt="" />
							</div>
							<div class="testimonial-right">
								<h5>Mary Wilson</h5>
								<p><span>"</span> Nice pizza good quality <span>"</span>
								</p>
							</div>
							<br>
							<div class="clearfix"> </div>
						</div>
					</li>

					<li>
						<div class="testimonial-grids">
							<div class="testimonial-left">
								<img src="images/t3.jpg" alt="" />
							</div>
							<div class="testimonial-right">
								<h5>Lora  Alance</h5>
								<p><span>"</span> delivery system is very good <span>"</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonial-grids">
							<div class="testimonial-left">
								<img src="images/t2.jpg" alt="" />
							</div>
							<div class="testimonial-right">
								<h5>David Smith</h5>
								<p><span>"</span>good pizza taste<span>"</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //testimonial -->
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
					<li><a href="signin/admin/index.php">admin</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-right">
				<p> © 2016 Pizza . All rights reserved  </p>
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
			<div class="col-md-3 footer-right">
         <h4>Subscribe Newsletter</h4>
		  <br>
          <div class="newsletter-form">
            <form action="SendMail/email.php" method="get">
              <div class="form-group">
                <input type="text" name="name" class="form-control newsletter-input" required placeholder="Name" /><br>
				<input type="text" name="email" class="form-control newsletter-input" required placeholder="Email" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
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