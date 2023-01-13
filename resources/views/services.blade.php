@extends('layouts.app')
@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto mb-11">
                    <h1 class="display-1 mb-3">Our Services</h1>
                    <p class="lead px-lg-7 px-xl-7 px-xxl-6">We are a creative company that focuses on establishing <span
                            class="underline">long-term relationships</span> with customers.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-14 pb-md-16">
            <div class="row mb-8">
                <div class="col-12 mt-n20">
                    <figure class="rounded"><img src="{{ '/assets/img/containers/constructors.jpg' }}"
                            srcset="{{ '/assets/img/photos/about5@2x.jpg' }} 2x" alt="" /></figure>
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top"
                                data-image-src="{{ '/assets/img/photos/bg3.jpg' }}">
                                <div class="card-body p-9 p-xl-10">
                                    <div class="row align-items-center counter-wrapper gy-4 text-center">
                                        <div class="col-6 col-lg-4">
                                            <h3 class="counter counter-lg text-white">150</h3>
                                            <p>Completed Projects</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-4">
                                            <h3 class="counter counter-lg text-white">300</h3>
                                            <p>Satisfied Customers</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-4">
                                            <h3 class="counter counter-lg text-white">200</h3>
                                            <p>Expert Employees</p>
                                        </div>
                                        <!--/column -->
                                        {{-- <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">4523</h3>
                                            <p>Awards Won</p>
                                        </div> --}}
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-4 offset-md-2 align-self-end">
                            <figure class="rounded"><img src="{{ '/assets/img/containers/c5.jpg' }}"
                                    srcset="{{ '/assets/img/photos/g1@2x.jpg' }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="{{ '/assets/img/containers/c6.jpg' }}"
                                    srcset="{{ '/assets/img/photos/g2@2x.jpg' }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 offset-md-1">
                            <figure class="rounded"><img src="{{ '/assets/img/containers/c7.jpg' }}"
                                    srcset="{{ '/assets/img/photos/g3@2x.jpg' }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-4 align-self-start">
                            <figure class="rounded"><img src="{{ '/assets/img/containers/ppl.jpg' }}"
                                    srcset="{{ '/assets/img/photos/g4@2x.jpg' }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-4 mb-3">What We Do?</h2>
                    <p class="lead fs-lg mb-8 pe-xxl-2">Global Hub Trading specializes in providing import and export
                        services for businesses of all sizes. We work closely with our clients to understand their unique
                        needs and requirements, and provide solutions tailored to their specific needs. <span
                            class="underline">specifically</span> designed to meet your business needs and projects.</p>
                    <div class="row gx-xl-10 gy-6">
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-phone-volume"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">IMPORT</h4>
                                    <p class="mb-0">Expertly handling import procedures to ensure compliance and timely
                                        delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-shield-exclamation"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">EXPORT</h4>
                                    <p class="mb-0">Expediting exports to global markets with compliance and logistics
                                        expertise.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-laptop-cloud"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">WHOLESALE</h4>
                                    <p class="mb-0">Providing wholesale sourcing and logistics solutions for clients.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-chart-line"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">DISTRIBUTION</h4>
                                    <p class="mb-0">Streamlining product distribution globally with logistics and
                                        compliance expertise.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <section class="wrapper bg-light">
                <div class="container pb-4 pb-md-6">
                    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14"
                        data-image-src="./assets/img/photos/bg16.png">
                        <div class="card-body p-10 p-xl-12">
                            <div class="row text-center">
                                <div class="col-xl-11 col-xxl-9 mx-auto">
                                    <h2 class="fs-16 text-uppercase text-white mb-3">Join Our Community</h2>
                                    <h3 class="display-3 mb-8 px-lg-8 text-white">We are <span
                                            class="underline-3 style-2 yellow">trusted</span> by over 200+ clients. Join
                                        them now and grow your business.</h3>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                            <div class="d-flex justify-content-center">
                                <span><a class="btn btn-white rounded">Get Started</a></span>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
            <section class="wrapper bg-light">
                <div class="container py-8 py-md-8">
                    <div class="row">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">How We Do It?</h2>
                            <h3 class="display-4 mb-9">The service we offer is specifically designed to meet your needs.
                            </h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="row gx-md-8 gy-8">
                        <div class="col-md-6 col-lg-4">
                            <div class="icon btn btn-block btn-lg btn-soft-yellow disabled mb-5"> <i
                                    class="uil uil-phone-volume"></i> </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-3">One of the key ways we do this is through our 24/7 support. We understand
                                that the needs of our clients are not limited to traditional business hours, so we make
                                ourselves available around the clock to ensure that their needs are met in a timely and
                                efficient manner. </p>
                            <a href="#" class="more hover link-yellow">Learn More</a>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="icon btn btn-block btn-lg btn-soft-red disabled mb-5"> <i
                                    class="uil uil-shield-exclamation"></i> </div>
                            <h4>Secure Payments</h4>
                            <p class="mb-3">We understand the importance of secure and reliable payment options for our
                                clients. That's why we offer secure payments for all our services. Our online payment
                                gateway is encrypted to ensure that your financial information is protected at all times.
                            </p>
                            <a href="#" class="more hover link-red">Learn More</a>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="icon btn btn-block btn-lg btn-soft-leaf disabled mb-5"> <i
                                    class="uil uil-laptop-cloud"></i> </div>
                            <h4>Daily Updates</h4>
                            <p class="mb-3">we understand the importance of keeping our clients informed and updated
                                throughout the import/export process. One of the key ways we do this is through our daily
                                updates.</p>
                            <a href="#" class="more hover link-leaf">Learn More</a>
                        </div>
                        <!--/column -->
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{ '/assets/img/workers/w4.jpg' }}">
        <div class="container py-18 text-center">
            <div class="row">
                <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
                    <a href="https://www.youtube.com/watch?v=26TbMXXOe0I"
                        class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i
                            class="icn-caret-right"></i></a>
                    <h2 class="display-4 px-lg-10 px-xl-13 px-xxl-10 mb-10 text-white">Find out everything you need to know
                        about creating a business process model.</h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container pt-14 pt-md-16">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Latest Projects</h2>
                    <h3 class="display-4 mb-10">Check out some of our awesome projects with creative ideas and great
                        design.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="container-fluid px-md-6">
            <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true"
                data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="rounded"><img src="./assets/img/containers/c8.jpg" alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img src="./assets/img/containers/c9.jpg" alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img src="./assets/img/containers/c10.jpg" alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img src="./assets/img/photos/pp13.jpg" alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
@endsection
