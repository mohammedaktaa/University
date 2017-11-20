@extends('layouts.app')
@section('content')
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark page-title-center" style="background: url('images/contact/page-title.jpg') center 90% / cover; padding: 140px 0;" data-stellar-background-ratio="0.3">

	<div class="container clearfix" style="z-index: 2">
		<div class="emphasis-title dark nobottommargin">
			<span class="before-heading" style="color: #FFF;">medical@canvas.com</span>
			<h2 class="t700 ls0" style="color: #FFF;">+91-800-9876-221</h2>
		</div>
		<a href=https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" data-lightbox="iframe"><i class="icon-line-map i-large i-plain dark divcenter"></i></a>
		<span class="t600 ls1 uppercase" style="color: #EEE;">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</span>
	</div>

	<div class="video-overlay" style="background: rgba(222,98,98,0.85); z-index: 1"></div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="row clearfix">
				<div class="col-md-8">

					<h3>Send us an Email</h3>

					<div class="contact-widget">

						<div class="contact-form-result"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Wordpress</option>
									<option value="PHP / MySQL">PHP / MySQL</option>
									<option value="HTML5 / CSS3">HTML5 / CSS3</option>
									<option value="Graphic Design">Graphic Design</option>
								</select>
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>

						</form>
					</div>

				</div>

				<div class="col-md-4">
					<div class="opening-table" style="background-color: #f5f5f5">
						<div class="heading-block bottommargin-sm nobottomborder">
							<h4>Opening Hours</h4>
							<span>Lorem ipsum dolor sit amet, consecte adipisicing elit molestiae non.</span>
						</div>
						<div class="time-table-wrap clearfix">
							<div class="time-table clearfix">
								<h5 class="col-md-5">Monday</h5>
								<span class="col-md-7">8:00am - 11:00pm</span>
							</div>
							<div class="time-table clearfix">
								<h5 class="col-md-5">Tuesday</h5>
								<span class="col-md-7">8:00am - 11:00pm</span>
							</div>
							<div class="time-table clearfix">
								<h5 class="col-md-5">Wednesday</h5>
								<span class="col-md-7">8:00am - 11:00pm</span>
							</div>
							<div class="time-table clearfix">
								<h5 class="col-md-5">Thursday</h5>
								<span class="col-md-7">8:00am - 11:00pm</span>
							</div>
							<div class="time-table clearfix">
								<h5 class="col-md-5">Friday</h5>
								<span class="col-md-7">8:00am - 11:00pm</span>
							</div>
							<div class="time-table clearfix">
								<h5 class="col-md-5">Saturday</h5>
								<span class="col-md-7">8:00am - 1:30pm</span>
							</div>
							<div class="time-table clearfix">
								<h5 class="col-md-5">Sunday</h5>
								<span class="col-md-7 color t600">Closed</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="clear"></div>

		<div class="row topmargin-lg footer-stick common-height">

			<div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
				<div data-animate="fadeInLeft">
					<a href="#"><h3 class="uppercase" style="font-weight: 600;">Health Insurance</h3></a>
					<p style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities.&rarr;</p>
				</div>
				<i class="icon-medical-i-cardiology bgicon"></i>
			</div>

			<div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
				<div data-animate="fadeInLeft" data-delay="200">
					<a href="#"><h3 class="uppercase" style="font-weight: 600;">Medical Records</h3></a>
					<p style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice.&rarr;</p>
				</div>
				<i class="icon-medical-i-administration bgicon"></i>
			</div>

			<div class="col-md-4 dark col-padding ohidden" style="background-color: #DE6262;">
				<div data-animate="fadeInLeft" data-delay="400">
					<a href="#"><h3 class="uppercase" style="font-weight: 600;">Online Bill Pay</h3></a>
					<p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities.&rarr;</p>
				</div>
				<i class="icon-medical-i-billing bgicon"></i>
			</div>

			<div class="clear"></div>

		</div>

	</div>

</section><!-- #content end -->
@endsection