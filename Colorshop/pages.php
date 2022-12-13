<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" href="css/pages.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="style_about/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="style_about/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="style_about/css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="style_about/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="style_about/css/nice-select.css" type="text/css">
	<link rel="stylesheet" href="style_about/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="style_about/css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="style_about/css/style.css" type="text/css">
</head>
<style>
	.shop .submenu {
		transition: 1s;
	}

	ul.root>li {
		list-style: none;
		position: relative;
	}

	ul.root>li>a {
		text-decoration: none;
		color: black;
		transition: 0.3s;
		line-height: 20px;

	}

	ul.root>li>a:hover {
		color: red;
		transition: ease-in 1s;
		-moz-transittion: ease-in 0.35s;
		-webkit-transition: ease-in 0.35s;
	}

	ul.submenu {
		width: 150px;
		background: #fff;
		display: none;
		position: absolute;
	}

	ul.submenu>li {
		height: 40px;
		width: 100%;
		list-style: none;

	}

	ul.submenu>li>a {
		position: relative;
		bottom: 15px;
		height: 15px;
		text-align: center;
		text-decoration: none;
		display: block;
		border-bottom: 1px solid #ccc;
		line-height: 7px;

	}

	ul.root>li:hover ul.submenu {

		display: block;
	}


	.shop .submenu {
		transition: 1s;
	}

	ul.submenu>li>a:hover {
		color: red;
		transition: ease-in 1s;
		-moz-transittion: ease-in 0.35s;
		-webkit-transition: ease-in 0.35s;
	}

	.pages_1_img img {
		width: 100%;
		height: 250px;
	}
</style>

<body>


<header class="header trans_300">

<!-- Top Navigation -->

<div class="top_nav">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div  class="top_nav_left"> 
					<?php  
						if(isset($_SESSION['user'])){
							extract($_SESSION['user']);
					?>
						<?=$name?>
					<?php
						}else{
					?>
						FREE SHIPPING ON ALL ORDERS
					<?php        
						}
					?>
				</div>
			</div>
			<div class="col-md-6 text-right">
				<div class="top_nav_right">
					<ul class="top_nav_menu">

						<!-- Currency / Language / My Account -->
						<li class="account">
							<a  href="#">
								My Account
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="account_selection">
								<?php 
									if(isset($_SESSION['user'])){
										extract($_SESSION['user']);
								?>
									<li><a href="index.php?art=update_user"><i class="fa fa-pencil-square-o"
												aria-hidden="true"></i></i>Update</a></li>
												<li><a href="index.php?art=order_history">Order history</a></li>
									<li><a href="index.php?art=logout" onclick="return confirm('Bạn có muốn đăng xuất không ? ')"><i class="fa fa-user-plus"
												aria-hidden="true"></i>Log out</a></li>
								<?php
									}else{
								?>
									<li><a href="index.php?art=signin"><i class="fa fa-sign-in"
												aria-hidden="true"></i>Sign In</a></li>
									<li><a href="index.php?art=login"><i class="fa fa-user-plus"
												aria-hidden="true"></i>Register</a></li>
									<li><a href="index.php?art=quenmk"><i class="fa fa-user-plus" aria-hidden="true"></i>Forgot password</a></li>
								<?php
									}
								?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Main Navigation -->

<div class="main_nav_container">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-right">
				<div class="logo_container">
					<a href="index.php">Deigo<span>shop</span></a>
				</div>
				<nav class="navbar">
					<ul class="navbar_menu root">
						<li><a href="index.php">home</a></li>
						<li><a href="index.php?art=categories">shop</a>
						
							<ul class="submenu">
								<?php
								$list_dm = loadall_danhmuc();
								foreach ($list_dm as $dm) {
								?>
									<li><a href="index.php?art=categories&id=<?php echo $dm['iddm'] ?>"><?php echo $dm['name'] ?></a></li>
								<?php } ?>
							</ul>
							
						</li>
						<li><a href="index.php?art=pages">pages</a></li>
						<li><a href="index.php?art=contact">contact</a></li>
					</ul>
					<ul class="navbar_user">
						<li class="checkout">
							<a href="index.php?art=cart">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<?php if (isset($_SESSION['user'])) { extract($_SESSION['user']);?>
									<span id="checkout_items" class="checkout_items"><?= $number_cart = number_of_cart($id_kh) ?></span>
								<?php } ?>
							</a>
						</li>
					</ul>
					<div class="hamburger_container">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>

