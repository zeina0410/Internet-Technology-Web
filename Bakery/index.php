


<!DOCTYPE html>

<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	
    <title> Z&amp;L&apos;s bakery </title>
	
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
	
	<link rel="stylesheet" href="assets/css/AdminLTE.css">
	
    </head>
    <body>
	<?php include 'con1.php'; ?>
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
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#offers">Menu</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Sign in</a></li> 
                        </ul>      
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Z&amp;L&apos;s Bakery</h4>
                            <h6>MADE WITH PASSION</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make An Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>Make An Order</h2>
                        </div>
                        <p>Free delivery, pay when arrives.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="signin.php" method="post">
                            <div class="row">
                                <div class="col-lg-12">
								<?php /*
									if(!isset($_COOKIE[$cookie_value])){
										echo"cookie named ".$cookie_value."is not set";}
									else{
										echo "cookie named ".$cookie_value."is  set"."<br>";
										echo"value".$_COOKIE[$cookie_value];
									}*/
								?>
                                    <h4>Sign In</h4>
                                </div>
                                <input name="username" type="text" placeholder="Username*" required=""></br>
                                <input name="pass" type="text" id="phone" placeholder="Password*" required=""></br>
                                <input name="sub" type="submit" value="Confirm" id="form-submit" class="main-button-icon" style="color:white; background-color:#8A4117;"></br>
								<p style="color:black;">
									</br>Don't have an account? <a href="signup.php" >Sign up</a></br></br>
									<a href="admin.php" >Admin</a></br>
								</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
	
	<!-- ***** Menu Area Starts ***** --> 
	<section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h2>Menu</h2>
                    </div>
                </div>
            </div>
			<?php 
				$inc = 3;
				$data=mysqli_query($conn, "SELECT * FROM product");
				while ($row=mysqli_fetch_assoc($data)){
					$image = (!empty($row['Photo'])) ? 'assets/images/'.$row['Photo'] : 'assets/images/noimage.jpg';
					$inc = ($inc == 3) ? 1 : $inc + 1;
					if($inc == 1) echo "<div class='row'>";
						echo "<div class='col-sm-4'>
								<div class='box box-solid'>
									<div class='box-body prod-body'>
										<img src='".$image."' width='100%' height='230px' class='thumbnail'>
										<h5 style='color:#8A4117;'><a><b>".$row['Name']."</b></a></h5>
									</div>
									<div class='box-footer' style='background-color:#8A4117;'>
										<b style='color:white;'>".number_format($row['Price'], 2)."</b>
									</div>
								</div>
							  </div>";
					if($inc == 3) 
						echo "</div>";
				}
				if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
				if($inc == 2) echo "<div class='col-sm-4'></div></div>";		
			?>
	</section> 
	<!-- ***** Menu Area Ends ***** --> 
    
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