@extends('layouts.app')
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white"
        data-image-src="./assets/img/photos/bg3.jpg">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3 text-white">Get in Touch</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <div class="row mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-lg-6 align-self-stretch">
                                <div class="map map-full rounded-top rounded-lg-start">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str"
                                        style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                </div>
                                <!-- /.map -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-14">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-location-pin-alt"></i> </div>
                                        </div>
                                        <div class="align-self-start justify-content-start">
                                            <h5 class="mb-1">Address</h5>
                                            <address>Former Princess ltd
                                                Unit A2 Lord North Street
                                                <br class="d-none d-md-block" />Manchester M40 2HJ
                                            </address>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-phone-volume"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Phone</h5>
                                            <p>+44-7716-295728</p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-envelope"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">E-mail</h5>
                                            <p class="mb-0"><a href="mailto:office@ghubtrading.co.uk"
                                                    class="link-body">office@ghubtrading.co.uk</a></p>
                                            <p class="mb-0"><a href="mailto:accounts@ghubtrading.co.uk"
                                                    class="link-body">accounts@ghubtrading.co.uk</a></p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
                    <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you
                        shortly.</p>
                         @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                    <form class="contact-form" method="post" action="{{ route('store-contact') }}">
                        @csrf
                        @method('POST')
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="firstName" class="form-control border"
                                        placeholder="Jane" required>
                                    <label for="form_name">First Name *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="phone" class="form-control border"
                                        placeholder="Jane" required>
                                    <label for="form_name">Phone Number *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="lastName" class="form-control border"
                                        placeholder="Jane" required>
                                    <label for="form_name">Last Name *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control border"
                                        placeholder="jane.doe@example.com" required>
                                    <label for="form_email">Email *</label>
                                </div>
                            </div>

                            <!-- /column -->
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea id="form_message" name="message" class="form-control border" placeholder="Your message" style="height: 150px"
                                        required></textarea>
                                    <label for="form_message">Message *</label>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                           
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map"
        data-image-src="./assets/img/map.png">
        <div class="container pt-0 pb-14 pt-md-16 pb-md-18">
            <div class="row">
                <div class="col-lg-9 col-xxl-8 mx-auto">
                    <h3 class="display-4 mb-8 px-xl-12">We are trusted by over 5000+ clients. Join them now and grow your
                        business.</h3>
                </div>
                <!-- /.row -->
            </div>
            <!-- /column -->
            <div class="row">
                <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
                    <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
                        <div class="col-md-4 text-center">
                            <h3 class="counter counter-lg text-primary">150</h3>
                            <p>Completed Projects</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4 text-center">
                            <h3 class="counter counter-lg text-primary">300</h3>
                            <p>Satisfied Customers</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4 text-center">
                            <h3 class="counter counter-lg text-primary">200</h3>
                            <p>Expert Employees</p>
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
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
@endsection
