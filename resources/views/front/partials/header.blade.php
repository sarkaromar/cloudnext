	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
            <!-- Topbar -->
            <div class="topbar bg-light">
                <div class="container">
                    <div class="row">
                        <div class="top-aside top-left clearfix">
                            <ul class="top-contact clearfix">
                                <li class="t-email t-email1">
                                    <em class="fa fa-envelope-o" aria-hidden="true"></em>
                                    <span><a href="#">care@consulting.com</a></span>
                                </li>
                                <li class="t-phone t-phone1">
                                    <em class="fa fa-phone" aria-hidden="true"></em>
                                    <span>+123-456-789</span>
                                </li>
                            </ul>
                        </div>
                        <div class="top-aside top-right clearfix">
                            <ul class="social clearfix">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #end Topbar -->
            <!-- Navbar -->
            <div class="navbar navbar-primary">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img class="logo logo-dark" alt="" src="{{URL::to('front/image/logo.png')}}">
                        <img class="logo logo-light" alt="" src="{{URL::to('front/image/logo.png')}}">
                    </a>
                    <!-- #end Logo -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Q-Button for Mobile -->
                        <div class="quote-btn"><a class="btn" href="get-a-quote.html">Free Consultant</a></div>
                    </div>
                    <!-- MainNav -->
                    <nav class="navbar-collapse collapse" id="mainnav">
                        <ul class="nav navbar-nav no-expanded">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="dropdown">
                                <a href="#">Company</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('about') }}">About Pages</a></li>
                                    <li><a href="{{ route('team') }}">Team</a></li>
                                    <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                                    <li><a href="{{ route('whyus') }}">Wwy Choose Us</a></li>
                                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="services.html" class="dropdown-toggle">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('it_consulting') }}">IT CONSULTING</a></li>
                                    <li><a href="{{ route('biz_automation') }}">BUSINESS AUTOMATION</a></li>
                                    <li><a href="{{ route('software_dev') }}">CUSTOM SOFTWARE DEVELOPMENT</a></li>
                                    <li><a href="{{ route('data_analysis') }}">DATA ANALYTICS</a></li>
                                    <li><a href="{{ route('web_portal') }}">WEB PORTALS</a></li>
                                    <li><a href="{{ route('ecommerce') }}">ECOMMERCE</a></li>
                                    <li><a href="{{ route('outcourced') }}">OUTSOURCED PRODUCT DEVELOPMENT</a></li>
                                    <li><a href="{{ route('mobile_app') }}">MOBILE APPLICATION DEVELOPMENT</a></li>
                                    <li><a href="{{ route('web_apps_dev') }}">WEB APPLICATION DEVELOPMENT</a></li>
                                    <li><a href="{{ route('qa') }}">SOFTWARE TESTING & QA</a></li>
                                    <li><a href="{{ route('image_analysis') }}">IMAGE ANALYSIS</a></li>
                                    <li><a href="{{ route('networking') }}">NETWORKING</a></li>
                                    <li><a href="{{ route('security') }}">SECURITY INTELLIGENCE</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('products') }}">PRODUCTS</a></li>
                            <li><a href="{{ route('portfolio') }}">PORTFOLIO</a></li>
                            <li><a href="{{ route('news') }}">NEWS</a></li>
                            <li><a href="{{ route('contact') }}">CONTACT</a></li>
                            <li class="quote-btn"><a class="btn" href="{{ route('free_consultant') }}">Free Consultant</a></li>
                        </ul>
                    </nav>
                    <!-- #end MainNav -->
                </div>
            </div>
            <!-- #end Navbar -->
            @if(Request::is('/'))
            <!-- Banner/Slider -->
            <div id="slider" class="banner banner-slider carousel slide carousel-fade">
                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <!-- // -->
                    <div class="item active">
                        <div class="fill" style='background:url("{{URL::to('front/image/slider-a.jpg')}}");'>
                            <div class="banner-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="banner-text al-left pos-left dark">
                                            <div class="animated fadeInRight">
                                                <h2><strong class="color-heading">We Are Shaping the Future for You</strong></h2>
                                                <p class="lead">No matter how complex your business questions, we have the capabilities and experience to deliver the answers you need to move forward.</p>
                                                <div class="banner-cta">
                                                    <a class="btn" href="#">Learn More</a>
                                                    <a class="btn btn-alt btn-outline" href="#">Our Services</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="item">
                        <div class="fill" style='background:url("{{URL::to('front/image/slider-b.jpg')}}");'>
                            <div class="banner-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="banner-text al-left pos-left dark">
                                            <div class="animated fadeInRight">
                                                <h2><strong class="color-heading">The Fastest way to Growing Business</strong></h2>
                                                <p class="lead">As the world’s largest consulting firm, we can help you take decisive action and achieve sustainable results.</p>
                                                <div class="banner-cta">
                                                    <a class="btn btn-alt" href="#">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // -->
                </div>
                <!-- Arrow Controls -->
                <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- #end Banner/Slider -->
            @else
            
            <!-- Banner -->
		    <div class="banner banner-static has-bg">
                <div class="banner-cpn">
                    <div class="container">
                        <div class="content row">
    
                            <div class="banner-text">
                                <h1 class="page-title">About Consulting Expert</h1>
                                <p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae dicta aute irure dolor nostrud .</p>
                            </div>
                            <div class="page-breadcrumb">
                                <ul class="breadcrumb">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="active"><span>About Us</span></li>
                                </ul>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="banner-bg imagebg">
                    <img src="image/banner-inner.jpg" alt="" />
                </div>
            </div>
            <!-- End Banner -->
            @endif
        </header>
        <!-- End Header -->