<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>
	
    <!-- Content -->
    <div class="page-content bg-white">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-lg overlay-primary-middle bg-pt" style="background-image:url(images/contact-us-banner.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
					<p>Stay informed on our news or events!</p>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fas fa-home"></i></a></li>
							<li>Pages</li>
							<li>Contact Us 2</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-block">
            <!-- About Me -->
			<div class="banner-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch" style="width:100%; min-height: 500px;     margin-top: -40px;" allowfullscreen></iframe>
			</div>
			<div class="section-full content-inner-2 contact-box">
				<div class="container">
					<div class="row align-items-center m-b50">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-primary">
										<i class="ti-headphone-alt"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Phone</h4>
									<p>Phone +91 78957 15406</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-primary">
										<i class="ti-location-pin"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Address</h4>
									<p>MSEVEN COMPLEX, First Floor, Shop 15, A Block, Pallavpuram, Meerut, Uttar Pradesh 250110</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="icon-bx-wraper m-b30 left">
								<div class="icon-md m-b20 m-t5">
									<a href="javascript:void(0)" class="icon-cell text-primary">
										<i class="ti-email"></i>
									</a>
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte m-b5">Email</h4>
									<p>info@7canvas.in<br>Support@7canvas.in </p>
								</div>
							</div>
						</div>
					</div>
				
					<div class="section-head text-center">
						<h2 class="m-b5">Get in touch with us</h2>
						<!-- <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8</p> -->
					</div>
					<div class="dzFormMsg"></div>
					<form method="post" class="dzForm" action="script/contact_smtp.php">
						<input type="hidden" value="Contact" name="dzToDo">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="form-group">
									<input name="dzName" type="text" required class="form-control" placeholder="Enter your name">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="form-group">
									<input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Address" >
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="form-group">
									<input name="dzPhoneNumber" type="text" required class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your message here"></textarea>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
									<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 text-center">
								<button name="submit" type="submit" value="Submit" class="btn radius-xl btn-lg outline outline-2 black btn-aware">Send Message<span></span></button>
							</div>
						</div>
					</form>
				</div>
			</div>
            <!-- About Me End -->
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
<?php include('includes/footer.php'); ?>
</div>
<?php include('includes/scripts.php'); ?>
