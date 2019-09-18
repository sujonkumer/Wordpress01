		<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>

		<!-- Basic -->
		<meta charset="<?php bloginfo( ‘charset’ );?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title><?php bloginfo( 'name' );?></title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/theme-elements.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/theme-blog.css">
		
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php bloginfo( 'template_url' );?>/vendor/modernizr/modernizr.min.js"></script>
		<?php wp_head();?>
	</head>
	<body>

		<div class="body">
		<header id="header" class="header-no-min-height" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="<?=home_url();?>">
											<img alt="W3programmers" width="150" height="28" src="<?php bloginfo( 'template_url' );?>/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
		<?php
		  $args = array(
		 'theme_location' => 'header-menu',
		 'depth' => 4,
		 'container' => '',
		 'menu_class'  => 'nav nav-pills',
		 'walker'  => new BootstrapNavMenuWalker()
		);
		wp_nav_menu($args);
		?>
											</nav>
										</div>
										<ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			