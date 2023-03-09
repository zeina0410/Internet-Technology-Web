<?php
	include 'con1.php';
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
	
	$error=1;
	if(isset($_POST['sub'])){
		$i=$_POST['id'];
		$w=$_POST['pw'];
		$data=mysqli_query($conn, "SELECT ID, Password FROM admin");
		while ($row=mysqli_fetch_assoc($data)){
			if($row['ID']==$i && $row['Password']==$w){
				ob_start();
				header("Location: admin2.php");
				ob_end_flush();
				die();
				exit();
			}
			else 
				$error=0;
		}
		if($error !=1)
			$error = "wrong id or password";
	}
?>