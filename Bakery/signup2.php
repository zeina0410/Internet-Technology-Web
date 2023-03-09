<?php
	include 'con1.php';
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
	
	if(isset($_POST['sub'])){
		$n=$_POST['name'];
		$un=$_POST['username'];
		$e=$_POST['email'];
		$p=$_POST['password'];
		$rp=$_POST['reps'];
		if($rp==$p)
			$insert=mysqli_query($conn, "insert into costumer (Username,Name,Email,Password) values('$un','$n','$e', $p)");
		if($insert==true){
			ob_start();
			header("Location: index2.php");
			ob_end_flush();
			die();
		}
	}
?>