<?php
session_start();
$residenceID = $_GET["c"];
$_SESSION["residenceID"] = $residenceID;
$_SESSION["applicationID"] = $_GET["d"];
$_SESSION["applicantID"] = $_GET["e"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Easy Estate</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>


  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto" style="font-size:27px;" >Easy Estate</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="
          " /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="housingOfficerPage.php">Go back</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
					<form action="allocation.php" method="POST">
					  <label style="color:white">Residence ID:  <?php echo $residenceID;?></label><br><br>
					  <input type="hidden" name="residenceID">
					  <label style="color:white">Units No. :</label><br>
					  <input type="text" class="form-control" name="unitNo" id="unitNo" required><br>

						<label style="color:white">From Date :</label><br>
						<input id="datepicker" width="270" name="fromDate"/>
						<script>
							$('#datepicker').datepicker({
								uiLibrary: 'bootstrap',
								format: 'yyyy-mm-dd'
							});
						</script>
						<br>
						<label style="color:white">Duration :</label><br>
						<br>
						<div class="form-row">
						<div class="form-group col-md-6 ">
								<label style="color:white">
								<input type="radio" class="form-control" name="duration" id="optionsRadios1" value="12" checked>12 Months</label><br>
						</div>
						<div class="form-group col-md-6 ">
								<label style="color:white">
								<input type="radio" class="form-control" name="duration" id="optionsRadios2" value="18"> 18 Months</label><br>
						</div>
						</div>


						<button type="submit" class="btn btn-primary">Submit</button>
			</form>

              </div>
            </div>
          </div>



      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">






  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">



          <div class="col-lg-4 col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.html">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href=index.html#about>About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href=index.html#services>Services</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jalan Damansara, Bukit Kiara <br>
              60000 Kuala Lumpur<br>
              Wilayah Persekutuan Kuala Lumpur <br>
              <strong>Phone:</strong> +603-7727 1886<br>
              <strong>Email:</strong> Application_Finder@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/login?lang=en" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a>

            </div>

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our Newsletter to get the latest news and updates about our Website and the world of Higher Education.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Easy Estate</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>





  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>