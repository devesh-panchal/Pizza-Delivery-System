<?php
$serverName = "localhost";                                        //server name
$userName = "root";                                              //username phpmyadmin
$pass = "";                                                     //password for database
$dbName = "yummypizza";                                        //database name
$con = mysqli_connect($serverName,$userName,$pass,$dbName);	  // to connect database
	if(!$con)
	{
		echo "".mysql_error($con);                          //display error if connetion is not set
	}
	function runQuery($query) {
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
?>