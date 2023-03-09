
<?php

    session_start();
	include 'con1.php';
	$cookiename="un";
	$cookie_value=$_POST['username'];
	setcookie($cookiename,$cookie_value,time()+(86400*30),"/");
	
	
	
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
	$error=1;
	if(isset($_POST['sub'])){
		$usern=$_POST['username'];
		$pas=$_POST['pass'];
		$data=mysqli_query($conn, "SELECT Username, Password, Email 
							FROM costumer");
		while ($row=mysqli_fetch_assoc($data)){
			if($row['Username']==$usern && $row['Password']==$pas){
				$msg="Thsnk you for choosing us";
				mail($_POST['Email'], "Z&amp;L Bakery", $msg);
				ob_start();
				header("Location: index2.php");
				ob_end_flush();
				die();
				exit();
			}
			else
				$error = "wrong username or password";
		}
	}
?>