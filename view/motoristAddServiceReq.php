<?php
session_start();
  if(!isset($_SESSION['motorist'])){
    header("location:index.php");
  }
 ?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>MechanicHero</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="">
		<div class=""></div>
	</div>

	

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute s-parallax ds bs s-overlay">

				<!--topline section visible only on small screens|-->
				<section class="page_toplogo ds s-overlay s-pt-10 s-pb-5 s-py-lg-30">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="d-lg-flex justify-content-lg-end align-items-lg-center">
									<div class="mr-auto">
										<!--
							if you want to display toplogo info on smaller screens
							than use following CSS classes below:
						 	d-sm-flex justify-content-sm-center
						 -->
										<div class="d-none d-lg-flex justify-content-center justify-content-lg-start">
											<a href="mechanicDashboard.php" class="logo">
												<img src="images/logo.png" alt="">
												<span class="logo-text fw-500">Mechannic<span class="fw-200">Hero</span></span>
											</a>
										</div>
									</div>
									<!--
						if you want to display toplogo info on smaller screens
						than use following CSS classes below:
						d-sm-flex justify-lg-content-end justify-content-sm-between align-items-center
					-->
									<div class="d-flex justify-lg-content-end align-items-center meta-icons">
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-email"></i>
											</div>
											<div class="media-body">
												<h6>Mail Us</h6>
												<p class="fw-400">
													Info@MechanicHero.com
												</p>
											</div>
										</div>
										<div class="media d-none d-md-flex">
											<div class="icon-styled color-main fs-20">
												<i class="ico-placeholder"></i>
											</div>
											<div class="media-body">
												<h6>Location</h6>
												<p class="fw-400">
													Waukesha, WI 53186
												</p>
											</div>
										</div>
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-phone-call"></i>
											</div>
											<div class="media-body">
												<h6>Phone</h6>
												<p class="fw-400">
													+1 23 456 78 90
												</p>
											</div>
										</div>
									
									</div>
								</div>
								<!-- header toggler -->
							</div>
						</div>
					</div>
				</section>


				<!--eof topline-->

				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
				<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered justify-nav-center">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="d-lg-none col-11">
								<a href="mechanicDashboard.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
								</a>
							</div>
							<div class="col-xl-12">

								<div class="nav-wrap">
									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
                                        <li class="active">
												<a href="motoristDashboard.php">Service</a>
											
											</li>

											<li>
												<a href="motoristVehicle.php">Vehicle</a>
											</li>
										
											<li>
												<a href="motoristProfile.php">Profile</a>
											</li>
											<li>
											<li>
												<a href="logout.php">Logout</a>
											<li>
							
									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<span class="toggle_menu"><span></span></span>

				</header>
<!-- 
				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								
	
							</div>

						</div>
					</div>
				</section> -->



			<section class="page_slider">
				<div class="flexslider" data-nav="false" data-dots="true">
					<ul class="slides">
						<li class="ds bs cover-image flex-slide">
							<!-- <span class="flexslider-overlay"></span> -->
							<img src="images/slide04.jpg" alt="">
							<div class="container">
            <form action="../controller/addRequestService.php" method="get">                 
          <br/>
          <br/>
        
          <br/>
          <style type ="text/css">
          textarea {
                    width: 300px;
                    height: 100px;
                    background-color: #fff;
                    font-color: #000000;
                    font-size: 1em;
                    font-weight: bold;
                    font-family: Verdana, Arial, Helvetica, sans-serif;
                    border: 1px solid black;
                    }
          
          </style>
          <div class ="table" >
          <table margin-left ="20"> 

                            <?php
						  include("../controller/getallVehicle.php");							
						echo "<span>Car Plate No. <h6>".$_GET['plateno']."</span></h6>";
						
				
							?>
				<br/>			
							<input type="hidden" class="form-control" id="vehicleid "  name="vehicleid" value="<?php echo $_GET['id'];?>" >
								<div class="form-group has-placeholder">
							
								<input type="date" class="form-control" id="request_date"  name="request_date" require>
								</div>
                       
								<div class="form-group has-placeholder">
								<input type="checkbox" value = "Warning Lights" name="service[]" id="service[]">Warning Lights
                                <!-- </div>
                                <div class="form-group has-placeholder"> -->
								<input type="checkbox" value = "Dead Battery" name="service[]" id="service[]">Dead Battery
                                </div>
                                <div class="form-group has-placeholder">
								<input type="checkbox" value = "Flat Tires" name="service[]" id="service[]">Flat Tires
                                <!-- </div>
                                <div class="form-group has-placeholder"> -->
								<input type="checkbox" value = "problem4" name="service[]" id="service[]">problem4
                                </div>

                                <div class="form-group has-placeholder">
								<input type="checkbox" value = "problem5" name="service[]" id="service[]">problem5
                                <!-- </div>
                                <div class="form-group has-placeholder"> -->
								<input type="checkbox" value = "problem6" name="service[]" id="service[]">problem6
                                </div>
                                <div class="form-group has-placeholder">
								<input type="checkbox" value = "problem7" name="service[]" id="service[]">problem7
                                <!-- </div>
                                <div class="form-group has-placeholder"> -->
								<input type="checkbox" value = "problem8" name="service[]" id="service[]">problem8
                                </div>
                                <div class="form-group has-placeholder">
                                
								
								<div class="form-group has-placeholder">
								<input type="text" name ="city" id="city" placeholder="Enter Address">
								</div>
								<div class="form-group has-placeholder">
								<textarea cols="30" rows="4.1" name="problems" id ="problems" placeholder="More specific..."></textarea>
								</div>
                                	
								<div class="form-group has-placeholder">
									<button type="submit" on name ="btnVehicle" id ="btnServReq" class="btn btn-small btn-maincolor log-btn">Post Service Request</button>
								</div>

								<div class="form-group has-placeholder">
								</div>
								
								
                                </div>

								</div>
                                </table>    
                                </form>
             </div>
			</section>

			<section class="page_copyright ds ms s-pt-5 s-pb-25 s-py-lg-20">
				<div class="container">
					<div class="divider-2 d-none d-lg-block"></div>
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-12 text-center">
							<p class="social-icons with-border">
								<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
								<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
								<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
							</p>
							<p><a target="_blank" href="https://templateshub.net">Mechanic Hero</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


</html>