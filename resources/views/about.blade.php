@extends('layouts.app')
@section('content')
    <!-- /header -->
    <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000"
        data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="./assets/img/photos/slider_one.jpeg">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                <h2
                                    class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    We bring solutions to make life easier.</h2>
                                <p
                                    class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    We are a creative company that focuses on long term relationships with customers.</p>

                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide bg-overlay bg-overlay-400 p-4 bg-dark bg-image"
                    data-image-src="./assets/img/photos/photo-1515696714770-da5756213026.jpg">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                                <h2
                                    class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    We are trusted by over a million customers.</h2>

                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                    data-image-src="./assets/img/photos/1000_F_288402206_1HVdIbXeTGlYERu72Jq0Q4SJAZfBxXoo.jpg">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                <h2
                                    class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    Just sit and relax.</h2>
                                <p
                                    class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    We make sure your spending is stress free so that you can have the perfect control.</p>
                                <div class="animate__animated animate__slideInUp animate__delay-3s"><a
                                        href="{{ route('contact') }}"
                                        class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
    </div>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                        style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/warehouse.jpeg"
                                    srcset="./assets/img/photos/warehouse.jpeg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/forklift.jpeg"
                                    srcset="./assets/img/photos/forklift.jpeg 2x" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-3">Who Are We?</h2>
                    <p class="lead fs-lg">Global Hub foundation has been built with decades of experience in logistics,
                        legal compliance, cross border trade, international business development, accounting, finance and
                        investment banking.</p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Strong commitment to excellence.</span>
                                </li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Attention to
                                        detail.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Above and beyond attitude towards
                                        helping our clients.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Impeccable track record
                                        for delivering goods on time.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>

            <section class="wrapper bg-light">
                <div class="container py-14 py-md-16">
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400"
                                data-image-src="./assets/img/photos/bg3.jpg">
                                <div
                                    class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                                    <h3 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">We are trusted
                                        by over {{ config('app.customers') }}+ customers. Join them by using our services
                                        and
                                        grow your business.</h3>
                                    <a href="{{ route('contact') }}"
                                        class="btn btn-white rounded-pill mb-0 text-nowrap">Join Us</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
            <!--/.row -->
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-4 px-lg-14">Here are 3 working steps to organize our business products.
                    </h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="card me-lg-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                            class="number">01</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Consultation</h4>
                                    <p class="mb-0">To understand your product or service needs.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card ms-lg-13 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                            class="number">02</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Sourcing</h4>
                                    <p class="mb-0">To conduct an extensive search for the best suppliers and
                                        manufacturers to ensure the best possible quality and pricing for our clients'
                                        products.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card mx-lg-6 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                            class="number">03</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Logistics </h4>
                                    <p class="mb-0">Efficiently managing the transportation, customs clearance, and
                                        timely
                                        delivery of products to clients' destination.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-6 mb-3">How It Works?</h2>
                    <p class="lead fs-lg pe-lg-5">At Global Hub Trading, our import/export process is designed to be simple
                        and efficient for our clients. Our team of experts will work closely with you to understand your
                        specific needs and requirements.</p>
                    <p>We will have an initial consultation with you to understand your product or service needs, as well as
                        any specific regulations or compliance requirements that need to be met.</p>
                    <p class="mb-6">Our team will conduct an extensive search for the best suppliers and manufacturers to
                        ensure the best possible quality and pricing for your products.</p>
                    <p class="mb-6"> We will handle all of the logistics for you, including arranging transportation,
                        customs clearance, and delivery.</p>


                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <!-- /section -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-white"
        data-image-src="./assets/img/photos/bg2.jpg">
        <div class="container py-14 py-md-17">
            <h2 class="display-4 mb-5 text-white text-center">Happy Customers</h2>
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto" data-cue="fadeIn">
                    <div class="swiper-container dots-light dots-closer text-center mb-6" data-margin="30"
                        data-dots="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote class="border-0 fs-lg mb-0">
                                        <p>“Their expertise in
                                            logistics and compliance has allowed me to expand my exports to new markets with
                                            ease.”</p>
                                        <div class="blockquote-details justify-content-center">
                                            <img class="rounded-circle w-12" src="./assets/img/avatars/te1.jpg"
                                                srcset="./assets/img/avatars/te1@2x.jpg 2x" alt="" />
                                            <div class="info">
                                                <h6 class="mb-1 text-white">Coriss Ambady</h6>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="border-0 fs-lg mb-0">
                                        <p>“I highly recommend them to anyone in need of import/export services, their
                                            attention
                                            to detail is second to none.”</p>
                                        <div class="blockquote-details justify-content-center">
                                            <img class="rounded-circle w-12" src="./assets/img/avatars/te2.jpg"
                                                srcset="./assets/img/avatars/te2@2x.jpg 2x" alt="" />
                                            <div class="info">
                                                <h6 class="mb-1 text-white">Cory Zamora</h6>
                                                <p class="mb-0">Marketing Specialist</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="border-0 fs-lg mb-0">
                                        <p>“Global Hub Trading navigated international trade complexities with ease and
                                            exceeded
                                            our satisfaction.”</p>
                                        <div class="blockquote-details justify-content-center">
                                            <img class="rounded-circle w-12" src="./assets/img/avatars/te3.jpg"
                                                srcset="./assets/img/avatars/te3@2x.jpg 2x" alt="" />
                                            <div class="info">
                                                <h6 class="mb-1 text-white">Nikolas Brooten</h6>
                                                <p class="mb-0">Sales Manager</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!--/.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="fs-15 text-uppercase text-primary mb-3">Company Facts</h2>
                    <h3 class="display-4 pe-xl-15">We are proud of our works</h3>
                </div>
                <!-- /column -->
                <div class="col-lg-8">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-4">
                            <img src="./assets/img/icons/lineal/check.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">{{ config('app.products') }}</h3>
                            <p class="mb-0">{{ config('app.products_text') }}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <img src="./assets/img/icons/lineal/user.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">{{ config('app.customers') }}</h3>
                            <p class="mb-0">{{ config('app.customers_text') }}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <img src="./assets/img/icons/lineal/briefcase-2.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">{{ config('app.staff') }}</h3>
                            <p class="mb-0">{{ config('app.staff_text') }}</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container pt-12 pb-8 pt-md-12 pb-md-10">
            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                    <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1"
                        style="top: -2rem; left: -1.4rem;"></div>
                    <figure class="rounded"><img src="./assets/img/workers/w1.jpg"
                            srcset="./assets/img/workers/w1.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <address>Former Princess ltd <br>
                                Unit A2 Lord North Street
                                Manchester M40 2HJ <br class="d-none d-md-block" /> Manchester M40 2HJ</address>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0">
                                <a href="mailto:office@ghubtrading.co.uk" class="link-body">
                                    office@ghubtrading.co.uk
                                </a>
                                <a href="mailto:accounts@ghubtrading.co.uk" class="link-body">
                                    accounts@ghubtrading.co.uk
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
@endsection
