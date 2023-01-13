@extends('layouts.app')
@section('content')
    <!-- /header -->
    <section class="wrapper bg-gray">
        <div class="container pt-10 pt-md-14 text-center">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <h1 class="display-1 mb-4"></h1>
                    <p class="lead fs-lg mb-0">A company turning ideas into beautiful things.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="./assets/img/photos/bg12.jpg"
                alt="" /></figure>
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                        style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/about2.jpg"
                                    srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/about3.jpg"
                                    srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
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
            <!--/.row -->
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-4 px-lg-14">Here are 3 working steps to organize our business projects.
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
                                    <p class="mb-0">Efficiently managing the transportation, customs clearance, and timely
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

                    <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-16 pb-14 pb-md-0">
            <div class="row gx-lg-8 gx-xl-0 align-items-center">
                <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
                    <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block"
                        data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
                    <figure><img src="./assets/img/photos/co1.png" srcset="./assets/img/photos/co1@2x.png 2x"
                            alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                    <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30"
                        data-dots="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote class="icon fs-lg">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur
                                            nulla dapibus curabitur blandit.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Coriss Ambady</h5>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="icon fs-lg">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur
                                            adipiscing dapibus curabitur blandit.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Cory Zamora</h5>
                                                <p class="mb-0">Marketing Specialist</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="icon fs-lg">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur
                                            adipiscing dapibus curabitur blandit.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Nikolas Brooten</h5>
                                                <p class="mb-0">Sales Manager</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row mb-3">
                <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                    <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-3 px-lg-14">Save your time and money by choosing our professional team.
                    </h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1"
                    style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1"
                    style="top: 0.5rem; left: -1.7rem;"></div>
                <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4"
                    data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te1.jpg"
                                                srcset="./assets/img/avatars/te1@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Coriss Ambady</h4>
                                            <div class="meta mb-2">Financial Analyst</div>
                                            <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
                                                srcset="./assets/img/avatars/te2@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Cory Zamora</h4>
                                            <div class="meta mb-2">Marketing Specialist</div>
                                            <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te3.jpg"
                                                srcset="./assets/img/avatars/te3@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Nikolas Brooten</h4>
                                            <div class="meta mb-2">Sales Manager</div>
                                            <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te4.jpg"
                                                srcset="./assets/img/avatars/te4@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Jackie Sanders</h4>
                                            <div class="meta mb-2">Investment Planner</div>
                                            <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te5.jpg"
                                                srcset="./assets/img/avatars/te5@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Laura Widerski</h4>
                                            <div class="meta mb-2">Sales Specialist</div>
                                            <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te6.jpg"
                                                srcset="./assets/img/avatars/te6@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Tina Geller</h4>
                                            <div class="meta mb-2">Financial Analyst</div>
                                            <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-16">
            <div class="row mb-10">
                <div class="col-xl-10 mx-auto">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/check.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">7518</h3>
                            <p>Completed Projects</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/user.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">3472</h3>
                            <p>Satisfied Customers</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/briefcase-2.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">2184</h3>
                            <p>Expert Employees</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="./assets/img/icons/lineal/award-2.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">4523</h3>
                            <p>Awards Won</p>
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
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                    <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1"
                        style="top: -2rem; left: -1.4rem;"></div>
                    <figure class="rounded"><img src="./assets/img/photos/about4.jpg"
                            srcset="./assets/img/photos/about4@2x.jpg 2x" alt=""></figure>
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
                            <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United
                                Kingdom</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p>00 (123) 456 78 90</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a>
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
@endsection
