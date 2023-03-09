<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$conn=mysqli_connect($servername, $username, $password);
	if($conn==false)
		die("connection failed".mysql_error());
	$db=mysqli_select_db($conn,'Bakery');
	if($db==false)
		echo "the db does not exist".mysql_error()."<br>";
?>