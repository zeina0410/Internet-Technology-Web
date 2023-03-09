<!DOCTYPE html>
<html lang="en">

  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	
    <title> Z&amp;L&apos;s bakery Admin </title>
	
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
	<style>
	table {
		border-collapse: collapse;
		margin: 90px;
		font-size: 0.9em;
		font-family: sans-serif;
		min-width: 400px;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}
	thead tr {
		background-color: #8A4117;
		color: #ffffff;
		text-align: left;
	}
	th, td {
		padding: 12px 15px;
	}
	tbody tr {
		border-bottom: 1px solid #dddddd;
	}
	tbody tr:nth-of-type(even) {
		background-color: #f3f3f3;
	}
	tbody tr:last-of-type {
		border-bottom: 2px solid #8A4117;
	}
	</style>
    </head>

    <body>
	<?php include 'con1.php';?>
	<!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" height=80px width=350px align="left top">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" >Home</a></li>
                            <li class="scroll-to-section"><a href="#top" class="active">Update Product</a></li>
							<li class="scroll-to-section"><a href="#vci" >Info</a></li>
                        </ul>      
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
	
    <!-- ***** Header Area End ***** -->
	<div id="top" >
	 <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h2>Add Product</h2>
            </div>
        </div>
     </div>
	<div class="contact-form">
	  <form id="contact" action="img.php" method="post">
	    <div class="row">
			<p style="padding:30px;" ></br></br>
				Item Name: <input name="iname" type="text" placeholder="Name*" required=""></br>
				Image to upload (write link): <input type="text" name="ph" placeholder="Enter name of the photo in folder*" required="">
				Price: <input name="pric" type="text" placeholder="Price*" required=""></br>
				Code: <input name="cd" type="text" placeholder="Code*" required=""></br>
				<input name="up" type="submit" value="Upload" id="form-submit" class="main-button-icon" style="color:white; background-color:#8A4117;"></br>
			</p>
		</div>
	  </form>
	</div>
	
	
	
	
	
	
	<div id="dlt" >
	 <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h2>Delete Product</h2>
            </div>
        </div>
     </div>
	<div class="contact-form">
	  <form id="contact" action="admin2.php" method="post">
	    <div class="row">
			<p style="padding:30px;" ></br></br>
				Item ID: <input name="idm" type="text" placeholder="ID*" required=""></br>
				<input name="sub" type="submit" value="Delete" id="form-submit" class="main-button-icon" style="color:white; background-color:#8A4117;"></br>
			</p>
		</div>
	  </form>
	</div>
	
	<?php
		if (isset($_POST['sub'])){
			$id = $_POST['idm'];
			$data=mysqli_query($conn, "SELECT ID FROM product");
			$result = mysqli_query($conn, "DELETE FROM Product WHERE ID=$id");
		}
	?>	
	
	
	
	<div id="dlt" >
	 <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h2>Edit Product</h2>
            </div>
        </div>
     </div>
	<div class="contact-form">
	  <form id="contact" action="admin2.php" method="post">
	    <div class="row">
			<p style="padding:30px;" ></br></br>
				Item ID: <input name="idm" type="text" placeholder="ID*" required=""></br>
				New Name: <input name="iname" type="text" placeholder="Name*" required=""></br>
				<input name="edtn" type="submit" value="Update Name" id="form-submit" class="main-button-icon" style="color:white; background-color:#8A4117;"></br>
			</p>
		</div>
	  </form>
	</div>
	<?php
		if (isset($_POST['edtn'])){
			$id = $_POST['idm'];
			$nn = $_POST['iname'];
			$result = mysqli_query($conn, "UPDATE product SET Name='$nn' WHERE ID=$id");
		}
	?>	
	
	<div class="contact-form">
	  <form id="contact" action="admin2.php" method="post">
	    <div class="row">
			<p style="padding:30px;" ></br></br>
				Item ID: <input name="idm" type="text" placeholder="ID*" required=""></br>
				New Price: <input name="pric" type="text" placeholder="Price*" required=""></br>
				<input name="edtp" type="submit" value="Update Price" id="form-submit" class="main-button-icon" style="color:white; background-color:#8A4117;"></br>
			</p>
		</div>
	  </form>
	</div>
	<?php
		if (isset($_POST['edtp'])){
			$id = $_POST['idm'];
			$prc = $_POST['pric'];
			$edit1 = mysqli_query($conn, "UPDATE product SET Price=$prc WHERE ID=$id");
		}
	?>	
	
	<div class="contact-form">
	  <form id="contact" action="admin2.php" method="post">
	    <div class="row">
			<p style="padding:30px;" ></br></br>
				Item ID: <input name="idm" type="text" placeholder="ID*" required=""></br>
				New image to upload: <input type="text" name="ph" placeholder="Enter name of the photo in folder*" required="">
				<input name="edtph" type="submit" value="Update Photo" id="form-submit" class="main-button-icon" style="color:white; background-color:#8A4117;"></br>
			</p>
		</div>
	  </form>
	</div>
	<?php
		if (isset($_POST['edph'])){
			$id = $_POST['idm'];
			$im = $_POST['ph'];
			$result = mysqli_query($conn, "UPDATE product SET Photo='$im' WHERE ID=$id");
		}
	?>	
	
	
	
	<!-- ***** vci Area Starts ***** --> 
	<div id="vci">
	 <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h2>Veiw Costumer Information</h2>
			</div>
        </div>
     </div>
	</div>
	<?php
		$data=mysqli_query($conn, "SELECT Username, Name, Email FROM costumer");
		if($data){
			echo "<table border=1>
					<thead><tr><th>Username</th><th>Name</th><th>Email</th></tr></thead>";
			while ($row=mysqli_fetch_assoc($data)){
				echo "<tr><td>";
				echo $row['Username'];
				echo "</td><td>";
				echo $row['Name'];
				echo "</td><td>";
				echo $row['Email'];
				echo "</td></tr></tr>";
			}
			echo"</table>";
		}
	?>
	
	</div>
	<!-- ***** vci Area Ends ***** --> 
	
    <!-- ***** Footer Start ***** -->
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Z&amp;L's Co.
                        
                        <br>Contact: 093582648</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!-- ***** Footer Ends ***** -->

     <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
	
	
	
  </body>
</html>