
<!-- Contact
================================================== -->

<!-- Map Container -->
<div class="full-width-box-container margin-bottom-10">

	<!-- Map -->
	<div class="col-lg-9 col-md-8">
		<!-- Google Maps -->
		<div class="google-map-container">
			<div id="googlemaps" class="google-map google-map-full"></div>
		</div>
		<!-- Google Maps / End -->
	</div>

	<!-- Office -->
	<div class="col-lg-3 col-md-4">
		<div class="address-container" data-background-image="images/contact-our-office.jpg">
			<div class="office-address">
				<h3>Contact Information</h3>
				<ul>
					<li>3075 Manchester Road</li>
					<li> Manchester, MD 21102 </li>
					<li>Phone 410-374-4545 </li>
				</ul>
			</div>
		</div>
	</div>

</div>
<!-- Map Container / End -->


<!-- Container / Start -->
<div class="container">

	<div class="row">

		<!-- Contact Details -->
		<div class="col-md-4">

			<h3 class="headline margin-bottom-35">Find Us There</h3>

			<!-- Contact Details -->
			<div class="sidebar-textbox">
				<p>Please contact us with any questions, concerns, suggestions, or compliments!</p>

				<ul class="contact-details">
					<li><i class="ln ln-icon-Phone-2"></i> <strong>Phone:</strong> <span>410-374-4545 </span></li>
					<li><i class="ln ln-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#">ken@millersfoodmarket.com</a></span></li>
				</ul>
			</div>

		</div>

		<!-- Contact Form -->
		<div class="col-md-8">

			<section id="contact">
				<h3 class="headline margin-bottom-45">Contact Form</h3>

				<div id="contact-message"></div> 

					<form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on">

					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Your Name" required="required" />
							</div>
						</div>

						<div class="col-md-6">
							<div>
								<input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
					</div>

					<div>
						<input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
					</div>

					<div>
						<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit" class="submit button medium border" id="submit" value="Submit Message" />

					</form>
			</section>
		</div>
		<!-- Contact Form / End -->

	</div>

</div>
<!-- Container / End -->


