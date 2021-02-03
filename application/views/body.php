<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $company['name']; ?></title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/front/'); ?>img/icon.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/front/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/front/'); ?>css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/style1.css">
	<!-- Slick Slide Animation Client-->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/corousel.css">
	<style>
		.text-kecil {
			font-size: 13px;
		}

		.txt_news {
			width: 100%;
			height: 40px;
			border: none;
			outline: none;
			background: #ededed;
			padding-left: 1rem;
			border-radius: 2px;
		}

		.btn_news {
			display: block;
			width: 100%;
			height: 40px;
			outline: none;
			border: none;
			font-size: 0, 5rem;
			color: #fff;
			background: #ff5a30;
			border-radius: 3px;
			margin-top: 10px;
		}

		.btn_news:hover {
			background: red;
		}

		.btn_read_more_product {
			border-radius: 4px;
			border: none;
			background: linear-gradient(-45deg, #ffa63d, #ff3d77, #338aff, #3cf0c5);
			background-size: 600%;
			animation: 16s linear infinite;
			height: auto;
			padding: 5px;
			color: white;
			outline: none;
		}
	</style>

</head>

<body>
	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
		<div class="container d-flex">
			<div class="contact-info mr-auto">
				<i class="icofont-envelope"></i> <a href="mailto:<?= $company['email1']; ?>"><?= $company['email1']; ?></a>
				<i class="icofont-phone"></i> <?= $company['telepon1']; ?>
				<i class="icofont-google-map"></i> <?= $company['address'] ?>, <?= $company['city']; ?>
			</div>
			<div class="social-links">
				<a href="#" id="head_twitter" class="twitter"><i class="icofont-twitter"></i></a>
				<a href="#" id="head_facebook" class="facebook"><i class="icofont-facebook"></i></a>
				<a href="#" id="head_instagram" class="instagram"><i class="icofont-instagram"></i></a>
				<a href="#" id="head_skype" class="skype"><i class="icofont-skype"></i></a>
				<a href="#" id="head_linkedin" class="linkedin"><i class="icofont-linkedin"></i></i></a>
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<!--<h1 class="logo mr-auto"><a href=""><?= strtoupper($company['name']); ?></a></h1>-->
			<!-- Uncomment below if you prefer to use an image logo -->
			<a href="index.html" class="logo mr-auto"><img src="<?= base_url('assets/front/img/logo.png') ?>" alt="" class=" img-fluid"></a>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="#header">Home</a></li>
					<?php
					$menu_about = $this->db->select('*')->where('status', 1)->get('about')->num_rows();
					$menu_product = $this->db->select('*')->where('status', 1)->get('products')->num_rows();
					$menu_portfolio = $this->db->select('*')->where('status', 1)->get('portfolio')->num_rows();
					$menu_teams = $this->db->select('*')->where('status', 1)->get('teams')->num_rows();
					$menu_client = $this->db->select('*')->where('status', 1)->get('client')->num_rows();
					if ($menu_about == 0) {
					} else {
						echo '<li><a href="#about">About</a></li>';
					}
					if ($menu_product == 0) {
					} else {
						echo '<li><a href="#product">Product</a></li>';
					}
					if ($menu_portfolio == 0) {
					} else {
						echo '<li><a href="#portfolio">Portfolio</a></li>';
					}
					if ($menu_teams == 0) {
						# code...
					} else {
						echo '<li><a href="#teams">Teams</a></li>';
					}
					if ($menu_client == 0) {
					} else {
						echo '<li><a href="#client">Client</a></li>';
					}
					?>
					<li><a href="#contact">Contact</a></li>

				</ul>
			</nav><!-- .nav-menu -->
			<button id="btn_search" style="background: transparent; border: none;outline: none;"> <span style="margin-left: 20px; margin-right: 20px;font-size: 20px;" class="icofont icofont-ui-search"></span></button>

			<a href="#" onclick="login()" class="appointment-btn scrollto modif1">Login Member</a>

		</div>
	</header><!-- End Header -->

	<main id="main">
		<!-- ======= Hero Section ======= -->
		<section id="why-us" class="why-us">
			<div class="slideheader" style="margin-top:10px">
				<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php
						$banyak = $this->db->select('*')->where('status', 1)->get('banner')->num_rows();
						for ($i = 0; $i < $banyak; $i++) {
						?>
							<li data-target="#carouselExampleIndicators2" data-slide-to="<?php $i; ?>" class="
									<?php if ($i == 0) {
										echo "active";
									} else {
										echo "";
									} ?>">
							</li>
						<?php
						} ?>
					</ol>
					<div class="carousel-inner">
						<?php
						foreach ($banner as $show) {
						?>
							<div class="carousel-item <?php if ($show->idbanner == 1) {
															echo "active";
														} else {
															echo "";
														} ?>">
								<img class="img-fluid" style="width:100%" src="<?= base_url(); ?>/assets/front/img/banner/<?php echo $show->picture; ?>" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h3 class="text-white"><?php echo $show->name; ?></h3>
									<p><?php echo $show->description; ?></p>
								</div>
							</div>
						<?php
						}
						?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>

		<!-- ======= About Section ======= -->
		<section id="about" class="about" style="margin-top:-10px; margin-bottom:-60px; padding-top:0px; background-color:whitesmoke ">
			<div class="container">

				<div class="row">
					<div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" style="margin-left: 15px; width: 94%;margin-right: -15px">
						<a href="https://www.youtube.com/watch?v=Y-K3Kqf6GjA" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
					</div>

					<div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
						<?php
						$take_about_header = $this->db->select('*')->limit(1)->where('status', 1)->get('about');
						foreach ($take_about_header->result() as $about_header) {
						?>
							<h3><?php echo $about_header->name; ?></h3>
							<p><?php echo $about_header->description; ?></p>
						<?php
						}
						$take_about_body = $this->db->select('*')->limit(10, 1)->where('status', 1)->get('about');
						foreach ($take_about_body->result() as $show_about) {
						?>
							<div class="icon-box">
								<div class="icon"><i class="bx <?php echo $show_about->icon; ?>"></i></div>
								<h4 class="title"><a href=""><?php echo $show_about->name; ?></a></h4>
								<p class="description"><?php echo $show_about->description; ?></p>
							</div>
						<?php
						}
						?>
					</div>
				</div>

			</div>
		</section><!-- End About Section -->
		<?php
		$jumlah_products = $this->db->select('*')->where('status', 1)->get('products')->num_rows();
		if ($jumlah_products == 0) {
		} else {
		?>
			<!-- ======= Services Section ======= -->
			<section id="product" class="services">
				<div class="container">

					<div class="section-title">
						<h2>Products</h2>
						<p>Abiding by the philosophy of "Innovation for All", Dahua offers a wide portfolio of
							security-related products, ranging from IPC, NVR, HDCVI cameras, HCVR, PTZ cameras, thermal
							cameras, Access Control, Video Intercom, Alarms, Mobile & Traffic products, display & control,
							VMS and so on. Dahua products are based on an open platform that features easy integration with
							third party partners through a standard SDK</p>
					</div>

					<div id="show_product" class="row">
						<?php foreach ($product as $prod) { ?>
							<div id="show_product_4" class="col-xl-2 col-lg-3 col-md-3 col-sm-4 d-flex align-items-stretch mt-4">
								<div style="width: 100%;" class="icon-box">
									<div class="icon">
										<img style="height: 100%;" src="<?= base_url('assets/front/'); ?>img/product/<?= $prod->picture; ?>" alt="">
									</div>
									<h5><a href=""><?php echo $prod->name; ?></a></h5>
									<!--<p><?php echo substr($prod->description, 0, 120); ?>...</p>-->
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="container" style="margin-top: 30px; margin-bottom:-10px; text-align: center;">
					<button id="btn_more_products" class="btn btn-danger btn-sm">READ MORE +</button>
				</div>
			</section><!-- End Services Section -->
		<?php
		}
		$jumlah_portfolio =  $this->db->select('*')->where('status', 1)->get('portfolio')->num_rows();
		if ($jumlah_portfolio == 0) {
		} else {
		?>
			<section id="portfolio" class="portfolio section-bg">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Portfolio</h2>
						<p>Short description of the portfolio</p>
					</div>

					<div class="row">
						<div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
							<ul id="portfolio-flters">
								<li data-filter="*" class="filter-active">All</li>
								<li data-filter=".filter-app">Camera</li>
								<li data-filter=".filter-card">Access Control</li>
								<li data-filter=".filter-web">Management</li>
								<li data-filter=".filter-web">Video</li>
							</ul>
						</div>
					</div>

					<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

						<div class="col-lg-4 col-md-6 portfolio-item filter-card">
							<div class="portfolio-wrap">
								<img src="<?= base_url('assets/front/'); ?>img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
								<div class="portfolio-info">
									<h4>Card 1</h4>
									<p>Card</p>
									<div class="portfolio-links">
										<a href="<?= base_url('assets/front/'); ?>img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
										<a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section><!-- End Portfolio Section -->
		<?php
		}
		$banyak_teams = $this->db->select('*')->where('status', 1)->get('teams')->num_rows();
		if ($banyak_teams == 0) {
		} else {
		?>
			<!-- ======= Teams Section ======= -->
			<section id="teams" class="doctors">
				<div class="container">

					<div class="section-title">
						<h2>Teams</h2>
						<p>Short description of the teams</p>
					</div>

					<div class="row">
						<?php foreach ($teams as $tem) { ?>
							<div class="col-lg-6 col-sm-6 mt-4">
								<div class="member d-flex align-items-start">
									<div class="pic"><img src="<?= base_url('assets/front/'); ?>img/teams/<?php echo $tem->picture; ?>" class="img-fluid" alt=""></div>
									<div class="member-info">
										<h4><?php echo $tem->name; ?></h4>
										<span><?php echo $tem->position; ?></span>
										<div class="social">
											<a data-toggle="popover" data-placement="bottom" data-content="<?php echo $tem->telepone; ?>"><i class="icofont-phone"></i></a>
											<a data-toggle="popover" data-placement="bottom" data-content="<?php echo $tem->email; ?>"><i class="icofont-ui-email"></i></a>
											<a data-toggle="popover" data-placement="bottom" data-content="<?php echo $tem->whatsapp; ?>"><i class="icofont-whatsapp"></i></a>
											<!-- <a data-toggle="popover" data-placement="bottom" data-content="<?php  ?>"><i class="ri-facebook-fill"></i></a>
										<a data-toggle="popover" data-placement="bottom" data-content="<?php  ?>"><i class="ri-instagram-fill"></i></a>
										<a data-toggle="popover" data-placement="bottom" data-content="<?php  ?>"><i class="ri-linkedin-box-fill"></i></a>
										-->
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</section><!-- End Doctors Section -->
		<?php
		}
		$banyak_client =  $this->db->select('*')->where('status', 1)->get('client')->num_rows();
		if ($banyak_client == 0) {
			# code...
		} else {
		?>
			<!-- ======== Client ======== -->
			<section id="client">
				<div class="container" data-aos="zoom-in">
					<div class="section-title">
						<h2>Clients</h2>
						<p>Description Our Client</p>
					</div>

					<div class="row">
						<div class="container">
							<section class="customer-logos slider">
								<?php foreach ($clients as $cli) { ?>
									<div class="slide"><img src="<?= base_url('assets/front/'); ?>img/clients/<?php echo $cli->picture; ?>"></div>
								<?php } ?>
							</section>
						</div>
					</div>
				</div>
			</section>
			<!-- =============== END Client ============= -->
		<?php
		}
		?>
		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title">
					<h2>Contact</h2>
					<p>Short description of the contacts</p>
				</div>
			</div>

			<!--
			<div>
				<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
			</div>
			-->

			<div class="container">
				<div class="row mt-5">
					<div class="col-lg-4">
						<div class="info" style="background: transparent;">
							<div class="address">
								<i class="icofont-google-map"></i>
								<h4>Location:</h4>
								<p><?php echo $company['district']; ?>, <?php echo $company['city']; ?></p>
							</div>

							<div class="email">
								<i class="icofont-envelope"></i>
								<h4>Email:</h4>
								<p><?php echo $company['email1'] ?></p>
							</div>

							<div class="phone">
								<i class="icofont-phone"></i>
								<h4>Call:</h4>
								<p><?php echo $company['telepon1']; ?></p>
							</div>
						</div>
					</div>

					<div class="col-lg-8 mt-5 mt-lg-0">
						<form id="form_message" action="" role="form" class="cmxform php-email-form" style="background: transparent;">
							<div class="form-row">
								<div class="col-md-6 form-group">
									<input type="text" name="txt_name" class="form-control" id="txt_name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								</div>
								<div class="col-md-6 form-group">
									<input type="email" class="form-control" name="txt_email" id="txt_email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="txt_subject" id="txt_subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
							</div>
							<div class="form-group">
								<textarea class="form-control" name="txt_message" id="txt_message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
							</div>
							<div class="text-center"><button id="btn_message" class="modif2" type="submit">Send Message</button></div>
						</form>

					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-7 footer-contact">
						<p style="font-size: 25px;
								margin-bottom: 10px;
								font-family: Raleway, sans-serif;
								color: dimgray">
							<?php echo strtoupper($company['name']); ?>
						</p>
						<p>
							<?php echo $company['district']; ?> <br>
							<?php echo $company['address']; ?> <br>
							<?php echo $company['city']; ?>, <?php echo $company['poscode']; ?><br>
							<?php echo $company['country']; ?> <br><br>
							<strong>Phone:</strong> <?php echo $company['telepon1']; ?><br>
							<strong>Email:</strong> <?php echo $company['email1']; ?><br>
						</p>
					</div>
					<div class="col-lg-4 col-md-6 footer-links">
						<iframe width="100%" height="200" src="https://maps.google.com/maps?q=apartement%20puncak%20dharmahusada&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>

					<!--
					<div class="col-lg-3 col-md-6 footer-links">
						
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
						
					</div>-->

					<!--
					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>
					-->

					<div class="col-lg-4 col-md-6">
						<h5>Join Our Newsletter</h5>
						<p style="font-size: 14px;">Get updated information about the news that dahua</p>
						<form id="newslatter" action="" method="post">
							<input class="txt_news" type="email" name="txtemail" id="txtemail" placeholder="Email address">
							<button class="btn_news" id="btn_newsletter" value="Subscribe">Subscribe</button>
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="container d-md-flex py-4">

			<div class="mr-md-auto text-center text-md-left">
				<div class="copyright">
					&copy; Copyright <strong><span><?php echo $company['name']; ?></span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
					Designed by <a href="#">PidiWeb</a>
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="#" id="head_twitter" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="#" id="head_facebook" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" id="head_instagram" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="#" id="head_google" class="google-plus"><i class="bx bxl-skype"></i></a>
				<a href="#" id="head_linkedin" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			</div>
		</div>
	</footer><!-- End Footer -->
	<!-- Modal Login-->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog modal-ls">
			<div class="modal-content">
				<form id="myForm" action="" method="POST">
					<div class="modal-body">
						<div class="header-login">
							<h4 class="text-login">Login Member</h4>
						</div>
						<div id="the-message"></div>
						<div class="form-group">
							<input type="hidden" name="txt_id">
							<input type="text" class="form-control form-login" id="txt_name" name="txt_name" placeholder="Email...">
						</div>
						<div class="form-group">
							<input type="hidden" name="txt_id">
							<input type="text" class="form-control form-login " id="txt_name" name="txt_name" placeholder="Password...">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-lg btn-block btn-login">Login</button>
						</div>
						<hr>
						<h6 class="forgot"><a href="#">Forgot Password?</a></h6>
						<h6 class="register"><a href="#">Register Member!</a></h6>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<div id="spinner-message" class="modal">
		<div class="spinner-border" style="width: 6rem; height: 6rem; margin-top:100px; color:red" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<div id="preloader"></div>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/front/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
	<!-- <script src="<?= base_url('assets/front/'); ?>vendor/php-email-form/validate.js"></script>-->
	<script src="<?= base_url('assets/front/'); ?>vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/front/'); ?>js/main.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/owl.carousel.js"></script>

	<!-- animate slide client-->
	<script src="<?= base_url('assets/front/'); ?>js/slick.js" type="text/javascript" charset="utf-8"></script>

	<!--Animate Menu-->
	<script src="<?= base_url('assets/front/'); ?>js/main-menu.js" type="text/javascrip"></script>

	<!-- Form Validation-->
	<script src="<?= base_url('assets/front/'); ?>vendor/jquery-validation/lib/jquery.mockjax.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/jquery-validation/lib/jquery.form.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/jquery-validation/dist/jquery.validate.js"></script>
	<script>
		$(document).ready(function() {
			$('#myModal').modal('hide');
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});

		function login() {
			$('#myModal').modal('show');
		}

		$(function() {
			$('[data-toggle="popover"]').popover()
		})

		$(function() {
			$('#head_twitter').click(function() {
				window.open('https://twitter.com/<?= $company['twitter']; ?>', '_blank');
			})
		})

		$(function() {
			$('#head_facebook').click(function() {
				window.open('https://facebook.com/<?= $company['facebook']; ?>', '_blank');
			})
		})

		$(function() {
			$('#head_instagram').click(function() {
				window.open('https://instagram.com/<?= $company['instagram']; ?>', '_blank');
			})
		})

		$(function() {
			$('#head_skype').click(function() {
				window.open('https://skype.com/<?= $company['skype']; ?>', '_blank');
			})
		})

		$(function() {
			$('#head_linkedin').click(function() {
				window.open('https://linkedin.com/<?= $company['linkedin']; ?>', '_blank');
			})
		})

		$(function() {
			$('#head_google').click(function() {})
		})

		$(function() {
			$('#btn_more_products').click(function() {
				$('#show_product_4').hide();
				$.ajax({
					url: "<?php echo base_url('Dasboard/readproductall'); ?>",
					type: 'GET',
					dataType: 'json',
					success: function(data) {
						$('#show_product').html(data);
						$('#btn_more_products').hide();
					}
				})
			})
		})

		$().ready(function() {
			$('#form_message').validate({
				rules: {
					txt_name: "required",
					txt_email: {
						required: true,
						email: true
					},
					txt_subject: "required",
					txt_message: "required"
				},
				messages: {
					txt_name: "Please enter yourname",
					txt_email: {
						required: "Please enter your email",
						email: "Please enter a valid email address"
					},
					txt_subject: "Please enter your subject",
					txt_message: "Please enter your message"
				},
				errorElement: "em",
				errorPlacement: function(error, element) {
					error.addClass("help-block text-danger text-kecil");

					if (element.prop("type") === "checkbox") {
						error.insertAfter(element.parent("label"));
					} else {
						error.insertAfter(element);
					}
				},
				highlight: function(element, errorClass, validClass) {
					$(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
				},
				submitHandler: function(form) {
					$.ajax({
						url: "<?= base_url('Dasboard/sendmesaagescontact'); ?>",
						type: "POST",
						data: $('#form_message').serialize(),
						beforeSend: function() {
							$('#spinner-message').modal('show').addClass('text-center');
						},
						success: function(data) {
							if (data.success != true) {
								$('#spinner-message').modal('hide');
								$('#form_message')[0].reset();
							} else {
								alert('Failed');
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
							alert('Processing Failed')
						}
					})
				}
			});
		})

		S(function() {
			var txtmail = $('#txtmail');

		})

		$(function() {
			$('#btn_newsletter').submit(function() {
				alert('success');
			})
		})
	</script>
</body>

</html>