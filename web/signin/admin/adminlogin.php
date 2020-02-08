<?php
session_start();
include('includes/config.php');

if(isset($_POST['login']) )
{
	
$email=$_POST['email'];
$password=$_POST['password'];
$sql ="SELECT email,password FROM admin WHERE email=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
	echo'if inner';
$_SESSION['alogin']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} 
else{
  
  echo "<script>alert('Invalid Details');</script>";
echo "<script>window.location='./index.php';</script>";
}

}

?>