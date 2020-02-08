<?php
	

	if(isset($_SESSION['username']))
	{
		$userName = $_SESSION['username'];	
	}

include 'dbConfig.php';
require_once("includes/config.php");
require_once("includes/orderconfig.php");
include 'Cart.php';
$db_handle = new Config();
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

?>
<?php
if(isset($_POST['submit']))
{

$firstname=$_POST['firstname']; 
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$sql="INSERT INTO  orders(firstname,email,address,city) VALUES(:firstname,:email,:address,:city)";


}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
    .container{padding: 50px;}
    input[type="number"]{width: 30%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
	
	
	
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
<!--checkoutform-->
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.rows {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.containers {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 10px;
}

input[type=texts] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="rows">
  <div class="col-75">
    <div class="containers">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="texts" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="texts" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="texts" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="texts" id="city" name="city" placeholder="New York">

            <!--<div class="rows">
              <div class="col-50">
                <label for="state">State</label>
                <input type="texts" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="texts" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>-->
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        
      
    <br>
	<br>
	<br>
  
  <center>
  <div class="container">
    <h1>Order Preview</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <a type="submit"   href="payment/gateway/index.html"class="btn btn-success orderBtn" name="submit">Payment <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</center><!--href="cartAction.php?action=placeOrder"-->
  </div></form>
  </div>
  
  <br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br>
	<br>