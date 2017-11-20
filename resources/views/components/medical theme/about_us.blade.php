@extends('layouts.app')
@section('content')
<!-- Page Title
============================================= -->
<div class="full_width clearfix">
	<video  autoplay loop style="width: 100%;">
		<source src="{{asset('storage/video/promo.mp4')}}" type="video/mp4">
		Your browser does not support HTML5 video.
	</video>
</div>
{{--<section id="page-title" class="page-title-dark page-title-center nopadding">

	<div class="fslider" data-arrows="false" data-pagi="false" data-animation="fade" data-hover="false">
		<div class="flexslider">
			<div class="slider-wrap">
				<div class="slide"><img src="images/about-us/page-title/1.jpg" alt="Page Title Image"></div>
				<div class="slide"><img src="images/about-us/page-title/2.jpg" alt="Page Title Image"></div>
				<div class="slide"><img src="images/about-us/page-title/3.jpg" alt="Page Title Image"></div>
				<div class="slide"><img src="images/about-us/page-title/4.jpg" alt="Page Title Image"></div>
			</div>

			<div class="vertical-middle" style="z-index: 2;">

				<div class="container clearfix">
					<h1>About Us</h1>
					<span>A Short Page Title Tagline</span>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">About-us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

</section><!-- #page-title end -->--}}

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">
			<div class="col_one_third">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon" data-animate="bounceIn">
						<a href="#"><i class="icon-medical-i-cardiology"></i></a>
					</div>
					<h3>Intensive Care</h3>
					<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
				</div>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
						<a href="#"><i class="icon-medical-i-social-services"></i></a>
					</div>
					<h3>Family Planning</h3>
					<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
				</div>
			</div>

			<div class="col_one_third col_last">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
						<a href="#"><i class="icon-medical-i-neurology"></i></a>
					</div>
					<h3>Expert Consultation</h3>
					<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
				</div>
			</div>

			<div class="clear"></div>

			<div class="col_one_third">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon" data-animate="bounceIn">
						<a href="#"><i class="icon-medical-i-dental"></i></a>
					</div>
					<h3>Dental Sciences</h3>
					<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
				</div>
			</div>

			<div class="col_one_third">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
						<a href="#"><i class="icon-medical-i-imaging-root-category"></i></a>
					</div>
					<h3>X-Ray Services</h3>
					<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
				</div>
			</div>

			<div class="col_one_third col_last">
				<div class="feature-box fbox-plain">
					<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
						<a href="#"><i class="icon-medical-i-ambulance"></i></a>
					</div>
					<h3>24x7 Emergency</h3>
					<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
				</div>
			</div>
		</div>

		<div class="row counters clearfix nobottommargin topmargin-sm common-height">

			<div class="col-md-3 col-sm-6 dark center col-padding" style="background-image: url('images/about-us/counters/1.jpg');">
				<div>
					<div class="overlay"></div>
					<div style="position: relative; z-index: 1;">
						<i class="i-plain i-xlarge divcenter icon-medical-i-surgery"></i>
						<div class="counter counter-lined"><span data-from="100" data-to="42762" data-refresh-interval="50" data-speed="2300"></span></div>
						<h5>of Treatments Made</h5>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 dark center col-padding" style="background-image: url('images/about-us/counters/2.jpg');">
				<div>
					<div class="overlay"></div>
					<div style="position: relative; z-index: 1;">
						<i class="i-plain i-xlarge divcenter icon-medical-i-respiratory"></i>
						<div class="counter counter-lined"><span data-from="3000" data-to="21500" data-refresh-interval="100" data-speed="2500"></span></div>
						<h5>Cured Patients</h5>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 dark center col-padding" style="background-image: url('images/about-us/counters/3.jpg');">
				<div>
					<div class="overlay"></div>
					<div style="position: relative; z-index: 1;">
						<i class="i-plain i-xlarge divcenter icon-medical-i-social-services"></i>
						<div class="counter counter-lined"><span data-from="20" data-to="408" data-refresh-interval="25" data-speed="3500"></span>K</div>
						<h5>Satisfied Customers</h5>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 dark center col-padding" style="background-image: url('images/about-us/counters/4.jpg');">
				<div>
					<div class="overlay"></div>
					<div style="position: relative; z-index: 1;">
						<i class="i-plain i-xlarge divcenter icon-medical-i-ambulance"></i>
						<div class="counter counter-lined"><span data-from="60" data-to="140" data-refresh-interval="20" data-speed="2700"></span></div>
						<h5>ambulance Available</h5>
					</div>
				</div>
			</div>

		</div>

		<div class="section notopmargin" style="background: #FFF url('images/about-us/1.jpg') right center no-repeat / cover;">

			<div class="visible-sm visible-xs" style="background-color: rgba(238,238,238,0.9); position: absolute; top: 0;left: 0; z-index: 1;width: 100%; height: 100%;"></div>

			<div class="container clearfix">

				<div class="row clearfix">
					<div class="col-md-5" data-lightbox="gallery">
						<div class="heading-block nobottomborder bottommargin-sm">
							<h3 class="nott ls0">What We do Actualy</h3>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur necessitatibus placeat numquam enim adipisci nostrum facilis distinctio modi, cupiditate laborum ea eius repellendus? Obcaecati saepe numquam pariatur aliquid, aspernatur necessitatibus dolores harum quos eum esse, laudantium odit alias, iste dolorem!</p>
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="fadeIn">
								<a href="#"><i class="icon-medical-i-womens-health"></i></a>
							</div>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>

						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="fadeIn">
								<a href="#"><i class="icon-medical-i-ultrasound"></i></a>
							</div>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>

						<div class="feature-box fbox-plain bottommargin-sm">
							<div class="fbox-icon" data-animate="fadeIn">
								<a href="#"><i class="icon-medical-i-cath-lab"></i></a>
							</div>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="opening-table">
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

		</div>

		<div class="container clearfix">
			<div class="heading-block center nobottomborder">
				<h3>Meet our Team of Specialists<span>.</span></h3>
				<span>We make sure that your Life are in Good Hands.</span>
			</div>

			<div id="oc-team" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="true" data-items-xxs="1" data-items-xs="2" data-items-md="3" data-items-lg="4">

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/1.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. John Doe</h4><span>Cardiologist</span></div>
					</div>
				</div>

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/2.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Bryan Mcguire</h4><span>Orthopedist</span></div>
					</div>
				</div>

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/3.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Mary Jane</h4><span>Neurologist</span></div>
					</div>
				</div>

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/4.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Silvia Bush</h4><span>Dentist</span></div>
					</div>
				</div>

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/6.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Hugh Baldwin</h4><span>Cardiologist</span></div>
					</div>
				</div>

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/7.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Erika Todd</h4><span>Neurologist</span></div>
					</div>
				</div>

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/8.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Randy Adams</h4><span>Dentist</span></div>
					</div>
				</div>

				<div class="team">
					<div class="team-image">
						<img src="../../demos/medical/images/doctors/9.jpg" alt="Dr. John Doe">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Alan Freeman</h4><span>Eye Specialist</span></div>
					</div>
				</div>

			</div>

		</div>

	</div>

</section><!-- #content end -->
@endsection