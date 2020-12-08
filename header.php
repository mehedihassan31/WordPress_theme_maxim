<?php
wp_head();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


</head>

<body <?php body_class();?>>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
	<div class="container d-flex">

		<div class="logo mr-auto">
			<h1 class="text-light"><a href="<?php site_url();?>" >Maxim</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>

		<nav class="nav-menu d-none d-lg-block">


<!---->
<!--			<ul>-->


				<?php
				wp_nav_menu(
					array(

						'theme_location'  => 'topmenu',
						'menu' => 'nav',
						'container'       => 'ul',
						'container_class' => 'drop-down',
						'container_id'    => '',
						'menu_class'      => 'nav-menu d-none d-lg-block',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)

				);
				?>





<!--                -->
<!--				<li class="active"><a href="index.html">Home</a></li>-->
<!--				<li><a href="#about">About Us</a></li>-->
<!--				<li><a href="#services">Services</a></li>-->
<!--				<li><a href="#portfolio">Portfolio</a></li>-->
<!--				<li><a href="#team">Team</a></li>-->
<!--				<li class="drop-down"><a href="">Drop Down</a>-->
<!--					<ul>-->
<!--						<li><a href="#">Drop Down 1</a></li>-->
<!--						<li class="drop-down"><a href="#">Drop Down 2</a>-->
<!--							<ul>-->
<!--								<li><a href="#">Deep Drop Down 1</a></li>-->
<!--								<li><a href="#">Deep Drop Down 2</a></li>-->
<!--								<li><a href="#">Deep Drop Down 3</a></li>-->
<!--								<li><a href="#">Deep Drop Down 4</a></li>-->
<!--								<li><a href="#">Deep Drop Down 5</a></li>-->
<!--							</ul>-->
<!--						</li>-->
<!--						<li><a href="#">Drop Down 3</a></li>-->
<!--						<li><a href="#">Drop Down 4</a></li>-->
<!--						<li><a href="#">Drop Down 5</a></li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li><a href="#contact">Contact Us</a></li>-->
<!---->
<!--			</ul>-->

		</nav><!-- .nav-menu -->

	</div>
</header><!-- End Header -->