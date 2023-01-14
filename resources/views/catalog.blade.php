@extends('layouts.app')
@section('content')
    <section class="wrapper bg-light">

        <div class=" ">
            <section class="video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-100">
                <video poster="{{ asset('assets/video.mp4') }}" src="{{ asset('assets/video.mp4') }}" autoplay loop
                    playsinline muted></video>
                <div class="video-content">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
                                <h1 class="display-1 fs-54 text-white mb-5"><span class="rotator-zoom">Connecting global
                                        markets through our comprehensive products </span></h1>
                                <p class="lead fs-24 mb-0 mx-xxl-8">Discover possibilities with our extensive product
                                    catalogue</p>
                            </div>
                            <!-- /column -->
                        </div>
                    </div>
                    <!-- /.video-content -->
                </div>
                <!-- /.content-overlay -->
            </section>
            <!-- /section -->
            <div class="row text-center mt-12">
                <div class="col-lg-9 mx-auto">
                    <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Unlocking the world of trade with our diverse
                        product offerings</h3>
                    <div class="row gx-lg-8 gx-xl-12 pt-5 process-wrapper text-center mt-9" data-cues="slideInUp"
                        data-group="process">
                        <div class="col-md-4"> <img src="./assets/img/brands/pepsi.png"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Pepsi</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/7up.png"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">7up</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/sprite.jpg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" style="width:160px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Sprite</h4>

                        </div>
                        <!--/column -->
                    </div>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp"
                        data-group="process">
                        <div class="col-md-4"> <img src="./assets/img/brands/fanta.png"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Fanta</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/mirinda.png"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Mirinda</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/m_dew.png"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" style="width:140px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Mountain Dew</h4>

                        </div>
                        <!--/column -->
                    </div>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp"
                        data-group="process">
                        <div class="col-md-4"> <img src="./assets/img/brands/cocoa_cola.png"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Coca Cola</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/m_engr.jpg"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Monster Energy</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/red_bl.png"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Red Bull</h4>

                        </div>
                        <!--/column -->
                    </div>
                    <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp"
                        data-group="process">
                        <div class="col-md-4"> <img src="./assets/img/brands/ag_bar.webp"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" style="width:100px;height:100px"
                                alt="" />
                            <h4 class="mb-1">AG Barr drinks</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/Calypso.webp"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" style="width:130px;height:100px"
                                alt="" />
                            <h4 class="mb-1">Calypso Drink</h4>

                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="./assets/img/brands/capri.png"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" style="width:100px"
                                alt="" />
                            <h4 class="mb-1">Caprissun</h4>

                        </div>
                        <!--/column -->
                    </div>

                    <div class="mx-auto mb-10 mt-10">
                        <a href="{{ route('downloadPDF') }}" class="btn btn-primary rounded-pill btn-lg">Interested in
                            more? Download Catalog</a>
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
@endsection
