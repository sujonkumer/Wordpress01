		<?php
		include("header.php");

		?>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Contact Us</h1>
							</div>
						</div>
					</div>
				</section>

		
				<div class="container">

					<div class="row">
						<div class="col-lg-6">

							<div class="alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger d-none mt-4" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
							</div>

							<h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label>Your name *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label>Your email address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Message *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6">

							<h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<hr>

							<h4 class="heading-primary">The <strong>Office</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-4">
								<li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
								<li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr>

							<h4 class="heading-primary">Business <strong>Hours</strong></h4>
							<ul class="list list-icons list-dark mt-4">
								<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
								<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
								<li><i class="far fa-clock"></i> Sunday - Closed</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-lg-9">
							<div class="call-to-action-content">
								<h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h3>
								<p class="mb-0">The <strong>#1 Selling</strong> HTML Site Template on ThemeForest</p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary">Buy Now!</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
							</div>
						</div>
					</div>
				</div>
			</section>

<?php
include("footer.php");
?>
		