</header>


	<section class="breadcrumb-option" style="margin-top: 150px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb__text">
						<h4>About Us</h4>
						<div class="breadcrumb__links">
							<a href="index.php">Home</a>
							<span>About Us</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Section Begin -->
	<section class="about spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="about__pic">
						<img src="style_about/img/about/about-us.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="about__item">
						<h4>Who We Are ?</h4>
						<p>Contextual advertising programs sometimes have strict policies that need to be adhered too.
							Let’s take Google as an example.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="about__item">
						<h4>Who We Do ?</h4>
						<p>In this digital generation where information can be easily obtained within seconds, business
							cards still have retained their importance.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="about__item">
						<h4>Why Choose Us</h4>
						<p>A two or three storey house is the ideal way to maximise the piece of earth on which our home
							sits, but for older or infirm people.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->

	<!-- Testimonial Section Begin -->
	<section class="testimonial">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="testimonial__text">
						<span class="icon_quotations"></span>
						<p>“Going out after work? Take your butane curling iron with you to the office, heat it up,
							style your hair before you leave the office and you won’t have to make a trip back home.”
						</p>
						<div class="testimonial__author">
							<div class="testimonial__author__pic">
								<img src="style_about/img/about/testimonial-author.jpg" alt="">
							</div>
							<div class="testimonial__author__text">
								<h5>Augusta Schultz</h5>
								<p>Fashion Design</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="testimonial__pic set-bg" data-setbg="style_about/img/about/testimonial-pic.jpg"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Section End -->

	<!-- Counter Section Begin -->
	<section class="counter spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter__item">
						<div class="counter__item__number">
							<h2 class="cn_num">102</h2>
						</div>
						<span>Our <br />Clients</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter__item">
						<div class="counter__item__number">
							<h2 class="cn_num">30</h2>
						</div>
						<span>Total <br />Categories</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter__item">
						<div class="counter__item__number">
							<h2 class="cn_num">102</h2>
						</div>
						<span>In <br />Country</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter__item">
						<div class="counter__item__number">
							<h2 class="cn_num">98</h2>
							<strong>%</strong>
						</div>
						<span>Happy <br />Customer</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Counter Section End -->

	<!-- Team Section Begin -->
	<section class="team spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<span>Our Team</span>
						<h2>Meet Our Team</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="team__item">
						<img src="style_about/img/about/team-1.jpg" alt="">
						<h4>John Smith</h4>
						<span>Fashion Design</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="team__item">
						<img src="style_about/img/about/team-2.jpg" alt="">
						<h4>Christine Wise</h4>
						<span>C.E.O</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="team__item">
						<img src="style_about/img/about/team-3.jpg" alt="">
						<h4>Sean Robbins</h4>
						<span>Manager</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="team__item">
						<img src="style_about/img/about/team-4.jpg" alt="">
						<h4>Lucy Myers</h4>
						<span>Delivery</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team Section End -->

	<!-- Client Section Begin -->
	<section class="clients spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<span>Partner</span>
						<h2>Happy Clients</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-1.png" alt=""></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-2.png" alt=""></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-3.png" alt=""></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-4.png" alt=""></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-5.png" alt=""></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-6.png" alt=""></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-7.png" alt=""></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<a href="#" class="client__item"><img src="style_about/img/clients/client-8.png" alt=""></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Client Section End -->








	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a> &amp;
							distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	</div> -->



	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script src="js/contact_custom.js"></script>


	<script src="style_about/js/jquery-3.3.1.min.js"></script>
	<script src="style_about/js/bootstrap.min.js"></script>
	<script src="style_about/js/jquery.nice-select.min.js"></script>
	<script src="style_about/js/jquery.nicescroll.min.js"></script>
	<script src="style_about/js/jquery.magnific-popup.min.js"></script>
	<script src="style_about/js/jquery.countdown.min.js"></script>
	<script src="style_about/js/jquery.slicknav.js"></script>
	<script src="style_about/js/mixitup.min.js"></script>
	<script src="style_about/js/owl.carousel.min.js"></script>
	<script src="style_about/js/main.js"></script>
</body>

</html>