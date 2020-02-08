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
require_once("includes/config.php");
$db_handle = new Config();
$query = $_GET['query']; 
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
.isDisabled {
  color: currentColor;
  cursor: not-allowed;
  opacity: 0.5;
  text-decoration: none;
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
    width: 90%;
}
img {
    border-radius: 20px;
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
    background: white;
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
								<li><a href="about.php">About</a></li>					
								
								<li><a href="gallery.php">Gallery</a></li>	
								<li><a href="contact.php">Contact</a></li>
								<li>
			<?php
				if(isset($_SESSION["username"]))
				{
					echo("<li><a href='profile.php'>Settings</a></li>
					<li><a href='pizzacart.php'>Cart<span class='glyphicon glyphicon-shopping-cart'></span></a></li>
					
			        
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
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<form class="example" action="search.php" style="margin:auto;max-width:300px" method="get">
                             <input type="text" placeholder="Search.." name="query">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
								
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>	
				<!--navigation-->
			</div>
			</div>
			</div>
			<br>
			<br>
			<br>
			
			<h3 class="title">SEARCH RESULTS</h3>
			<br>
			<br>
		
			<?php
    //$query = $_GET['query']; 
    // gets value sent over search form
     
    $product_array = $db_handle->runQuery("SELECT * FROM  products 
            WHERE (`name` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%') OR (`details` LIKE '%".$query."%')");
         if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
			?>
			<center>
			<br>
		<div class="product-item">
			<form method="post" action="veg.php?action=add&code=<?php echo $product_array[$key]["id"]; ?>">
			<div class="product-image">
			<div id="img"><img  id="img" height="300" width="300" src="<?php echo $product_array[$key]["image1"]; ?>"></div></div>
			<div><strong><h2><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div><strong><?php echo $product_array[$key]["category"]; ?></strong></div>
			<strong><div class="product-price"><?php echo "₹".$product_array[$key]["price"]; ?></div>
			<div><input  name="quantity" value="1" size="2" /><br><br>
			<?php
			if(isset($_SESSION["username"]))
				{
					echo("<input type='submit' value='Add to cart' class='btnAddAction' /></div>");
				}
				else
				{
					echo("
					<input  value='login to add to cart' class='isDisabled' class='btnAddAction' /></div>
					");
				}
				?>
			<br>
			</form>
		</div></center>
		<?php
		}
	}
	else  {
		echo("<h3 class='title'>NO SEARCH RESULTS</h3>");
		
	}


	?>
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
	  
