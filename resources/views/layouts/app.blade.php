<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COVID-19 Project NRF</title>
    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style-liberty.css') }}">
    <livewire:styles />
</head>

<body>

    <div class="pull-right toggle-right-sidebar">

    </div>

    <div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">

    </div>
    </div>

    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>

                </h1>

                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/healthEdu.jpg') }}" alt="Your logo" title="Your logo" style="height:80px;" /><img src="{{ asset('images/logo-nrf.jpg') }}" alt="Your logo" title="Your logo" style="height:80px;" />
                </a>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about-us">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/objectives">Objectives</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Activities <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/articles">Articles</a>
                                <a class="dropdown-item" href="/trainings">Trainings</a>
                                <a class="dropdown-item" href="/events">Events</a>
                                <a class="dropdown-item" href="/reports">Reports</a>
                            </div>
                        </li>

                        <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="contact-us">Contact</a>
                        </li>

                    </ul>
                </div>


                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>

        </div>
    </header>
    <!--/header-->

    {{ $slot }}



    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2021 HealthEdu. All rights reserved. | Sponsored by<a href="https://www.healtheducat.rw/" target="_blank">
                        NRF</a></p>
                <div class="col-lg-4 main-social-footer-29">
                    <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                    <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                    <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>

                </div>
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <i class="fas fa-level-up-alt"></i>
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
    </section>
    <!-- //copyright -->
    <!--//footer-->
    <!-- Template JavaScript -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/theme-change.js') }}"></script>
    <!-- banner slick slider -->
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- //banner slick slider -->
    <!-- stats number counter-->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countup.js') }}"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->
    <!-- script for tesimonials carousel slider -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

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
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>

    <!--//MENU-JS-->
    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>



    <div id="v-w3layouts"></div>
    <script>
        (function(v, d, o, ai) {
            ai = d.createElement('script');
            ai.defer = true;
            ai.async = true;
            ai.src = v.location.protocol + o;
            d.head.appendChild(ai);
        })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>

    <livewire:scripts />
</body>


</html>