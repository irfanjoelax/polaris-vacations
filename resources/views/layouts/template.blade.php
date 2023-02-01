<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Where The Great Journey Begin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo-vertikal.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('travelo/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('travelo/css/slicknav.css') }}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('travelo/css/style.css') }}">
    @yield('extra-style')
</head>

<body>
    <!-- header-start -->
    <x-header></x-header>
    <!-- header-end -->

    @yield('content')

    <footer class="footer" style="background-image: url({{ asset('img/footer-3.jpeg') }})">
        <div class="footer_top p-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <p class="text-white">
                                Ruko 92 Avenix Blok E No.16 (BSD City)
                                <br>
                                Jl. Raya Serpong-Lapan, Sampora, Cisauk
                                <br>
                                Kab. Tangerang, Banten 1534, Indonesia
                                <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Office Hour
                            </h3>
                            <ul class="links">
                                <li><a class="text-white">Mon - Fri: 09.00 - 18.00</a></li>
                                <li><a class="text-white">Sat - Mon: Closed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                For Assitence 24 Hours
                            </h3>
                            <ul class="links">
                                <li>
                                    <a href="tel:+62819809390" class="text-white">
                                        <i class="fa fa-phone"></i> + 62 819 809 390
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+628179809390" class="text-white">
                                        <i class="fa fa-phone"></i> + 62 817 9809 390
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Social Media
                            </h3>

                            <ul class="links">
                                <li>
                                    <a href="https://www.instagram.com/polarisvacations/" class="text-white">
                                        <i class="fa fa-instagram"></i> polarisvacations
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100075680360644"
                                        class="text-white">
                                        <i class="ti-facebook"></i> Polaris Vacations
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-white">
                                        <i class="ti-twitter-alt"></i> Twitter
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center text-white">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; {{ date('Y') }} All rights reserved | by <a href=""
                                target="_blank">{{ env('APP_NAME') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/+62819809390" target="_blank"
        class="btn btn-lg btn-success rounded-circle shadow position-fixed" style="bottom: 50px; right: 15px">
        <i class="fa fa-whatsapp"></i>
    </a>

    <!-- JS here -->
    <script src="{{ asset('travelo/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('travelo/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('travelo/js/popper.min.js') }}"></script>
    <script src="{{ asset('travelo/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('travelo/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('travelo/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('travelo/js/ajax-form.js') }}"></script>
    <script src="{{ asset('travelo/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('travelo/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('travelo/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('travelo/js/scrollIt.js') }}"></script>
    <script src="{{ asset('travelo/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('travelo/js/wow.min.js') }}"></script>
    <script src="{{ asset('travelo/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('travelo/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('travelo/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('travelo/js/plugins.js') }}"></script>
    <script src="{{ asset('travelo/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('travelo/js/slick.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('travelo/js/contact.js') }}"></script>
    <script src="{{ asset('travelo/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('travelo/js/jquery.form.js') }}"></script>
    <script src="{{ asset('travelo/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('travelo/js/mail-script.js') }}"></script>

    <script src="{{ asset('travelo/js/main.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
    </script>
    @yield('extra-script')
</body>

</html>
