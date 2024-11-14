@extends('Layouts.master')
@section('title', 'About Us')

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
                        style="background-image: url(assets/images/logo/scentsation2.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <p class="main-slider-three__title">Our Story</p>
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

    <!--Our Story Start-->
    <section class="welcome-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="welcome-one__left">
                        <div class="welcome-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="welcome-one__img">
                                <img src="assets/images/logo/scentsation-logo.jpg" alt="">
                                <div class="welcome-one__shape-1 float-bob-y">
                                    <img src="assets/images/shapes/welcome-one-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="welcome-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Get to know us</span>
                            <h2 class="section-title__title">Story of
                                <br> Scentsation </h2>
                        </div>
                        <p class="welcome-one__text">Founded in 2024, Scentsation was created from a passion for fragrance and a drive to make premium scents accessible in exciting new ways. Inspired by the energy of nightlife, we set out to provide patrons with convenient, luxurious, and eco-conscious fragrance options for the perfect finishing touch.</p>
                        {{-- <ul class="welcome-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-special"></span>
                                </div>
                                <div class="text">
                                    <h3>Special Offers</h3>
                                    <p>Duo ea homero sense
                                        fugit quando</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-gift"></span>
                                </div>
                                <div class="text">
                                    <h3>Special Offers</h3>
                                    <p>Duo ea homero sense
                                        fugit quando</p>
                                </div>
                            </li>
                        </ul> --}}
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <h4> <span class="fa fa-check"></span> Mission Statement</h4>
                                <p>To redefine fragrance accessibility, bringing high-quality, on-demand scents to nightlife hotspots worldwide.</p>
                            </li>
                            <li>
                                <h4> <span class="fa fa-check"></span>Vision Statement</h4>
                                <p>To become the leading provider of fragrance vending solutions, transforming venues across continents with premium, accessible fragrance experiences.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Story End-->

    <!--Core Values Start-->
    <section class="spa-center-two">
        <div class="spa-center-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/logo/scentsation3.jpg);"></div>
        <div class="container">
            <div class="spa-center-two__inner">
                <div class="spa-center-two__title-box">
                    <h3 class="spa-center-two__title">Our Core Values</h3>
                </div>
            </div>
        </div>
    </section>

    <!--Three POints Start-->
    <section class="three-points">
        <div class="container">
            <div class="three-points__wrap">
                <div class="three-points__inner">
                    <div class="three-points__shape-1 float-bob-y">
                        <img src="assets/images/shapes/three-points-shape-1.png" alt="">
                    </div>
                    <ul class="three-points__list list-unstyled">
                        <li>
                            <div class="three-points__icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="three-points__content">
                                <h3 class="three-points__title">Quality</h3>
                                <p class="three-points__text"> Only the best fragrances from top brands.</p>
                            </div>
                        </li>
                        <li>
                            <div class="three-points__icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="three-points__content">
                                <h3 class="three-points__title">Convenience</h3>
                                <p class="three-points__text">Fragrance made accessible anywhere, anytime.</p>
                            </div>
                        </li>
                        <li>
                            <div class="three-points__icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="three-points__content">
                                <h3 class="three-points__title">Sustainability</h3>
                                <p class="three-points__text">Reducing waste through eco-friendly practices.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Three Points End-->
    <!--Core Values End-->

    <!--Pricing Plans Start-->
    <section class="pricing-plan">
        <div class="container">
            <div class="section-title text-center">
                {{-- <span class="section-title__tagline">Our Plans</span> --}}
                <h2 class="section-title__title">Fragrance Collection
                </h2>
            </div>
            <div class="row">
                <!--Pricing Plan Single Start-->
                <div class="col-xl-6 col-lg-6">
                    <div class="pricing-plan__single">
                        <div class="pricing-plan__top">
                            <h3 class="pricing-plan__title">Exclusive Scents
                                <br> </h3>
                            <div class="pricing-plan__icon">
                                <span class="icon-spa-candles"></span>
                            </div>
                        </div>
                        <div class="pricing-plan__bottom">
                            <p class="pricing-plan__per-day">Our curated selection includes bestsellers and exclusive collaborations from the world’s top fragrance houses. Choose from categories like Fresh, Floral, Woodsy, and Oriental to match your mood or style.</p>
                        </div>
                    </div>
                </div>
                <!--Pricing Plan Single End-->
                <!--Pricing Plan Single Start-->
                <div class="col-xl-6 col-lg-6">
                    <div class="pricing-plan__single">
                        <div class="pricing-plan__top">
                            <h3 class="pricing-plan__title">Eco-Friendly Refill</h3>
                            <div class="pricing-plan__icon">
                                <span class="icon-flower"></span>
                            </div>
                        </div>
                        <div class="pricing-plan__bottom">
                            <p class="pricing-plan__per-day">We are dedicated to reducing waste. All ScentsationGlobal fragrances come in recyclable containers, and our refill practices are designed to minimize environmental impact.</p>
                        </div>
                    </div>
                </div>
                <!--Pricing Plan Single End-->
            </div>
        </div>
    </section>
    <!--Pricing Plans End-->
@endsection