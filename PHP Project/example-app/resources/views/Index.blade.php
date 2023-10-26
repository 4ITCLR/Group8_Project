@extends('layouts.app')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/font.css') }}">
<script src="https://kit.fontawesome.com/7b03628471.js" crossorigin="anonymous"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
<script src="{{ asset('main.js') }}"></script>

<body id="body">
    <!--==========================
      Header
    ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto">ANALOGUE MAFIA</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#body">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Selection</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
      Intro Section
    ============================-->
    <section id="intro">
        <div class="intro-content">
            <h2>SHOP NOW</h2>
            <div>
                <a type="submit" class="btn-get-started scrollto" href="{{ route('camera.login') }}" value="save">Login</a>
                <a href="#portfolio" class="btn-projects scrollto">Cameras</a>
            </div>
        </div>
        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url(../);"></div>
        </div>
    </section><!-- #intro -->

    <main id="main">
        <!--==========================
          About Section
        ============================-->
        <section id="about" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="{{ asset('css/IMG_1453_auto_x2 (1).jpg') }}" alt="">
                    </div>
                    <div class="col-lg-6 content">
                        <h2>Why should you buy a film camera?</h2>
                        <h3>Smartphones and digital cameras may have dominated to the past 20 years, but film cameras have been making a comeback – and not just as inspiration for retro mirrorless cameras</h3>
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> Staying in the moment.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Full immersion.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Timeless looking pictures</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- #about -->

        <!--==========================
          Services Section
        ============================-->
        <section id="services">
            <div class="container">
                <div class="section-header">
                    <h2>Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="fa-solid fa-truck-fast"></i></div>
                            <h4 class="title"><a href="#">Speedy Delivery</a></h4>
                            <p class="description">
                                We're here to make sure your order gets to you in a timely manner. If you need something really fast, we've got you covered. We'll take care of everything from start to finish, so that all you have to worry about is getting your hands on the goods!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class "box wow fadeInRight">
                            <div class="icon"><i class="fa fa-picture-o"></i></div>
                            <h4 class="title"><a href="#">Tutorial</a></h4>
                            <p class="description">
                                We're here to help. If you're looking for assistance with anything, we want to be there for you. We know that the transition from film cameras to another can be stressful, and we want to make sure that your transition is as smooth as possible.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href="#">Warranty</a></h4>
                            <p class="description">
                                We believe in the value of our products, and we're confident that you'll love them as much as we do.
                                That's why we offer a 1-week warranty on all of our products. If you have any problems with your purchase, just let us know and we'll take care of it!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-wrench"></i></div>
                            <h4 class="title"><a href="#">Repair</a></h4>
                            <p class="description">
                                We can help you with your camera repair.
                                We know that sometimes your camera is working perfectly, but sometimes it just isn't. We want to make sure you don't have to worry about it, so we'll take care of the problem when you bring it in.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #services -->

        <!--==========================
          Brands Section
        ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Featured Brands</h2>
                </div>
                <div class="owl-carousel clients-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1850px, 0px, 0px); transition: all 0s ease 0s; width: 3700px;">
                            <!-- Add your brand images here -->
                            <div class="owl-item" style="width: 185px;">
                                <img src="{{ asset('css/olympus-logo.png') }}" alt="">
                            </div>
                            <div class="owl-item" style="width: 185px;">
                                <img src="{{ asset('css/minolta-logo-1.png') }}" alt="">
                            </div>
                            <!-- Repeat this pattern for other brand images -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #clients -->

        <!--==========================
          Camera Section
        ============================-->
        <section id="portfolio" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Cameras</h2>
                    <p>We have cameras that work in any situation and can be used by anyone. Our cameras are made to fit your lifestyle, so you don't have to worry about ever having an uncomfortable experience with your camera again.</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row no-gutters">
                    <!-- Add your camera images here -->
                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/093BD673-677B-4B6F-AA94-3C651256AD7B.png" class="portfolio-popup">
                                <img src="/Images/093BD673-677B-4B6F-AA94-3C651256AD7B.png" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Repeat this pattern for other camera images -->
                </div>
            </div>
        </section><!-- #portfolio -->
    </main>
</body>
@endsection
