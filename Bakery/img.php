<?php
	include 'con1.php';
	
	if(isset($_POST['up'])){
		$na=$_POST['iname'];
		$pri=$_POST['pric'];
		$im=$_POST['ph'];
		$co=$_POST['cd'];
		$insert=mysqli_query($conn, "insert into product (Name, Price, Photo, Code) values('$na',$pri,'$im', '$co')");
		if($insert==true){
			ob_start();
			header("Location: admin2.php");
			ob_end_flush();
			die();
		}
	}

?>