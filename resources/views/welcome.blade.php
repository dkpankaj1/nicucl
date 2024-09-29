<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>NICE51</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700%7CSource+Sans+Pro:300,400,600"
        rel="stylesheet">

    <!-- ==== Font Awesome ==== -->
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- ==== jQuery UI ==== -->
    <link href="{{ asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- ==== Bootstrap ==== -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- ==== jQuery FakeLoader Plugin ==== -->
    <link href="{{ asset('frontend/css/fakeLoader.min.css') }}" rel="stylesheet">

    <!-- ==== jQuery Timepicker Plugin ==== -->
    <link href="{{ asset('frontend/css/jquery.timepicker.min.css') }}" rel="stylesheet">

    <!-- ==== jQuery Magnific Popup Plugin ==== -->
    <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">

    <!-- ==== Main Stylesheet ==== -->
    <link href="{{ asset('frontend/style.css') }}" rel="stylesheet">

    <!-- ==== Responsive Stylesheet ==== -->
    <link href="{{ asset('frontend/css/responsive-style.css') }}" rel="stylesheet">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link href="{{ asset('frontend/css/colors/color-1.css') }}" rel="stylesheet" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader bg--color-theme"></div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-dark">
                <div class="container">
                    <!-- Header Topbar Links Start -->
                    <ul class="nav links float--left hidden-xxs">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                    <!-- Header Topbar Links End -->

                    <!-- Header Topbar Cart Start -->
                    <ul class="nav cart float--right">
                        <li><a href="cart.html"><i class="fa fa-shopping-basket"></i> 3</a></li>
                    </ul>
                    <!-- Header Topbar Cart End -->

                    <!-- Header Topbar Social Start -->
                    <ul class="nav social float--right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <!-- Header Topbar Social End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Top Start -->
            <div class="header--navbar-top">
                <div class="container">
                    <!-- Logo Start -->
                    <div class="logo float--left">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}"
                                        alt="Quick Fix Logo" data-rjs="2"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Logo End -->

                    <div class="float--right">
                        <!-- Header Navbar Top Info Start -->
                        <div class="header--navbar-top-info float--left">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <ul class="nav">
                                        <li>
                                            <div class="icon text--primary">
                                                <i class="fa fa-vcard-o"></i>
                                            </div>
                                            <div class="content">
                                                <p><a href="tel:+055997766554412">+055997766554412</a></p>
                                                <p><a href="mailto:example@example.com">example@example.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon text--primary">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="content">
                                                <p>114, free street,</p>
                                                <p>Dhaka, Bangladesh.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon text--primary">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="content">
                                                <p>Mon - Sat (09 am to 08 pm)</p>
                                                <p class="text--primary">(Sunday Closed)</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Header Navbar Top Info End -->

                        <!-- Header Navbar Top Button Start -->
                        <div class="header--navbar-top-btn float--left">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <a href="{{ route('login') }}" class="btn btn-default">Sign up/ Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Header Navbar Top Button End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar Top End -->

            <!-- Header Navbar Start -->
            <nav class="header--navbar navbar" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#headerNav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links nav navbar-nav font--secondary">
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Commission Chart</a></li>
                            <li><a href="#">Media & News</a></li>
                            <li><a href="#">Training</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu font--primary">
                                    <li><a href="#">Aeps</a></li>
                                    <li><a href="#">Money Transfer</a></li>
                                    <li><a href="#">Cash Deposit</a></li>
                                    <li><a href="#">Adhar Pay</a></li>
                                    <li><a href="#">CSP Banking</a></li>
                                    <li><a href="#">Loan Apply</a></li>
                                    <li><a href="#">Bank AC</a></li>
                                    <li><a href="#">Demat Account</a></li>
                                    <li><a href="#">Mini ATM</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Apply<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu font--primary">
                                    <li><a href="#">For Franchise</a></li>
                                    <li><a href="#">For Job</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <!-- Header Nav Links End -->
                    </div>
                    <!-- Header Navbar Search End -->
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Banner Section Start -->
        <div id="banner" class="banner--section pd--80-0">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true">
                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{ asset('frontend/img/banner-img/slider-bg-01.jpg') }}">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <!-- Banner Content Start -->
                                    <div class="banner--content col-md-8">
                                        <h1>Bill Payment Services</h1>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, illo
                                            recusandae laudantium perferendis doloribus sunt id minima, incidunt tenetur
                                            sint tempore dignissimos. Laudantium incidunt rerum, neque magnam sint
                                            repudiandae nulla.</p>

                                        <a href="#" class="btn btn-default">Learn More</a>
                                    </div>
                                    <!-- Banner Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{ asset('frontend/img/banner-img/slider-bg-02.jpg') }}">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <!-- Banner Content Start -->
                                    <div class="banner--content col-md-8">
                                        <h1>Government Services</h1>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, illo
                                            recusandae laudantium perferendis doloribus sunt id minima, incidunt tenetur
                                            sint tempore dignissimos. Laudantium incidunt rerum, neque magnam sint
                                            repudiandae nulla.</p>

                                        <a href="#" class="btn btn-default">Learn More</a>
                                    </div>
                                    <!-- Banner Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{ asset('frontend/img/banner-img/slider-bg-03.jpg') }}">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <!-- Banner Content Start -->
                                    <div class="banner--content col-md-8">
                                        <h1>Banking Services</h1>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, illo
                                            recusandae laudantium perferendis doloribus sunt id minima, incidunt tenetur
                                            sint tempore dignissimos. Laudantium incidunt rerum, neque magnam sint
                                            repudiandae nulla.</p>

                                        <a href="#" class="btn btn-default">Learn More</a>
                                    </div>
                                    <!-- Banner Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->

        </div>
        <!-- Banner Section End -->


        <!-- Services Section Start -->
        <div class="services--section pd--100-0 bg--color-lightgray">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">Our Services</h2>

                    <p>What We Do</p>
                </div>
                <!-- Section Title End -->

                <div class="row text-center">
                    <!-- Service Image Start -->
                    <div class="service--img col-md-4 col-sm-8">
                        <div class="service--img-inner"
                            data-bg-img="{{ asset('frontend/img/services-img/service-img-bg.png') }}">
                            <!-- Tab Content Start -->
                            <div class="tab-content">
                                <!-- Tab Pane Start -->
                                <div class="tab-pane active" id="serviceImg01">
                                    <img src="{{ asset('frontend/img/services-img/service-img-01.jpg') }}"
                                        alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg02">
                                    <img src="{{ asset('frontend/img/services-img/service-img-02.jpg') }}"
                                        alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg03">
                                    <img src="{{ asset('frontend/img/services-img/service-img-03.jpg') }}"
                                        alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg04">
                                    <img src="{{ asset('frontend/img/services-img/service-img-04.jpg') }}"
                                        alt="">
                                </div>
                                <!-- Tab Pane End -->
                            </div>
                            <!-- Tab Content End -->
                        </div>
                    </div>
                    <!-- Service Image End -->

                    <!-- Service Items Start -->
                    <div class="service--items col-md-4 col-sm-6 text-right">
                        <!-- Service Item Start -->
                        <div class="service--item active">
                            <div class="dot" data-position-top="16px" data-position-right="-129px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg01">Company Registration
                                    Services</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>

                            <a href="#" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="13px" data-position-right="-54px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg01">Bill Payment
                                    Services</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>

                            <a href="#" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Service Items End -->

                    <!-- Service Items Start -->
                    <div class="service--items col-md-4 col-sm-6 float--right">
                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="16px" data-position-left="-129px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg01">Travel Booking
                                    Services</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>

                            <a href="#" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="13px" data-position-left="-54px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg01">Tax Filing
                                    Services</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>

                            <a href="#" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Service Items End -->
                </div>

                <!-- Section Footer Start -->
                <div class="section--footer text-center">
                    <a href="#" class="btn btn-default">View All Services</a>
                </div>
                <!-- Section Footer End -->
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Features Section Start -->
        <div class="features--section pd--100-0-40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">Why Choose Us</h2>

                    <p>Some of Our Features</p>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-01.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">We Are Professional</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-02.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Friendly Service</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-03.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">No Fix No Fees</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-04.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Well Reputation</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-05.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Free Diagnostics</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-06.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Low Price Guarantee</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-07.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Quick Repair Process</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="{{ asset('frontend/img/features-img/icon-08.png') }}" alt=""
                                data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">30 Days Warantee</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <!-- Counter Section Start -->
        <div class="counter--section pd--100-0-40" data-bg-img="{{ asset('frontend/img/counter-img/bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/counter-img/icon-01.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Happy Clients</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">94816</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->

                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/counter-img/icon-02.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Completed Deals</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">102370</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->

                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/counter-img/icon-03.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Running Procet</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">579</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->

                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/counter-img/icon-04.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Award Winning</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">3226</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
        <!-- Counter Section End -->

        <!-- Testimonial Section Start -->
        <div class="testimonial--section pd--100-0" data-bg-img="{{ asset('frontend/img/testimonial-img/bg.jpg') }}">
            <!-- Testimonial Slider Wrapper Start -->
            <div class="testimonial--slider-wrapper bg--overlay">
                <div class="container">
                    <!-- Section Title Start -->
                    <div class="section--title left">
                        <h2 class="h2">Satisfied Client’s</h2>

                        <p>What Our Client’s Say</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Testimonial Slider Start -->
                            <div class="testimonial--slider owl-carousel" data-owl-dots="true">
                                <!-- Testimonial Item Start -->
                                <div class="testimonial--item">
                                    <div class="testimonial--content">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. If you are
                                                going to use a passage rassing hidden.</p>
                                        </blockquote>
                                    </div>

                                    <div class="testimonial--rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>

                                    <div class="testimonial--info">
                                        <div class="img">
                                            <img src="img/testimonial-img/client-01.png" alt=""
                                                class="img-circle" data-rjs="2">
                                        </div>

                                        <div class="content">
                                            <h3 class="h5">Jane Doe</h3>

                                            <p>Professor, United States</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Item End -->

                                <!-- Testimonial Item Start -->
                                <div class="testimonial--item">
                                    <div class="testimonial--content">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. If you are
                                                going to use a passage rassing hidden.</p>
                                        </blockquote>
                                    </div>

                                    <div class="testimonial--rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>

                                    <div class="testimonial--info">
                                        <div class="img">
                                            <img src="img/testimonial-img/client-02.png" alt=""
                                                class="img-circle" data-rjs="2">
                                        </div>

                                        <div class="content">
                                            <h3 class="h5">Jane Roe</h3>

                                            <p>Professor, United States</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Item End -->

                                <!-- Testimonial Item Start -->
                                <div class="testimonial--item">
                                    <div class="testimonial--content">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. If you are
                                                going to use a passage rassing hidden.</p>
                                        </blockquote>
                                    </div>

                                    <div class="testimonial--rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>

                                    <div class="testimonial--info">
                                        <div class="img">
                                            <img src="img/testimonial-img/client-03.png" alt=""
                                                class="img-circle" data-rjs="2">
                                        </div>

                                        <div class="content">
                                            <h3 class="h5">Janie Doe</h3>

                                            <p>Professor, United States</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Item End -->
                            </div>
                            <!-- Testimonial Slider End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Slider Wrapper End -->

            <!-- Testimonial Video Start -->
            <div class="testimonial--video bg--overlay">
                <div class="vc--parent">
                    <div class="vc--child">
                        <div class="container-fluid">
                            <div class="col-md-6 col-md-offset-6">
                                <!-- Testimonial Video Content Start -->
                                <div class="testimonial--video-content text-center">
                                    <a href="https://www.youtube.com/watch?v=2GqExKSwTEA" class="play-btn"
                                        data-popup="video"><i class="fa fa-play"></i></a>

                                    <h3 class="h3">Watch Video Tour</h3>
                                </div>
                                <!-- Testimonial Video Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Video End -->
        </div>
        <!-- Testimonial Section End -->

        <!-- Call To Action Section Start -->
        <div class="cta--section bg--color-darkgray">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Call To Action Content Start -->
                        <div class="cta--content">
                            <h2 class="h3">Looking For A Fast &amp; Reliable Service</h2>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nemo consectetur minima? Ad, quidem sapiente necessitatibus voluptatum eius odio temporibus!</p>
                        </div>
                        <!-- Call To Action Content Start -->
                    </div>

                    <div class="col-md-3">
                        <!-- Call To Action Button Start -->
                        <div class="cta--btn">
                            <a href="{{route('login')}}" class="btn btn-default">Get Free Estimate</a>
                        </div>
                        <!-- Call To Action Button Start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action Section End -->

        <!-- Footer Section Start -->
        <div class="footer--section bg--color-dark">
            <div class="footer--copyright-border"></div>

            <div class="container bg--overlay">
                <div class="row reset--gutter">
                    <div class="col-md-3 bg--color-theme bg--overlay">
                        <!-- Footer About Start -->
                        <div class="footer--about">
                            <div class="logo">
                                <img src="img/footer-logo.png" alt="" data-rjs="2">
                            </div>

                            <div class="content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    available, its really but the majority to use a passage rassing hidden.</p>
                            </div>

                            <div class="link">
                                <a href="about.html">Read More<i class="fa flm fa-angle-double-right"></i></a>
                            </div>

                            <div class="info">
                                <ul class="nav">
                                    <li class="fa-home">House #896, XYZ 24514</li>

                                    <li class="fa-envelope"><a href="mailto:you@yourmail.com">you@yourmail.com</a>,
                                        <a href="mailto:you@yourmail.com">you@yourmail.com</a>
                                    </li>

                                    <li class="fa-phone-square"><a
                                            href="mailto:+055997766554412">+055997766554412</a>, <a
                                            href="mailto:005594765243">005594765243</a></li>

                                    <li class="fa-clock-o">Monday - Satarday (09 am to 08 pm) <span>(Sunday
                                            Closed)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer About End -->
                    </div>

                    <div class="col-md-9">
                        <!-- Footer Widgets Start -->
                        <div class="footer--widgets row">
                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4">Our Services</h2>
                                </div>

                                <!-- Links Wdiget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Aeps</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Money
                                                Transfer</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Cash Deposit</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Adhar Pay</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>CSP Banking</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Loan Apply</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Bank AC
                                                Opening</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Demat
                                                Account</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Mini ATM</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Links Wdiget End -->
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
    
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4">Sign Up For Newsletter</h2>
                                </div>

                                <!-- Subscribe Widget Start -->
                                <div class="subscribe--widget" data-form-validation="true">
                                    <p>Sign Up Our Newsletter to Get Notification Our New Services</p>

                                    <form
                                        action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                                        method="post" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" class="form-control"
                                                placeholder="E-mail Address" required>

                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default active"><i
                                                        class="fa fa-send"></i></button>
                                            </span>
                                        </div>
                                    </form>

                                    <div class="social">
                                        <h3 class="h6">Find Us On</h3>

                                        <ul class="nav">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Subscribe Widget End -->
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <!-- Footer Widgets End -->

                        <!-- Footer Copyright Start -->
                        <div class="footer--copyright font--secondary clearfix">
                            <p class="float--left">&copy; Copyright 2017 | All Rights Reserved</p>
                            <p class="float--right"><a href="#">Quick Fix</a> by Cortex It Solution</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->

        <!-- Back To Top Button Start -->
        <div class="back-to-top-btn">
            <a href="#" class="btn btn-default active"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Back To Top Button End -->
    </div>
    <!-- Wrapper End -->

    <!-- ==== jQuery Library ==== -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>

    <!-- ==== jQuery UI Library ==== -->
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>

    <!-- ==== Bootstrap ==== -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="{{ asset('frontend/js/isotope.min.js') }}"></script>

    <!-- ==== jQuery FakeLoader Plugin ==== -->
    <script src="{{ asset('frontend/js/fakeLoader.min.js') }}"></script>

    <!-- ==== jQuery Sticky Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.sticky.min.js') }}"></script>

    <!-- ==== jQuery Timepicker Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.timepicker.min.js') }}"></script>

    <!-- ==== jQuery Magnific Popup Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- ==== jQuery Directional Hover Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.directional-hover.min.js') }}"></script>

    <!-- ==== jQuery Validation Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>

    <!-- ==== jQuery Form Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.form.min.js') }}"></script>

    <!-- ==== jQuery Waypoints Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>

    <!-- ==== jQuery CounterUp Plugin ==== -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="{{ asset('frontend/js/retina.min.js') }}"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
