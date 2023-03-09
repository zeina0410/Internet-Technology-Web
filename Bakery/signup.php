<!DOCTYPE html>
<html lang="en">

  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	
    <title> Z&amp;L&apos;s bakery Sign Up </title>
	
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">


    </head>

    <body>
	<?php include 'con1.php'; ?>
	<?php
$nameerr=$emailerr=" ";
$pss="";
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
if (empty($_post["name"])){
$nameerr="Name is required";
echo $nameerr;}
else{ $name=test_input($_POST["name"]);}
if (empty($_post["email"])){
$emailerr="Email is required";
echo $emailerr;}
else{ $pss=test_input($_POST["email"]);}
if (empty($_post["password"])){
$pss="Password* is required";
echo $pss;}
function test_input($data) 
{ $data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
return $data;} 
$name = test_input($_POST["name"]); 
if (!preg_match("/^[a-zA-Z ]*$/",$name)){
$nameErr = "Only letters and white space  allowed"; }
$email = test_input($_POST["email"]); 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format"; 
}
}?>
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
                            <li class="scroll-to-section"><a href="signup.php" class="active">Sign Up</a></li> 
                        </ul>      
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	
	<!-- ***** Sign Up Form Start ***** -->
	<div id="top" >
	<div class="contact-form">
	  <form id="contact" action="signup2.php" method="post">
	    <div class="row">
			<p style="padding:30px;" ></br></br>
				Name: <input name="name" type="text" placeholder="Name*" required=""></br>
					<span class="error">* <?php echo $nameerr; ?> </span>
				Username: <input name="username" type="text" placeholder="Username*" required=""></br>
				Email: <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Address*" required=""></br>
				<span class="error">* <?php echo $emailerr; ?> </span>
				Password: <input name="password" type="text" placeholder="Password*" required=""></br>
				<span class="error">* <?php echo $pss; ?> </span>
				Renter Password: <input name="reps" type="text" placeholder="Password*" required=""></br>
				<input name="sub" type="submit" value="Confirm" id="form-submit" class="main-button-icon" style="color:white; background-color:#8A4117;"></br>
			</p>
		</div>
	  </form>
	</div>
	</div>
	<!-- ***** Sign Up Form End ***** -->
	
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