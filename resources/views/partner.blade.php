@extends('Layouts.master')
@section('title', 'Partnership')

@section('contents')

    <!--Main Slider Start-->
    <section class="main-slider-three">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer-three"
                        style="background-image: url(assets/images/gallery/partners-1.png);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <p class="main-slider-three__title">Partner With Us</p>
                                    <div class="main-slider-three__btn-box">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->
    
    <!--Partner with us Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Join us</span>
                            <h2 class="section-title__title">Partner With Us</h2>
                        </div>
                        <p class="about-one__text">There are many variations of passages of available but the
                            majority have suffered alteration in some form, by injected humou or words even slightly
                            believable.</p>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <h4> <span class="fa fa-check"></span>For Venues</h4>
                                <p>Increase patron satisfaction and generate passive income by hosting a ScentsationGlobal machine.</p>
                            </li>
                            <li>
                                <h4> <span class="fa fa-check"></span> For Brands</h4>
                                <p>Reach your audience directly with pay-per-spray exposure and custom ad placements on our digital screens</p>
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-one__single-two">
                        <h3 class="feature-one__single-two-title">Benefits of Partnership</h3>
                        <ul class="feature-one__single-two-points list-unstyled">
                            <li>
                                <div class="day">
                                    <p>Increased brand visibility in nightlife settings.</p>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <p>Real-time customer usage data.</p>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <p>Sustainable, brand-aligned experiences.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="partner__center">
                        <div class="about-one__btn-call-box">
                            <a href="/contact" class="main-slider-three__btn thm-btn">Become a Partner</a>
                            {{-- <div class="about-one__call-box">
                                <div class="about-one__call-icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="about-one__call-content">
                                    <p class="about-one__call-sub-title">Call Anytime</p>
                                    <h4 class="about-one__call-number"><a href="tel:9288006398">+92 (8800) 6398</a>
                                    </h4>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Partner with us End-->

@endsection