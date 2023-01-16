@extends('layouts.app')
@section('content')
    <!-- /header -->
    <section class="wrapper bg-light">
        <div class="container-card">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5"
                data-image-src="./assets/img/photos/bg22.png">
                <div class="card-body py-14 px-0">
                    <div class="container">
                        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="900">
                                <h1 class="display-2 mb-4 me-xl-5 me-xxl-0">Navigating the<span
                                        class="text-gradient gradient-1"> Global Marketplace </span> with Expertise and
                                    Efficiency.</h1>
                                <p class="lead fs-23 lh-sm mb-7 pe-xxl-15">At Global Hub Trading, we specialize in providing
                                    a full range of services to businesses of all sizes looking to navigate the global
                                    marketplace.</p>
                                <div><a href="#gohere" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a>
                                </div>
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <img class="img-fluid mb-n18" src="./assets/img/illustrations/3d6.png"
                                    srcset="./assets/img/illustrations/3d6@2x.png 2x" data-cue="fadeIn" data-delay="300"
                                    alt="" />
                            </div>
                            <!--/column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container-card -->
    </section>
    <!-- /section -->
    <section id="gohere" class="wrapper bg-light">
        <div class="container pt-14 pt-md-17 pb-14 pb-md-18">
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Our Features</h2>
                    <h3 class="display-4 mb-9 px-xl-11">The service we offer is specifically designed to meet your needs.
                    </h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gy-8 mb-17 mt-6">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/script.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Import</h3>
                            <p class="mb-0">Expertly handling import procedures to ensure compliance and timely
                                delivery.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/verify.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Export</h3>
                            <p class="mb-0">Expediting exports to global markets with compliance and logistics
                                expertise.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/cloud-network.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Wholesale</h3>
                            <p class="mb-0">Providing wholesale sourcing and logistics solutions for clients.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                {{-- <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/director.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Wireless Networking</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/setting.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">IT Solutions</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/server.svg"
                                class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-4" alt="" />
                        </div>
                        <div>
                            <h3 class="fs-22 mb-1">Server Configuration</h3>
                            <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio
                                sem aget elit nullam quis risus eget.</p>
                        </div>
                    </div>
                </div> --}}
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-3 gy-10 mb-15 mb-md-18 align-items-center">
                <div class="col-lg-5 offset-lg-1 rounded-xl shadow-md">
                    <figure><img class="w-auto " src="./assets/img/containers/c4.jpg"
                            srcset="./assets/img/illustrations/3d2@2x.png 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Have Perfect Control</h2>
                    <h3 class="display-4 mb-4">We bring solutions to make life easier for our customers.</h3>
                    <p class="mb-6">At Global Hub Trading, we understand the complexities and challenges of international
                        trade. That's why we bring solutions to make life easier for our customers.</p>
                    <div class="row gy-3">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span> From sourcing and qualifying suppliers
                                        to coordinating logistics and delivery.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>To handle every aspect of
                                        the import and export process with efficiency and expertise.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>To make international trade as simple
                                        and seamless as possible for our clients.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>We work closely with our
                                        clients to understand their unique needs and provide tailored solutions.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-md-8 gy-10 align-items-center">
                <div class="col-lg-6 offset-lg-1 order-lg-2 position-relative">
                    <figure class="rounded"><img class="img-fluid" src="./assets/img/photos/about27.jpg"
                            srcset="./assets/img/photos/about27@2x.jpg 2x" alt="" /></figure>
                    <div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%; left: -7%">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <img src="./assets/img/icons/solid/cloud-group.svg"
                                        class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-3"
                                        alt="" />
                                </div>
                                <div>
                                    <h3 class="fs-25 counter mb-0 text-nowrap">200+</h3>
                                    <p class="fs-16 lh-sm mb-0 text-nowrap">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->

                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">What Makes Us Different?</h2>
                    <h3 class="display-4 mb-4 me-lg-n5">We take pride in our commitment to excellence and our above and
                        beyond attitude towards our clients.</h3>
                    <p class="mb-6">At Global Hub Trading, our team of experts has decades of knowledge and experience in
                        logistics, legal compliance, cross-border trade, international business development, accounting,
                        finance, and investment banking, ensuring that our clients receive the highest quality service. </p>
                    <ul class="icon-list bullet-bg bullet-soft-primary">
                        <li><i class="uil uil-check"></i>Commitment to excellence and client satisfaction.</li>
                        <li><i class="uil uil-check"></i>Decades of expertise in logistics, compliance, and international
                            business.</li>
                        <li><i class="uil uil-check"></i>Unique team of individuals who shape our values and success.</li>
                    </ul>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container-card">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 pb-15"
                data-image-src="./assets/img/photos/bg22.png">
                <div class="card-body py-14 px-0">
                    <div class="container">
                        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                            <div class="col-lg-4 text-center text-lg-start">
                                <h3 class="display-4 mb-3 pe-xxl-15">We are proud of our work.</h3>
                                <p class="lead fs-lg mb-0 pe-xxl-10">We bring solutions to make life easier for our
                                    customers.</p>
                            </div>
                            <!-- /column -->
                            <div class="col-lg-8 mt-lg-2">
                                <div class="row align-items-center counter-wrapper gy-6 text-center">
                                    <div class="col-md-4">
                                        <img src="./assets/img/icons/solid/target.svg"
                                            class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3"
                                            alt="" />
                                        <h3 class="counter">150+</h3>
                                        <p class="mb-0">Completed Projects</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4">
                                        <img src="./assets/img/icons/solid/bar-chart.svg"
                                            class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3"
                                            alt="" />
                                        <h3 class="counter">2x</h3>
                                        <p class="mb-0">Revenue Growth</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4">
                                        <img src="./assets/img/icons/solid/employees.svg"
                                            class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3"
                                            alt="" />
                                        <h3 class="counter">95.8%</h3>
                                        <p class="mb-0">Customer Satisfaction</p>
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
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container-card -->
        <div class="container">
            <div class="grid mb-18">
                <div class="row isotope gy-6 mt-n18">
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Their expertise in
                                        logistics and compliance has allowed me to expand my exports to new markets with
                                        ease.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Coriss Ambady</h5>
                                            <p class="mb-0">Financial Analyst</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Global Hub Trading navigated international trade complexities with ease and exceeded
                                        our satisfaction.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Cory Zamora</h5>
                                            <p class="mb-0">Marketing Specialist</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“Global Hub Trading exceeded expectations in handling our imports, always on time and
                                        compliant.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Emily Davis</h5>
                                            <p class="mb-0">Sales Manager</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-primary">
                            <div class="card-body">
                                <blockquote class="icon mb-0">
                                    <p>“I highly recommend them to anyone in need of import/export services, their attention
                                        to detail is second to none.”</p>
                                    <div class="blockquote-details">
                                        <div class="info ps-0">
                                            <h5 class="mb-1">Coriss Ambady</h5>
                                            <p class="mb-0">Financial Analyst</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.grid-view -->

            <!-- /.row -->

            <!-- /.swiper-container -->
            <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
                <div class="col-lg-6">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded"><img src="{{ asset('/assets/img/containers/c1.jpg') }}"
                                    srcset="./assets/img/photos/g12@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="{{ asset('/assets/img/containers/c2.jpg') }}"
                                    srcset="./assets/img/photos/g13@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-12">
                            <figure class="rounded mx-md-5"><img src="{{ asset('/assets/img/containers/c3.jpg') }}"
                                    srcset="./assets/img/photos/g11@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Who Are We?</h2>
                    <h3 class="display-4 mb-4">Company that believes in the power of creative strategy.</h3>
                    <p class="mb-6">Global Hub foundation has been built with decades of experience in logistics, legal
                        compliance, cross border trade, international business development, accounting, finance and
                        investment banking.
                    </p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Our foundation is built on commitment
                                        to excellence and an above and beyond attitude towards our clients.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>We provide a wide range
                                        of import and export services to businesses of all sizes with a focus on tailored
                                        solutions.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Built on integrity and a passion for
                                        helping our clients succeed in the global marketplace.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Our team is dedicated
                                        to making the import and export process as simple and seamless as possible while
                                        ensuring compliance and timely delivery.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 mb-md-17">
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle disabled btn-soft-primary me-4"> <span
                                    class="number fs-18">1</span> </div>
                        </div>
                        <div>
                            <h4>Our Vision</h4>
                            <p class="mb-2">To be the leading provider of import and export services, renowned for our
                                commitment to excellence, integrity, and customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle disabled btn-soft-primary me-4"> <span
                                    class="number fs-18">2</span> </div>
                        </div>
                        <div>
                            <h4>Our Mission</h4>
                            <p class="mb-2">To provide tailored solutions to meet the unique needs of our clients and
                                make the import and export process as simple and seamless as possible.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon btn btn-circle disabled btn-soft-primary me-4"> <span
                                    class="number fs-18">3</span> </div>
                        </div>
                        <div>
                            <h4>Our Values</h4>
                            <p class="mb-2">Excellence, Customer Satisfaction, Compliance and safety and Professionalism.
                            </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-3 gy-10 mb-15 mb-md-18 align-items-center">
                <div class="col-lg-6">
                    <figure><img class="w-auto" src="./assets/img/illustrations/3d3.png"
                            srcset="./assets/img/illustrations/3d3@2x.png 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Contact Us</h2>
                    <h3 class="display-4 mb-8">Got any questions? Don't hesitate to get in touch.</h3>
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/pin.svg"
                                class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4"
                                style="width: 1.5rem; height: 1.5rem;" alt="" />
                        </div>
                        <div>
                            <h5 class="mb-0">Address</h5>
                            <address>Former Princess ltd, Unit A2 Lord North Street, Manchester M40 2HJ.</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/rotary.svg"
                                class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4"
                                style="width: 1.5rem; height: 1.5rem;" alt="" />
                        </div>
                        <div>
                            <h5 class="mb-0">Phone</h5>
                            <p>+44-7716-295728</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/solid/emails.svg"
                                class="svg-inject icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4"
                                style="width: 1.5rem; height: 1.5rem;" alt="" />
                        </div>
                        <div>
                            <h5 class="mb-0">E-mail</h5>
                            <p class="mb-0">
                                <a href="mailto:office@ghubtrading.co.uk" class="link-body">office@ghubtrading.co.uk</a>
                                <br>
                                <a href="mailto:accounts@ghubtrading.co.uk"
                                    class="link-body">accounts@ghubtrading.co.uk</a>
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

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/js/theme.js') }}"></script>
@endsection
