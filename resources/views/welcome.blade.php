<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Zehen - Responsive Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--Slider-->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.transitions.css') }}" />

    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />

    <!-- css -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/style.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="wrapper">

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-wrapper">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo text-uppercase" href="index.html">
                    <img src="{{asset('frontend/images/logo-light.png')}}" class="logo-light img-fluid" alt="">
                    <img src="{{asset('frontend/images/logo-dark.png')}}" class="logo-dark img-fluid" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#clients" class="nav-link">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="navbar-button">
                        <a href="{{route('login')}}" class="btn btn-sm btn-custom btn-round">Sign In</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- START HOME -->
        <section class="bg-home" id="home">
            <div class="bg-overlay"></div>
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <!-- start row -->
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="home-content text-center">
                                    <h3 class="home-title line-height_1_4 mt-5 pt-5">We love make things amazing and
                                        simple</h3>
                                    <p class="home-desc line-height_1_8 mt-4 f-16 text-white-50">Feugiat ullamcorper
                                        facilisis phasellus malesuada massa et accumsan porttitor.</p>
                                    <div class="home-button mt-4">
                                        <a href="" class="btn btn-outline btn-round mt-3">How It work</a>
                                        <span class="me-3 ms-3 text-white">or</span>
                                        <a href="" class="btn btn-custom btn-round mt-3">Get Started <i
                                                class="mdi mdi-arrow-right ps-1"></i></a>
                                    </div>
                                    <div class="home-img mt-5">
                                        <img src="{{asset('frontend/images/home-img.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

        <!-- START CLIENT-LOGO -->
        <section class="pt-5 pb-5 client-logo">
            <div class="container">

                <!-- start row -->
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="client-images">
                            <img src="{{asset('frontend/images/clients/1.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="client-images">
                            <img src="{{asset('frontend/images/clients/2.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 ">
                        <div class="client-images">
                            <img src="{{asset('frontend/images/clients/3.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="client-images">
                            <img src="{{asset('frontend/images/clients/4.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
        </section>
        <!-- END CLIENT-LOGO -->

        <!-- START FEATURES -->
        <section class="section bg-light">
            <div class="container">

                <!-- start row -->
                <div class="row vertical-content">
                    <div class="col-lg-6">
                        <div class="features-img text-center mt-4">
                            <img src="{{asset('frontend/images/features/img-1.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <divc class="col-lg-5 offset-lg-1">
                        <div class="features-box">
                            <div class="accordion mt-4" id="accordionExample">
                                <!-- start card -->
                                <div class="card mt-3 p-1 btn-round">
                                    <a data-toggle="collapse" href="#collapseone" class="collapsed"
                                        aria-expanded="false" aria-controls="collapseone">
                                        <div class="card-header" id="headingone">
                                            <h5 class="mb-0">
                                                Where can I get some?
                                            </h5>
                                        </div>
                                    </a>

                                    <div id="collapseone" class="collapse show" aria-labelledby="headingone"
                                        data-parent="#accordionExample">
                                        <div class="card-body pt-0 mt-2">
                                            <p class="mb-0 text-muted">Vulputate lobortis tincidunt porttitor massa
                                                morbi suscipit mollis luctus ornare vulputate.</p>
                                            <div class="mt-3">
                                                <a href="" class="read-more">Read More <i
                                                        class="mdi mdi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <!-- start card -->
                                <div class="card mt-3 p-1 btn-round">
                                    <a data-toggle="collapse" href="#collapsetwo" class="collapsed"
                                        aria-expanded="false" aria-controls="collapsetwo">
                                        <div class="card-header" id="headingtwo">
                                            <h5 class="mb-0">Where does it come from?
                                            </h5>
                                        </div>
                                    </a>
                                    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="mb-0 text-muted">Quisque tincidunt the malesuada aliquet
                                                ullamcorper Suspendisse lectus congue vitae pulvinar.</p>
                                            <div class="mt-3">
                                                <a href="" class="read-more">Read More <i
                                                        class="mdi mdi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <!-- start card -->
                                <div class="card mt-3 p-1 btn-round">
                                    <a data-toggle="collapse" href="#collapsethree" class="collapsed"
                                        aria-expanded="false" aria-controls="collapsethree">
                                        <div class="card-header" id="headingthree">
                                            <h5 class="mb-0">What is Lorem Ipsum?
                                            </h5>
                                        </div>
                                    </a>

                                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="mb-0 text-muted">Pellentesque tincidunt imperdiet metus interdum
                                                ligula tristique aenean facilisis congue ictumst.</p>
                                            <div class="mt-3">
                                                <a href="" class="read-more">Read More <i
                                                        class="mdi mdi-chevron-right"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <!-- start card -->
                                <div class="card mt-3 p-1 btn-round">
                                    <a data-toggle="collapse" href="#collapsefour" class="collapsed"
                                        aria-expanded="false" aria-controls="collapsefour">
                                        <div class="card-header" id="headingfour">
                                            <h5 class="mb-0">Why do we use it?
                                            </h5>
                                        </div>
                                    </a>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="mb-0 text-muted">Vestibulum sodales turpis vestibulum praesent
                                                consectetur magna tortor interdum. </p>
                                            <div class="mt-3">
                                                <a href="" class="read-more">Read More <i
                                                        class="mdi mdi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>

                        </div>
                    </divc>
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- END FEATURES -->

        <!-- START SERVICES -->
        <section class="section bg-white" id="services">
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box text-center">
                            <h3 class="title-heading">Key features of the product</h3>
                            <p class="title-desc text-muted mt-3">Condimentum auctor ante sed interdum proin viverra
                                sed lectus et iaculis maecenas tortor lorem bibendum pretium.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="services-box text-center mt-4">
                            <div class="services-icon">
                                <i class="mdi mdi-desktop-mac-dashboard text-custom"></i>
                            </div>
                            <h5 class="mt-3">Web design</h5>
                            <p class="text-muted mt-3 mb-0">Donec erat eget ante efficitur eleifend dolor scelerisque
                                erat magna justo carsras condimentum mauada.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services-box text-center mt-4">
                            <div class="services-icon">
                                <i class="mdi mdi-web text-custom"></i>
                            </div>
                            <h5 class="mt-3">Production</h5>
                            <p class="text-muted mt-3 mb-0">Maecenas viverra ornare sed maximus libero maximus on
                                faucibus elit efficitur purus sollicitudin libero.</p>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services-box text-center mt-4">
                            <div class="services-icon">
                                <i class="mdi mdi-responsive text-custom"></i>
                            </div>
                            <h5 class="mt-3">Responsive design</h5>
                            <p class="text-muted mt-3 mb-0">Suspendisse nirtbh finibus efficitur viverra masuada massa
                                mauris suscipit purus pellentesque pharetra.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="services-box text-center mt-4">
                            <div class="services-icon">
                                <i class="mdi mdi-cellphone-android text-custom"></i>
                            </div>
                            <h5 class="mt-3">Mobile app</h5>
                            <p class="text-muted mt-3 mb-0">Quisque iaculis magna the dolor sollicitudin efficitur eget
                                nirak the lectus praesent consectetur lacinia.</p>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services-box text-center mt-4">
                            <div class="services-icon">
                                <i class="mdi mdi-code-tags text-custom"></i>
                            </div>
                            <h5 class="mt-3">Coding</h5>
                            <p class="text-muted mt-3 mb-0">Vivamus dolor hendrerit tempor elementum Interdum et fames
                                ac ante ipsum primis malesuada in faucibus.</p>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services-box text-center mt-4">
                            <div class="services-icon">
                                <i class="mdi mdi-lifebuoy text-custom"></i>
                            </div>
                            <h5 class="mt-3">Support</h5>
                            <p class="text-muted mt-3 mb-0">Suspendisse nunc lacus tincidunt telealus pelesques
                                facilisis cursus mollis tidunt condimentum montes.</p>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
        </section>
        <!-- END SERVICES -->

        <!-- START COUNTER  -->
        <section class="section bg-cta">
            <div class="container">
                <!-- start row -->
                <div class="row" id="counter">
                    <div class="col-lg-3">
                        <div class="counter-box text-center">
                            <h2 class="counter-count text-white mt-3"> <span class="counter-value"
                                    data-count="1854">1326</span></h2>
                            <p class="mt-3 text-white-50 mb-0">Projects Finished</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="counter-box text-center">
                            <h2 class="counter-count text-white mt-3"> <span class="counter-value"
                                    data-count="3254">2679</span></h2>
                            <p class="mt-3 text-white-50 mb-0">Line of Coding</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="counter-box text-center">
                            <h2 class="counter-count text-white mt-3"> <span class="counter-value"
                                    data-count="584">252</span></h2>
                            <p class="mt-3 text-white-50 mb-0">Award Won</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="counter-box text-center">
                            <h2 class="counter-count text-white mt-3"> <span class="counter-value"
                                    data-count="1713">1250</span></h2>
                            <p class="mt-3 text-white-50 mb-0">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>

        </section>
        <!-- END COUNTER -->

        <!-- START CLIENT -->
        <section class="section bg-light" id="clients">
            <div class="container">

                <!-- start row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box text-center">
                            <h3 class="title-heading">Our Client</h3>
                            <p class="title-desc text-muted mt-3">It is a long established fact that a reader will be
                                of a page when established fact looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8">
                        <div id="owl-demo" class="owl-carousel">
                            <div class="text-center mt-4">
                                <div class="client-img">
                                    <img src="{{asset('frontend/images/user/img-1.jpg')}}" alt="" class="img-fluid rounded-circle">
                                </div>
                                <p class="text-muted client-txt mt-4">The European languages are members of the same
                                    family Their separate existence is a myth For science music, sport, etc, europe
                                    their pronunciation and their most European languages common book is a treatise on
                                    the theory book is the theory of popular words.</p>
                                <div class="client-info mt-4">
                                    <h6 class="client-user-name">James Sizemore</h6>
                                    <p>
                                        Job position
                                        <a href="" class="client-position text-custom">Web Development</a>
                                    </p>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <div class="client-img">
                                    <img src="{{asset('frontend/images/user/img-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                </div>
                                <p class="text-muted client-txt mt-4">The European languages are members of the same
                                    family Their separate existence is a myth For science music, sport, etc, europe
                                    their pronunciation and their most European languages common book is a treatise on
                                    the theory book is the theory of popular words.</p>
                                <div class="client-info mt-4">
                                    <h6 class="client-user-name">Thomas Rudnick</h6>
                                    <p>
                                        Job position
                                        <a href="" class="client-position text-custom">Creative Design</a>
                                    </p>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <div class="client-img">
                                    <img src="{{asset('frontend/images/user/img-3.jpg')}}" alt="" class="img-fluid rounded-circle">
                                </div>
                                <p class="text-muted client-txt mt-4">The European languages are members of the same
                                    family Their separate existence is a myth For science music, sport, etc, europe
                                    their pronunciation and their most European languages common book is a treatise on
                                    the theory book is the theory of popular words.</p>
                                <div class="client-info mt-4">
                                    <h6 class="client-user-name">Naomi Smith</h6>
                                    <p>
                                        Job position
                                        <a href="" class="client-position text-custom">Marketing Services</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- END CLIENT -->

        <!-- START PRICING -->
        <section class="section bg-white" id="pricing">
            <div class="container">

                <!-- start row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box text-center">
                            <h3 class="title-heading">Pricing Plan</h3>
                            <p class="title-desc text-muted mt-3">Condimentum auctor ante sed interdum proin viverra
                                sed lectus et iaculis maecenas tortor lorem bibendum pretium.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="price-box mt-4">
                            <div class="pricing-name text-center">
                                <h4>Deluxe</h4>
                                <span class="text-muted">Perfect For Freelancer</span>
                            </div>

                            <div class="plan-price text-center mt-4">
                                <h2 class="text-custom"><span class="dolar">$</span> 59 <span>Per/month</span></h2>
                            </div>

                            <div class="price-features mt-5 ms-4">
                                <p><i class="mdi mdi-check"></i> Bandwidth: <span class="font-weight-bold">1GB</span>
                                </p>
                                <p><i class="mdi mdi-check"></i> Onlinespace: <span
                                        class="font-weight-bold">500MB</span></p>
                                <p><i class="mdi mdi-close"></i> Support: <span class="font-weight-bold">No</span></p>
                                <p><i class="mdi mdi-check"></i> Domain: <span class="font-weight-bold">1</span></p>
                                <p><i class="mdi mdi-check"></i> Hidden Fees: <span class="font-weight-bold">No</span>
                                </p>
                            </div>
                            <div class="text-center mt-5">
                                <a href="#" class="btn btn-custom btn-round">Join Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="price-box mt-4">
                            <div class="pricing-name text-center">
                                <h4>Economy</h4>
                                <span class="text-muted">Perfect For Freelancer</span>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h2 class="text-custom"><span class="dolar">$</span> 79 <span>Per/month</span></h2>
                            </div>
                            <div class="price-features mt-5 ms-4">
                                <p><i class="mdi mdi-check"></i> Bandwidth: <span class="font-weight-bold">2GB</span>
                                </p>
                                <p><i class="mdi mdi-check"></i> Onlinespace: <span
                                        class="font-weight-bold">1GB</span></p>
                                <p><i class="mdi mdi-check"></i> Support: <span class="font-weight-bold">Yes</span>
                                </p>
                                <p><i class="mdi mdi-check"></i> Domain: <span class="font-weight-bold">3</span></p>
                                <p><i class="mdi mdi-check"></i> Hidden Fees: <span class="font-weight-bold">No</span>
                                </p>
                            </div>
                            <div class="text-center mt-5">
                                <a href="#" class="btn btn-custom btn-round">Join Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="price-box mt-4">
                            <div class="pricing-name text-center">
                                <h4>Ultimate</h4>
                                <span class="text-muted">Perfect For Freelancer</span>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h2 class="text-custom"><span class="dolar">$</span> 99 <span>Per/month</span></h2>
                            </div>
                            <div class="price-features mt-5 ms-4">
                                <p><i class="mdi mdi-check"></i> Bandwidth: <span class="font-weight-bold">3GB</span>
                                </p>
                                <p><i class="mdi mdi-check"></i> Onlinespace: <span
                                        class="font-weight-bold">2GB</span></p>
                                <p><i class="mdi mdi-check"></i> Support: <span class="font-weight-bold">Yes</span>
                                </p>
                                <p><i class="mdi mdi-check"></i> Domain: <span
                                        class="font-weight-bold">Unlimited</span></p>
                                <p><i class="mdi mdi-check"></i> Hidden Fees: <span class="font-weight-bold">No</span>
                                </p>
                            </div>
                            <div class="text-center mt-5">
                                <a href="#" class="btn btn-custom btn-round">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>

        </section>
        <!-- END PRICING -->

        <!-- START CTA -->
        <section class="section bg-cta">
            <div class="container">
                <!-- start row -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="cta-box text-center">
                            <h3 class="cta-title text-white">Get started Today!</h3>
                            <p class="cta-desc text-white-50 mt-4 f-17">Aenean blandit metus erat at semper libero
                                venenatis eu donec mattis ex convSelected projectis dolor tempus.</p>
                            <div class="mt-5">
                                <a href="" class="btn btn-custom btn-rounded">Request Free Demo <i
                                        class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- END CTA -->

        <!-- START BLOG -->
        <section class="section bg-white">
            <div class="container">

                <!-- start row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box text-center">
                            <h3 class="title-heading">Latest News</h3>
                            <p class="title-desc text-muted mt-3">Condimentum auctor ante sed interdum proin viverra
                                sed lectus et iaculis maecenas tortor lorem bibendum pretium.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- start row -->

                <div class="row mt-5 pt-3">
                    <div class="col-lg-4">
                        <div class="blog-box mt-4">
                            <div class="blog-img">
                                <img src="{{asset('frontend/images/blog/img-1.jpg')}}" class="img-fluid rounded" alt="">
                            </div>
                            <div class="blog-content mt-3">
                                <h5 class="blog-title f-17"><a href="">Pelesque sodales diam facilisis
                                        dolor.</a></h5>
                                <div class="mt-3">
                                    <p class="text-muted"><i class="mdi mdi-account pe-1"></i> Patrick Newton <span
                                            class="ps-4"><i class="mdi mdi-calendar-today pe-1"></i></span>
                                        08-07-2018</p>

                                    <div class="mt-3">
                                        <a href="" class="read-more">Read More <i
                                                class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog-box mt-4">
                            <div class="blog-img">
                                <img src="{{asset('frontend/images/blog/img-2.jpg')}}" class="img-fluid rounded" alt="">
                            </div>
                            <div class="blog-content mt-3">
                                <h5 class="blog-title f-17"><a href="">Molestie lacus lobortis bibendum
                                        amet.</a></h5>
                                <div class="mt-3">
                                    <p class="text-muted"><i class="mdi mdi-account pe-1"></i> Patrick Newton <span
                                            class="ps-4"><i class="mdi mdi-calendar-today pe-1"></i></span>
                                        12-05-2018</p>

                                    <div class="mt-3">
                                        <a href="" class="read-more">Read More <i
                                                class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog-box mt-4">
                            <div class="blog-img">
                                <img src="{{asset('frontend/images/blog/img-3.jpg')}}" class="img-fluid rounded" alt="">
                            </div>
                            <div class="blog-content mt-3">
                                <h5 class="blog-title f-17"><a href="">Convallis praesent dignissim dolor.</a>
                                </h5>
                                <div class="mt-3">
                                    <p class="text-muted"><i class="mdi mdi-account pe-1"></i> Patrick Newton <span
                                            class="ps-3"><i class="mdi mdi-calendar-today pe-1"></i></span>
                                        29-09-2018</p>
                                    <div class="mt-3">
                                        <a href="" class="read-more">Read More <i
                                                class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- end row -->
            </div>
        </section>
        <!-- END BLOG -->

        <!-- START CONTACT -->
        <section class="section bg-light" id="contact">
            <div class="container">

                <!-- start row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box text-center">
                            <h3 class="title-heading">Get In Touch</h3>
                            <p class="title-desc text-muted mt-3">Condimentum auctor ante sed interdum proin viverra
                                sed lectus et iaculis maecenas tortor lorem bibendum pretium.</p>
                        </div>
                    </div>
                </div>

                <!-- end row -->

                <!-- start row -->

                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="custom-form mt-4">
                            <div id="message"></div>
                            <form method="post" action="#" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input name="name" id="name" type="text" class="form-control"
                                                placeholder="Your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control"
                                                placeholder="Your email...">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Your Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="comments">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-custom btn-round" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>

                <!-- end row -->
            </div>
        </section>
        <!-- END CONTACT -->

        <!-- START FOOTER -->
        <footer class="section bg-home">
            <div class="container">

                <!-- start row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-contant">
                            <img src="{{asset('frontend/images/logo-light.png')}}" class="" alt="">
                            <p class="mt-4 text-muted">Business it will repudiated and annoyances wise accepted man
                                therefore always in these matters pleasures avoid worse plans.</p>
                            <div class="mt-4">
                                <ul class="list-inline footer-social">
                                    <li class="list-inline-item">
                                        <a href="#" class="rounded-circle">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#" class="rounded-circle">
                                            <i class="mdi mdi-dribbble"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#" class="rounded-circle">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#" class="rounded-circle">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="footer-contant">
                            <h6 class="footer-title f-15">Ressources</h6>
                            <ul class="list-unstyled footer-link mt-4">
                                <li><a href="">Monitoring Grader </a></li>
                                <li><a href="">Video Tutorial</a></li>
                                <li><a href="">Term & Service</a></li>
                                <li><a href="">Community</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="footer-contant">
                            <h6 class="footer-title f-15">Workflows</h6>
                            <ul class="list-unstyled footer-link mt-4">
                                <li><a href="">Manegement</a></li>
                                <li><a href="">Reporting</a></li>
                                <li><a href="">Tracking </a></li>
                                <li><a href="">All Users</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-contant">
                            <h6 class="footer-title f-15">Help</h6>
                            <ul class="list-unstyled footer-link mt-4">
                                <li><a href="">Terms of Services</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Sign Up </a></li>
                                <li><a href="">Login</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <div class="text-center mt-5">
                <p class="footer-alt mb-0">© 2019 - 2020 Zehen. Design by Themesdesign</p>
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- javascript -->
        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('frontend/js/scrollspy.min.js') }}"></script>
        <!-- Owl Carousel -->
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/counter.init.js') }}"></script>
        <!--Yt Plyer-->
        <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('frontend/js/app.js') }}"></script>
    </div>
</body>

</html>
