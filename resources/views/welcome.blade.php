@extends('layouts.master')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="{{ URL::asset('assets/img/core-img/curve-1.png')}}" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100" style="margin-top: -100px;">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Selamat<br><span>Datang</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                                    <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="{{ URL::asset('assets/img/bg-img/img-1.png') }}" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="{{ URL::asset('assets/img/core-img/curve-1.png')}}" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100"  style="margin-top: -100px;">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h3 data-animation="fadeInUp" data-delay="100ms">Sarana Darma makes your <br> holiday <span>greater</span></h3>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                                    <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="{{ URL::asset('assets/img/bg-img/img-2.png') }}" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="{{ URL::asset('assets/img/core-img/curve-1.png')}}" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100"  style="margin-top: -100px;">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h3 data-animation="fadeInUp" data-delay="100ms">Sarana Darma makes your <br> holiday <span>greater</span></h3>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                                    <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="{{ URL::asset('assets/img/bg-img/img-1.png')}}" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="{{ URL::asset('assets/img/bg-img/2.jpg') }}" alt="">
                        <!-- Video Area -->
                        <div class="uza-video-area hi-icon-effect-8">
                            <a href="#" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>We're a Travel Team</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna
                            liquyam erat.</p>
                        <a href="#" class="btn uza-btn btn-2 mt-4">Start Exploring</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="{{ URL::asset('assets/img/core-img/curve-2.png')}}" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div>
                        <h5>Business Strategy</h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_piechart"></i>
                        </div>
                        <h5>Market Analytics</h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_easel"></i>
                        </div>
                        <h5>Marketing Social</h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Gallery</h2>
                        <p>We stay on top of our industry by being experts in yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/3.jpg') }}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/4.jpg') }}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/5.jpg') }}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/6.jpg') }}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/5.jpg') }}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{ URL::asset('assets/img/bg-img/6.jpg') }}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Client Feedback Area Start -->
        <div class="clients-feedback-area mt-80 section-padding-80 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{ URL::asset('assets/img/bg-img/7.jpg') }}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO colorlib</span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="{{ URL::asset('assets/img/core-img/quote.png') }}" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{ URL::asset('assets/img/bg-img/23.jpg')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO colorlib</span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="{{ URL::asset('assets/img/core-img/quote.png') }}" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{ URL::asset('assets/img/bg-img/24.jpg') }}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO colorlib</span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="{{ URL::asset('assets/img/core-img/quote.png') }}" alt=""></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Feedback Area End -->

        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="./img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->
@endsection
