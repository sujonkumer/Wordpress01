			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-lg-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger d-none" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn btn-light" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
									<li><p><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-1">
								<a href="index.php" class="logo">
									<img alt="w3programmers" class="img-fluid" src="<?php bloginfo( 'template_url' );?>/img/logo.png">
								</a>
							</div>
							<div class="col-lg-7">
								<p>© Copyright 2018. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4">
								<nav id="sub-menu">
								<?php
			wp_nav_menu( array( 'theme_location' => 'footer-menu'));
			?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
			</div>

		<!-- Vendor -->
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery/jquery.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/popper/umd/popper.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/common/common.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php bloginfo( 'template_url' );?>/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php bloginfo( 'template_url' );?>/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php bloginfo( 'template_url' );?>/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php bloginfo( 'template_url' );?>/js/theme.init.js"></script>

		<<script>
			var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});

		</script>
	</body>
</html>
