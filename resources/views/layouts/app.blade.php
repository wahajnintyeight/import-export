<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/colors/grape.css') }}">
    <link rel="preload" href="{{ asset('/assets/css/fonts/urbanist.css') }}" as="style"
        onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">

            <!-- /.alert -->
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="./index.html">
                            <img src="{{ asset('/assets/img/main_logo.png') }}" class="mx-auto w-1/2 mb-1"
                                width="60%" height="60%" srcset="{{ asset('/assets/img/main_logo.png') }} 2x"
                                alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('/') }}">Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br /> 00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-none d-md-block">
                                <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill">Catalog</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
            <a href="https://api.whatsapp.com/send?phone=51000000000" class="whatsapp-button"
                style="z-index: 99999 !important;" target="_blank">
                <img src="https://i.ibb.co/VgSspjY/whatsapp-button.png" alt="botão whatsapp">
            </a>
        </header>
        @yield('content')
    </div>
    {{-- Footer --}}
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="mt-10"></div>
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('/assets/img/logo_white.png') }}" width="60%"
                            height="60%" srcset="{{ asset('/assets/img/logo-light@2x.png') }} 2x" alt="" />
                        <p class="mb-4">© 2021 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom
                        </address>
                        <a href="mailto:#">info@email.com</a><br /> 00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->

                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
</body>
<script src="{{ asset('/assets/js/plugins.js') }}"></script>
<script src="{{ asset('/assets/js/theme.js') }}"></script>
<style>
    .header_navbar {
        background-color: #001f3f
    }

    @media screen and (min-width: 1401px) {
        .whatsapp-button {
            position: fixed;
            right: 29px;
            bottom: 95px;
        }
    }

    @media screen and (min-width: 1200px) and (max-width:1400px) {
        .whatsapp-button {
            position: fixed;
            right: 42px;
            bottom: 95px;
            width: 40px;
            height: 40px;
        }
    }

    @media screen and (max-width: 1199px) {
        .whatsapp-button {
            position: fixed;
            right: 21px;
            bottom: 68px;
            width: 40px;
            height: 40px;
        }
    }

    @media screen and (max-width: 768px) {
        .whatsapp-button {
            position: fixed;
            right: 25px;
            bottom: 68px;
            width: 40px;
            height: 40px;
        }
    }
</style>

</html>
