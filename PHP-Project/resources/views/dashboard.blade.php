<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @using static System.Net.Mime.MediaTypeNames
@model AnalagoueMafia.Models.AddCustomer
@{
    Layout = null;
    <link rel="stylesheet" href="~/css/login.css" asp-append-version="true" />
    <link rel="stylesheet" href="~/css/font.css" type="text/css">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://kit.fontawesome.com/7b03628471.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <script src="~/main.js"></script>





}



<body id="body">



    <!--==========================
      Header
    ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto">ANALOGUE MAFIA</a></h1>

                <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
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
                <a type="submit" class="btn-get-started scrollto" asp-controller="camera" asp-action="login" value="save">Login</a>
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
                        <img src="./css/IMG_1453_auto_x2 (1).jpg" alt="">
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
                            <h4 class="title"><a href="">Speedy Delivery</a></h4>
                            <p class="description">
                                We're here to make sure your order gets to you in a timely manner. If you need something really fast, we've got you covered. We'll take care of everything from start to finish, so that all you have to worry about is getting your hands on the goods!
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><i class="fa fa-picture-o"></i></div>
                            <h4 class="title"><a href="">Tutorial</a></h4>
                            <p class="description">
                                We're here to help. If you're looking for assistance with anything, we want to be there for you. We know that the transition from film cameras to another can be stressful, and we want to make sure that your transition is as smooth as possible.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href="">Warranty</a></h4>
                            <p class="description">
                                We believe in the value of our products, and we're confident that you'll love them as much as we do.

                                That's why we offer a 1-week warranty on all of our products. If you have any problems with your purchase, just let us know and we'll take care of it!
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-wrench"></i></div>
                            <h4 class="title"><a href="">Repair</a></h4>
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
                            <div class="owl-item cloned" style="width: 185px;">
                                <img src="/css/olympus-logo.png" alt="">

                            </div>
                            <div class="owl-item cloned" style="width: 185px;">
                                <img src="/css/minolta-logo-1.png" alt="">
                            </div>

                            <div class="owl-item cloned" style="width: 185px;">
                                <img src="/css/konica-minolta-logo.png" alt="">
                            </div>

                            <div class="owl-item cloned" style="width: 185px;">
                                <img src="/css/konica-minolta-logo-black-and-white.png" alt="">
                            </div>

                            <div class="owl-item cloned" style="width: 185px;">
                                <img src="/css/fujifilm-logo-black-and-white-2.png" alt="">
                            </div>

                            <div class="owl-item cloned" style="width: 185px;">
                                <img src="/css/canon-logo-black-and-white-1.png" alt="">
                            </div>

                            <div class="owl-item" style="width: 185px;">
                                <img src="/css/ricoh-logo-black-and-white.png" alt="">
                            </div>

                            <div class="owl-item" style="width: 185px;">
                                <img src="/css/olympus-logo.png" alt="">
                            </div>


                            <div class="owl-item" style="width: 185px;">
                                <img src="/css/nikon-logo-1.png" alt="">
                            </div>

                            <div class="owl-item" style="width: 185px;">
                                <img src="/css/minolta-logo-1.png" alt="">
                            </div>

                            <div class="owl-item active" style="width: 185px;">
                                <img src="/css/minolta-logo-1.png" alt="">
                            </div>

                            <div class="owl-item active" style="width: 185px;">
                                <img src="/css/konica-minolta-logo-black-and-white.png" alt="">
                            </div>

                            <div class="owl-item active" style="width: 185px;">
                                <img src="/css/fujifilm-logo-black-and-white-2.png" alt="">
                            </div>

                            <div class="owl-item active" style="width: 185px;">
                                <img src="/css/canon-logo-black-and-white-3.png" alt="">
                            </div>

                            <div class="owl-item active" style="width: 185px;">
                                <img src="/css/nikon-logo-1.png" alt="">
                            </div>

                            <div class="owl-item active" style="width: 185px;">
                                <img src="/css/olympus-logo.png" alt="">
                            </div>

                            <div class="owl-item active" style="width: 185px;">
                                <img src="/css/ricoh-logo-black-and-white.png" alt="">
                            </div>


                        </div>
                    </div>
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
                    <p> We have cameras that work in any situation and can be used by anyone. Our cameras are made to fit your lifestyle, so you don't have to worry about ever having an uncomfortable experience with your camera again.</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

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

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/171AFFCD-7297-4B69-95BB-8A40739F5E1F.png" class="portfolio-popup">
                                <img src="/Images/171AFFCD-7297-4B69-95BB-8A40739F5E1F.png" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/4E31936E-87FC-4B25-9DB5-B800A1A56586.png" class="portfolio-popup">
                                <img src="/Images/4E31936E-87FC-4B25-9DB5-B800A1A56586.png" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/3444A915-8084-4CEB-9F2A-CFD937B8664E.jpg" class="portfolio-popup">
                                <img src="/Images/3444A915-8084-4CEB-9F2A-CFD937B8664E.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/4E31936E-87FC-4B25-9DB5-B800A1A56586.png" class="portfolio-popup">
                                <img src="/Images/4E31936E-87FC-4B25-9DB5-B800A1A56586.png" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/76C29245-BDC6-4599-9819-CF6D925CF2F2.png" class="portfolio-popup">
                                <img src="/Images/76C29245-BDC6-4599-9819-CF6D925CF2F2.png" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/8B98948E-754B-4058-BE5F-A4CB80224C4B.png" class="portfolio-popup">
                                <img src="/Images/8B98948E-754B-4058-BE5F-A4CB80224C4B.png" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="/Images/9882E1E6-A63D-4B02-B59A-D179771F0520.png" class="portfolio-popup">
                                <img src="/Images/9882E1E6-A63D-4B02-B59A-D179771F0520.png" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->


</body>




            </div>
        </div>
    </div>
</x-app-layout>
