@extends('layouts.master')

@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end" style="margin-top: -50px;">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{URL::asset('assets/img/core-img/curve-5.png') }}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
<!--         <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All Gallery</button>
            <button class="btn" data-filter=".ux-ui-design">Paket Malang</button>
            <button class="btn" data-filter=".market-analytics">Paket Surabaya</button>
            <button class="btn" data-filter=".marketing-social">Paket Probolinggo</button>
        </div>
 -->
        <div class="container-fluid">
            <div class="row uza-portfolio">

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-1.png') }}" alt="">
                        <!-- Overlay Effect -->
                        <!-- <div class="overlay-effect">
                            <h4>UX/UI Design</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                       <!--  <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-2.png') }}" alt="">
                        <!-- Overlay Effect -->
                       <!--  <div class="overlay-effect">
                            <h4>Market Analytics</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                        <!-- <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-3.png') }}" alt="">
                        <!-- Overlay Effect -->
                        <!-- <div class="overlay-effect">
                            <h4>UX/UI Design</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                       <!--  <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-4.png') }}" alt="">
                        <!-- Overlay Effect -->
                        <!-- <div class="overlay-effect">
                            <h4>Market Analytics</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                       <!--  <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-5.png') }}" alt="">
                        <!-- Overlay Effect -->
                        <!-- <div class="overlay-effect">
                            <h4>UX/UI Design</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                        <!-- <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-6.png') }}" alt="">
                        <!-- Overlay Effect -->
                       <!--  <div class="overlay-effect">
                            <h4>Market Analytics</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                        <!-- <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-7.png') }}" alt="">
                        <!-- Overlay Effect -->
                        <!-- <div class="overlay-effect">
                            <h4>Marketing Social</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                        <!-- <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/malang-8.png') }}" alt="">
                        <!-- Overlay Effect -->
                        <!-- <div class="overlay-effect">
                            <h4>Marketing Social</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div> -->
                        <!-- View More -->
                        <!-- <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div> -->
                    </div>
                </div>

            </div>

<!--             <div class="row">
                <div class="col-12 text-center mt-30">
                    <a href="#" class="btn uza-btn btn-3">Load More</a>
                </div>
            </div> -->
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->
@endsection
