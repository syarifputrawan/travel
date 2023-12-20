<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Go Trip a Travel Category Responsive Web Template| Home :: W3layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

<body id="home">
    <section class=" w3l-header-4 header-sticky">
        <!--header-->
        <header id="site-header" class="fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark stroke">
                    <h1><a class="navbar-brand" href="index.html">
                            <span class="fa fa-map-signs"></span> Go Trip
                        </a></h1>
                    <!-- if logo is image enable this
   <a class="navbar-brand" href="#index.html">
    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
   </a> -->
                    <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ml-lg-5">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item @@about__active">
                                <a class="nav-link" href="/about1">About</a>
                            </li>
                            <li class="nav-item @@services__active">
                                <a class="nav-link" href="/services">Explore</a>
                            </li>
                            <li class="nav-item @@contact__active">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ml-4">
                                <a class="nav-link phone" href="tel:+(21)-234-9999"><span class="fa fa-phone"></span>
                                    {{ $footer->nomor_hp }}</a>
                            </li>
                            <li class="nav-item" title="Search"><a href="#search" class="search-search nav-link"><span
                                        class="fa fa-search mr-2" aria-hidden="true"></span></a></li>
                            <!-- search -->
                            <div class="search-right">
                                <!-- search popup -->
                                <div id="search" class="pop-overlay">
                                    <div class="popup">
                                        <form action="#" method="GET" class="d-flex">
                                            <input type="search" placeholder="Search.." name="search"
                                                required="required" autofocus>
                                            <button type="submit">Search</button>
                                        </form>

                                        <a class="close" href="#close">&times;</a>
                                    </div>
                                </div>
                                <!-- /search popup -->
                            </div>
                            <!--/ search -->
                        </ul>
                    </div>
                    <!-- toggle switch for light and dark theme -->
                    <div class="mobile-position">
                        <label class="theme-selector">
                            <input type="checkbox" id="themeToggle">
                            <i class="gg-sun"></i>
                            <i class="gg-moon"></i>
                        </label>
                    </div>
                    <!-- //toggle switch for light and dark theme -->
                </nav>
            </div>
        </header>
        <!--/header-->
    </section>
    <script src="{{ asset('frontend') }}/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
    <!--bootstrap working-->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <!--bootstrap working//-->
    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->
    <!--theme switcher dark and light mode script-->
    <script>
        const bodyElement = document.querySelector('body');
        const themeToggle = document.querySelector('#themeToggle');
        const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');

        const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);

        if (currentTheme) {
            bodyElement.classList.add(currentTheme);

            if (currentTheme === 'dark') {
                themeToggle.checked = true;
            }
        }

        function userPreference(e) {
            if (e.matches) {
                bodyElement.classList.add("dark");
                return "dark"
            } else {
                bodyElement.classList.remove("dark");
                return ""
            }
        }

        darkModeMql.addListener(userPreference);

        function themeSwitcher(e) {
            if (e.target.checked) {
                bodyElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                bodyElement.classList.remove('dark');
                localStorage.setItem('theme', '');
            }
        }

        themeToggle.addEventListener('change', themeSwitcher);
    </script>
    <!--theme switcher dark and light mode script//-->


    <section class="w3l-main-slider" id="home">
        <!-- main-slider -->
        <div class="companies20-content">

            <div class="owl-one owl-carousel owl-theme">
                <div class="item text-center">
                    <li>
                        <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Welcome<br>
                                            To Let’s Travel</h5>
                                        <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu
                                            sandae eum necessi tatibus bland itiis adipisci Mollitia placeat modi
                                            explicabo voluptatum corporis.</p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4" href="/contact">Book Your Travel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item text-center">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Welcome <br>
                                            To Let’s Travel </h5>
                                        <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu
                                            sandae eum necessi tatibus bland itiis adipisci Mollitia placeat modi
                                            explicabo voluptatum corporis.</p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4" href="/contact">Book Your Travel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item text-center">
                    <li>
                        <div class="slider-info  banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Welcome<br>
                                            To Let’s Travel</h5>
                                        <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu
                                            sandae eum necessi tatibus bland itiis adipisci Mollitia placeat modi
                                            explicabo voluptatum corporis.</p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4" href="/contact">Book Your
                                            Travel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
        <script src="{{ asset('frontend') }}/assets/js/owl.carousel.js"></script>
        <!-- script for -->
        <script>
            $(document).ready(function() {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script -->
        <!-- /main-slider -->
    </section>

    <section class="w3l-call-to-action_9">
        <div class="call-w3">
            <div class="container">
                <div class="booking-form-content">
                    <div class="main-titles-head ">
                        <h3 class="header-name">Get the Best Holiday Planned by Experts!
                        </h3>
                        <p class="tiltle-para editContent ">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-specification-6">
        <div class="specification-layout editContent">
            <div class="container-fluid">
                <div class="row text-left img-grids">
                    <div class="col-lg-6 p-0">
                        <div class="images-right"
                            style="background: url({{ Storage::url($perkenalan1->gambar) }}) no-repeat center;
						background-size: cover;
						min-height: 800px;
						position: relative;
						z-index: 0;
						display: grid;
						align-items: center;">
                            <div class="p-md-5 p-3">
                                <h4><a href="/boking">The City of Lights</a></h4>
                                <p>Moll itia placeat modi volup tatem tenetur conse quatur.Conseq tenetur conse quatur
                                    adipi sicing elit. </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-0">
                        <div class="four-grids">
                            @foreach ($perkenalan2 as $b)
                                <div class="images-text">
                                    <div class="ser-bg1"
                                        style="  background: url({{ Storage::url($b->gambar) }}) no-repeat center;
								background-size: cover;
								min-height: 400px;
								position: relative;
								z-index: 0;
								display: grid;
								align-items: end; }
							  ">
                                        <div class="p-md-5 p-3">
                                            <h4><a href="/boking">{{ $b->judul_singkat }}</a></h4>
                                            <p>{{ $b->penjelasan_singkat }} </p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="container">
                <div class="main-titles-head ">
                    <h3 class="header-name">Top Travelling Destinations
                    </h3>
                    <p class="tiltle-para editContent ">{{ $view_kontak->penjelasan_treveling }}</p>
                </div>
                <div class="gallery-image row">
                    @foreach ($treveling as $c)
                        <div class="col-lg-4 col-md-6">
                            <div class="img-box">
                                <img src="{{ Storage::url($c->gambar) }}" alt="product" class="img-responsive ">
                                <h5 class="my-2"><a href="/about1">{{ $c->nama_tempat }}</a></h5>
                                <p class="para">{{ $c->penjelasan_singkat }}</p>
                                <div class="top-gap">
                                    <h5>{{ $c->FormatRupiah('harga') }}</h5>
                                    <a href="/booking/{{ $c->id }}" class="icon text-center"><span
                                            class="fa fa-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="w3l-teams-15">
        <div class="team-single-main editContent">
            <div class="container">

                <div class="row">
                    <div class="column2 col-lg-6">

                        <img src="{{ Storage::url($sedikit->gambar) }}" alt="product" class="img-responsive ">
                    </div>
                    <div class="nature-row  coloum4 col-lg-6">
                        <h6 class="small-title">Explore</h6>
                        <h3>{{ $sedikit->judul_kami }}</h3>
                        <p class="para editContent text ">
                            {{ $sedikit->deskripsi_singkat }}</p>
                        <a href="/about1" class="action-button btn mt-lg-5 mt-4">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="w3l-clients" id="client">
        <div class="call-w3">
            <div class="container text-center">
                <div class="title-head">
                    <h3>{{ $view_kontak->judul_sambutan }}</h3>
                    <p>{{ $view_kontak->penjelasan_treveling }}</p>
                    <a class="btn btn-theme2 mt-lg-5 mt-4" href="/contact">Book Your Travel</a>
                </div>

            </div>
        </div>
    </section>

    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5 ">
            <div class="container">
                <div class="grid-col-4 footer-top-29">
                    <div class="footer-list-29 footer-1">
                        <h2 class="footer-title-29">Contact Us</h2>
                        <ul>
                            <li>
                                <p><span class="fa fa-map-marker"></span>{{ $footer->alamat }}</p>
                            </li>
                            <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span>
                                    {{ $footer->nomor_hp }}</a>
                            </li>
                            <li><a href="mailto:estate-mail@support.com" class="mail"><span
                                        class="fa fa-envelope-open-o"></span> {{ $footer->email }}</a></li>
                        </ul>
                        <div class="main-social-footer-29">
                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                            <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                    <div class="footer-list-29 footer-2">
                        <ul>
                            <h6 class="footer-title-29">Category</h6>
                            <li><a href="#pages">Event Travel</a></li>
                            <li><a href="#pages">Holiday Trip</a></li>
                            <li><a href="#pages">Group Tour</a></li>
                            <li><a href="#pages">Package Holiday</a></li>
                            <li><a href="#pages">Gap Year</a></li>
                        </ul>
                    </div>
                    <div class="footer-list-29 footer-3">
                        <div class="properties">
                            <h6 class="footer-title-29">Latest Gallery</h6>
                            <div class="images-col">
                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog1.jpg"
                                        class="img-responsive" alt=""></a>
                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog2.jpg"
                                        class="img-responsive" alt=""></a>
                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog3.jpg"
                                        class="img-responsive" alt=""></a>
                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog4.jpg"
                                        class="img-responsive" alt=""></a>
                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog5.jpg"
                                        class="img-responsive" alt=""></a>
                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/images/blog6.png"
                                        class="img-responsive" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-list-29 footer-4">
                        <ul>
                            <h6 class="footer-title-29">Travel & Trip</h6>
                            <li><a href="#url"> Bahamas</a></li>
                            <li><a href="#url"> Cambodia</a></li>
                            <li><a href="#url">Dominica</a></li>
                            <li><a href="#url"> Egypt</a></li>
                            <li><a href="#url">Germany</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" bottom-copies text-center">
                    <p class="copy-footer-29">© 2020 Go Trip. All rights reserved | Designed by <a
                            href="//w3layouts.com">W3layouts</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-chevron-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</body>

</html>
