@extends('layouts.app')
@section('content')
<!-- Page Title
============================================= -->
<section id="page-title" class="bgcolor page-title-dark">

	<div class="container clearfix">
		<h1>Departments</h1>
		<span>A Short Page Title Tagline</span>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Departments</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="tabs tabs-tb tabs-responsive clearfix" id="tab" data-accordion-style="accordion-bg">

				<ul class="tab-nav clearfix">
					<li><a href="#tabs-1"><i class="icon-medical-i-cardiology"></i> Health Care</a></li>
					<li><a href="#tabs-2"><i class="icon-medical-i-surgery"></i> Outpatient Surgery</a></li>
					<li><a href="#tabs-3"><i class="icon-medical-i-dental"></i> Dentist</a></li>
					<li><a href="#tabs-4"><i class="icon-medical-ophthalmology"></i> Ophthalmology Clinic</a></li>
				</ul>

				<div class="tab-container">
					<div class="tab-content clearfix" id="tabs-1">
						<blockquote class="quote"><p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing</p></blockquote>
						<div class="row clearfix">
							<div class="col-md-4">
								<h4 class="leftmargin-sm">Treatements</h4>
								<ul class="price-table leftmargin-sm nobottommargin">
									<li>
										<span>Tummy Tuck</span>
										<div class="value">$130</div>
									</li>
									<li>
										<span>Liposuction</span>
										<div class="value">$110</div>
									</li>
									<li>
										<span>Colonoscopy</span>
										<div class="value">$90</div>
									</li>
									<li>
										<span>Cardiac ablation</span>
										<div class="value">$173</div>
									</li>
									<li>
										<span>Dermatology</span>
										<div class="value">$124</div>
									</li>
								</ul>
								<a href="#" class="more-link leftmargin-sm bottommargin-sm">View Full Services→</a>
							</div>
							<div class="col-md-4">
								<h4 class="leftmargin-sm">Therapists</h4>
								<ul class="price-table leftmargin-sm nobottommargin">
									<li>
										<span>Tummy Tuck</span>
										<div class="value">$120</div>
									</li>
									<li>
										<span>Liposuction</span>
										<div class="value">$210</div>
									</li>
									<li>
										<span>Heart Patient</span>
										<div class="value">$320</div>
									</li>
									<li>
										<span>Colonoscopy</span>
										<div class="value">$80</div>
									</li>
									<li>
										<span>Cardio</span>
										<div class="value">$42</div>
									</li>
								</ul>
								<a href="#" class="more-link leftmargin-sm bottommargin-sm">View Full Services→</a>
							</div>
							<div class="col-md-4">
								<img src="images/section-bg.jpg" alt="">
							</div>
						</div>
					</div>

					<div class="tab-content clearfix" id="tabs-2">
						<blockquote class="quote"><p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing</p></blockquote>
						<div class="row">
							<div class="col-md-6 bottommargin">

								<div class="team team-list clearfix">
									<div class="team-image">
										<img src="images/doctors/1.jpg" alt="John Doe">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
										<div class="team-content">
											<p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor empower.</p>
										</div>
										<a href="#" class="social-icon si-rounded si-small si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 bottommargin">
								<div class="team team-list clearfix">
									<div class="team-image">
										<img src="images/doctors/4.jpg" alt="Nix Maxwell">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
										<div class="team-content">
											<p>Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.</p>
										</div>
										<a href="#" class="social-icon si-rounded si-small si-forrst">
											<i class="icon-forrst"></i>
											<i class="icon-forrst"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-skype">
											<i class="icon-skype"></i>
											<i class="icon-skype"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-flickr">
											<i class="icon-flickr"></i>
											<i class="icon-flickr"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-content clearfix" id="tabs-3">
						<div class="row clearfix">
							<div class="col-md-7">
								<div class="masonry-thumbs col-4" data-big="4" data-lightbox="gallery">
									<a href="images/gallery/1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/1.jpg" alt="Gallery Thumb 1"></a>
									<a href="images/gallery/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/2.jpg" alt="Gallery Thumb 2"></a>
									<a href="images/gallery/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
									<a href="images/gallery/4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
									<a href="images/gallery/5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
									<a href="images/gallery/6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
									<a href="images/gallery/7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
									<a href="images/gallery/9.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/9.jpg" alt="Gallery Thumb 9"></a>
									<a href="images/gallery/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/10.jpg" alt="Gallery Thumb 10"></a>
									<a href="images/gallery/11.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/11.jpg" alt="Gallery Thumb 11"></a>
									<a href="images/gallery/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/12.jpg" alt="Gallery Thumb 12"></a>
									<a href="images/gallery/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/13.jpg" alt="Gallery Thumb 13"></a>
									<a href="images/gallery/14.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gallery/thumbs/14.jpg" alt="Gallery Thumb 14"></a>
								</div>
							</div>
							<div class="topmargin-sm"></div>
							<div class="col-md-5">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-medical-i-cardiology"></i></a>
									</div>
									<h3>Intensive Care</h3>
									<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
								</div>
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-medical-i-social-services"></i></a>
									</div>
									<h3>Family Planning</h3>
									<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
								</div>
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-medical-i-neurology"></i></a>
									</div>
									<h3>Expert Consultation</h3>
									<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
								</div>
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-medical-i-dental"></i></a>
									</div>
									<h3>Dental Sciences</h3>
									<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content clearfix" id="tabs-4">
						<div class="row clearfix">
							<div class="col-sm-4">
								<div class="accordion clearfix">

									<div class="acctitle"><i class="acc-closed icon-medical-i-kidney color"></i><i class="acc-open icon-medical-kidney color"></i>Kidney Transplant</div>
									<div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

									<div class="acctitle"><i class="acc-closed icon-medical-i-respiratory color"></i><i class="acc-open icon-medical-respiratory color"></i>Pulmonary Treament</div>
									<div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

									<div class="acctitle"><i class="acc-closed icon-medical-i-ear-nose-throat color"></i><i class="acc-open icon-medical-ear-nose-throat color"></i>Ear, Nose &amp; Throat</div>
									<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

									<div class="acctitle"><i class="acc-closed icon-medical-i-cardiology color"></i><i class="acc-open icon-medical-cardiology color"></i>Cardiology Department</div>
									<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

								</div>
							</div>
							<div class="col-sm-4">
								<h4 class="leftmargin-sm">Treatements</h4>
								<ul class="price-table leftmargin-sm nobottommargin">
									<li>
										<span>Tummy Tuck</span>
										<div class="value">$130</div>
									</li>
									<li>
										<span>Liposuction</span>
										<div class="value">$110</div>
									</li>
									<li>
										<span>Colonoscopy</span>
										<div class="value">$90</div>
									</li>
									<li>
										<span>Cardiac ablation</span>
										<div class="value">$173</div>
									</li>
									<li>
										<span>Dermatology</span>
										<div class="value">$124</div>
									</li>
								</ul>
								<a href="#" class="more-link leftmargin-sm bottommargin-sm">View Full Services→</a>
							</div>
							<div class="col-sm-4">
								<h4 class="leftmargin-sm">Therapists</h4>
								<ul class="price-table leftmargin-sm nobottommargin">
									<li>
										<span>Tummy Tuck</span>
										<div class="value">$120</div>
									</li>
									<li>
										<span>Liposuction</span>
										<div class="value">$210</div>
									</li>
									<li>
										<span>Heart Patient</span>
										<div class="value">$320</div>
									</li>
									<li>
										<span>Colonoscopy</span>
										<div class="value">$80</div>
									</li>
									<li>
										<span>Cardio</span>
										<div class="value">$42</div>
									</li>
								</ul>
								<a href="#" class="more-link leftmargin-sm">View Full Services→</a>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>

</section><!-- #content end -->
@endsection