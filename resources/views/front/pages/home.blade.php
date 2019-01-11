@extends('front.layouts.master')

@section('content')

<!-- Service Section -->
    <div class="section section-services section-pad-md">
	    <div class="container">
	        <div class="content row">
				<!-- Feature Row  -->
				<div class="feature-row feature-service-row row feature-s5 center">
					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Feature box -->
						<div class="feature boxed">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{URL::to('front/image/service-f.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h5 class="title">Strategy &amp; Planning</h5>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 odd">
						<!-- Feature box -->
						<div class="feature boxed">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{URL::to('front/image/service-a.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h5 class="title">Consulting Service</h5>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 even">
						<!-- Feature box -->
						<div class="feature boxed">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{URL::to('front/image/service-c.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h5 class="title">Taxes &amp; Efficiency</h5>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
					<div class="col-md-3 col-sm-6  col-xs-6 odd">
						<!-- Feature box -->
						<div class="feature boxed">
							<a href="#">
								<div class="fbox-photo">
									<img src="{{URL::to('front/image/service-b.jpg')}}" alt="">
								</div>
								<div class="fbox-over">
									<h5 class="title">Audit &amp; Evaluation</h5>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
				</div>
				<!-- Feture Row  #end -->
	        </div>
	    </div>
	</div>
	<!-- End Section -->
	
	<!-- Content -->
	<div class="section section-content section-pad bg-light">
		<div class="container">
			<div class="content row">

				<div class="row row-vm">
					<div class="col-sm-6 res-m-bttm pad-r">
						<h2 class="color-primary">We offer a Scaleable and Bespoke service to our every clients.</h2>
						<h4>A Complex market and growth potential.</h4>
						<p>Every business is different and will sed ut perspiciatis unde omnis. Iseste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ollo inventore.</p>
						<h5>Our Model is Bespoke and drive transformation.</h5>
					</div>
					<div class="col-sm-6">
						<img src="{{URL::to('front/image/home-about.jpg')}}" alt="">
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Content -->
	
	<!-- Content -->
	<div class="section section-contents section-pad bg-light">
		<div class="container">
			<div class="content row">
				
				<div class="row">
					<div class="col-sm-6 col-sm-offset-6">
						<h2>We're one of World’s largest Consulting Company throughout the USA, Australia and Canada.</h2>
						<p>Throughout our history of serving nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Ut enim ad minim veniam, quis nostrud exercation ullamco. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
						<p><a href="#" class="btn-link focus">More about us</a></p>
					</div>
				</div>
				

			</div>
		</div>
		<div class="imagebg">
			<img src="{{URL::to('front/image/plx-light-side.jpg')}}" alt="">
		</div>
	</div>
	<!-- End content -->
	<!-- Call Action -->
	<div class="call-action has-bg bg-secondary" style="background-image: url('{{URL::to("front/image/banner-inner.jpg")}}');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h4>Are you looking for professional advice for your new business?</h4>
                        <a class="btn" href="#">Get A Quote</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Call Action -->
	<!-- Content -->
	<div class="section section-content section-pad">
		<div class="container">
			<div class="content row">

				<div class="row row-column-md">
					<div class="col-md-4 col-sm-6 res-s-bttm">
						<h4 class="color-primary">Innovative Idea Can <br>Grow Your Business.</h4>
						<div class="image"><img src="image/service-e.jpg" alt=""></div>
						<p>Whether you’re looking for tempor, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exertion ullamco laboris.</p>
					</div>
					<div class="col-md-4 col-sm-6 res-m-bttm">
						<h4 class="color-primary">We Provide Our Best <br>Business Consulting Service.</h4>
						<div class="image"><img src="image/service-d.jpg" alt=""></div>
						<p>We put the focus tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exeation ullamco laboris nisi ution aliqu.</p>
					</div>
					<div class="col-md-4 col-sm-12">
						<h4 class="color-primary">We are helping <br>small business to grow big.</h4>
						<p>Our mission tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercation ullamco laboris nisi.</p>
						<ul class="list-style checkmark">
							<li><strong>Financial Analysis</strong></li>
							<li><strong>Marketing Plan</strong></li>
							<li><strong>Business Growth</strong></li>
							<li><strong>Risk Management</strong></li>
							<li><strong>Audit &amp; Assurance</strong></li>
						</ul>
						<p><a href="#" class="block btn btn-alt">Need to talk to us directly?</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->
	
	<!-- Testimonials -->
	<div class="section section-quotes section-pad has-bg dark-filter has-parallax light testimonials" style="background-image: url(image/plx-dark.jpg);">
		<div class="container">
			<div class="content row">

				<h2 class="center">What Our Client Say's</h2>
				<div class="gaps"></div>
				<div class="testimonials center">
					<div id="testimonial" class="quotes-slider wide-sm">
						<div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true">
							<div class="item">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>
										<div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
									</div>
									<div class="profile">
										<h5>John Doe</h5>
										<h6>CEO, Company Name</h6>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<!-- // -->
							<div class="item">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
										<div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
									</div>
									<div class="profile">
										<h5>John Doe</h5>
										<h6>CEO, Company Name</h6>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<!-- // -->
							<div class="item">
								<!-- Each Quotes -->
								<div class="quotes quotes-v1">
									<div class="quotes-text">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
										<div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
									</div>
									<div class="profile">
										<h5>John Doe</h5>
										<h6>CEO, Company Name</h6>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<!-- // -->
						</div>
						<!-- End LoopSlide -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Latest News -->
	<div class="section section-news section-pad">
		<div class="container">
			<div class="content row">
			
				<h2 class="center">Consulting Experts News</h2>
				<div class="gaps"></div>
				<div class="blog-posts">
					<div class="row">
						<!-- // -->
						<div class="post post-boxed col-md-4 col-sm-4 res-s-bttm-lg">
							<div class="post-thumbs">
								<a href="#"><img alt="" src="image/news-a.jpg"></a>
								<div class="post-meta"><span class="pub-date"><strong>29</strong> Sep</span></div>
							</div>
							<div class="post-entry">
								
								<h3><a href="#">Income Increase Shows the Recovery Is Very Much</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip exeo...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
						<!-- // -->
						<div class="post post-boxed col-md-4 col-sm-4 res-s-bttm-lg">
							<div class="post-thumbs">
								<a href="#"><img alt="" src="image/news-b.jpg"></a>
								<div class="post-meta"><span class="pub-date"><strong>12</strong> Sep</span></div>
							</div>
							<div class="post-entry">
								<h3><a href="#">An Economics Nobel awarded for Examining</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip post...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
						<!-- // -->
						<div class="post post-boxed col-md-4 col-sm-4">
							<div class="post-thumbs">
								<a href="#"><img alt="" src="image/news-b.jpg"></a>
								<div class="post-meta"><span class="pub-date"><strong>12</strong> Sep</span></div>
							</div>
							<div class="post-entry">
								<h3><a href="#">An Economics Nobel awarded for Examining</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt laboris nisi ut aliquip post...</p>
								<a class="btn btn-alt" href="#">Read More</a>
							</div>
						</div>
						<!-- // -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Section -->
	<!-- Client logo -->
	<div class="section section-logos section-pad-xs bg-light bdr-top">
		<div class="container">
			<div class="content row">
				<div class="owl-carousel loop logo-carousel style-v2">
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo1.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo2.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo3.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo4.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo5.png"></div>
					<div class="logo-item"><img alt="" width="190" height="82" src="image/cl-logo6.png"></div>
				</div>

			</div>
		</div>	
	</div>
	<!-- End Section -->
	<!-- Call Action -->
	<div class="call-action bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Looking for a greats consultantcy for your new business?</h3>
						<p>Contact us today by submit a business inquiry form online.</p>
						<a class="btn btn-outline" href="get-a-quote.html">Contact Us</a>
					</div>

				</div>
			</div>
		</div>
	</div>
<!-- End Section -->

@endsection