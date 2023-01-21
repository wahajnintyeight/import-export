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
    <title>Global Hub Trading Ltd.</title>
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/colors/grape.css') }}">
    <link rel="preload" href="{{ asset('/assets/css/fonts/urbanist.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<style>
    #catalogNavItem {
        display: none;
    }
</style>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">

            <!-- /.alert -->
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ route('/') }}">
                            <img src="{{ asset('/assets/img/main_logo.png') }}" class="mx-auto w-1/2 mb-1 mainlogo"
                                srcset="{{ asset('/assets/img/main_logo.png') }} 2x" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('/assets/img/main_logo.png') }}" class="mx-auto w-1/2 mb-1 mainlogo"
                                    srcset="{{ asset('/assets/img/logo_white.png') }} 2x" alt="" />
                            </a>
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

                                <li class="nav-item " id="catalogNavItem">
                                    <a class="nav-link " href="{{ route('catalog') }}">Catalog</a>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <!--<div class="offcanvas-footer d-lg-none">-->
                            <!--    <div>-->
                            <!--        <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>-->
                            <!--        <br /> 00 (123) 456 78 90 <br />-->
                            <!--        <nav class="nav social social-white mt-4">-->
                            <!--            <a href="#"><i class="uil uil-twitter"></i></a>-->
                            <!--            <a href="#"><i class="uil uil-facebook-f"></i></a>-->
                            <!--            <a href="#"><i class="uil uil-dribbble"></i></a>-->
                            <!--            <a href="#"><i class="uil uil-instagram"></i></a>-->
                            <!--            <a href="#"><i class="uil uil-youtube"></i></a>-->
                            <!--        </nav>-->
                            <!-- /.social -->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-none d-md-block">
                                <a href="{{ route('catalog') }}" class="btn btn-primary rounded-pill">Catalog</a>
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
            <a href="https://api.whatsapp.com/send?phone=447716295728" class="whatsapp-button"
                style="z-index: 99999 !important; " target="_blank">
                <img src="{{ asset('assets/img/whatsapp-button.png') }}" alt="whatsapp button">
            </a>
        </header>
        @yield('content')
    </div>
    {{-- Footer --}}
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15 mx-auto">
            <div class="mt-10"></div>
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-3 col-lg-3 mx-auto">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('/assets/img/logo_white.png') }}" width="60%"
                            height="60%" srcset="{{ asset('/assets/img/logo_white.png') }} 2x" alt="" />
                        <p class="mb-4">© 2023 Global Hub Trading. <br class="d-none d-lg-block" />All rights
                            reserved.</p>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-3 col-lg-3 mx-auto">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Former Princess ltd <br>
                            Unit A2 Lord North Street <br>
                            Manchester M40 2HJ
                        </address>
                        <a href="mailto:office@ghubtrading.co.uk">office@ghubtrading.co.uk</a>
                        <br>
                        <a href="mailto:accounts@ghubtrading.co.uk">accounts@ghubtrading.co.uk</a>
                        <br />
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                {{-- <div class="col-md-3 col-lg-3 mx-auto">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            {{-- <li><a href="#">Our Story</a></li> --}}
                {{-- <li><a href="#">Projects</a></li> --}}
                {{-- <li><a href="#">Terms of Use</a></li> --}}
                {{-- <li><a href="#">Privacy Policy</a></li> --}}
                {{-- </ul> --}}
                {{-- </div> --}}
                <!-- /.widget -->
                {{-- </div>  --}}
                <!-- /column -->

                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <script src="https://unpkg.com/sweetalert2@7.19.3/dist/sweetalert2.all.js"></script>

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    @if (session()->has('success'))
        <script>
            Toastr.success("{{ session()->get('success') }}");
        </script>
    @endif
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButtor: true,
                    progressBar: true
                });
            @endforeach
        @endif
    </script>

</body>
<script src="{{ asset('/assets/js/plugins.js') }}"></script>
<script src="{{ asset('/assets/js/theme.js') }}"></script>
<style>
    .header_navbar {
        background-color: #001f3f
    }

    .mainlogo {
        width: 60%;
        height: 60%;
    }

    .whatsapp-button {
        position: fixed;
        right: 29px;
        bottom: 95px;
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

        #catalogNavItem {
            display: block;
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

        .mainlogo {
            width: 99%;
            height: 60%;
        }

        #catalogNavItem {
            display: block;
        }
    }
</style>

</html>
