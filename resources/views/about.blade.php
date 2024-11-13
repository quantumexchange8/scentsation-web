@extends('Layouts.master')

@section('contents')
    {{-- <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>About Us</li>
                </ul>
                <h2>Our Story</h2>
            </div>
        </div>
    </section>
    <!--Page Header End--> --}}

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
                        style="background-image: url(assets/images/backgrounds/main-slider-3-1.jpg);"></div>
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
                                <img src="assets/images/resources/welcome-one-img-1.jpg" alt="">
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
            style="background-image: url(assets/images/backgrounds/spa-center-two-bg.jpg);"></div>
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
            <!--Contact One Start-->
            <section class="contact-one">
                <div class="contact-one__shape-1 float-bob-x">
                    <img src="assets/images/shapes/contact-one-shape-1.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="contact-one__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Contact us</span>
                                    <h2 class="section-title__title">Send a Message or Book
                                        Our Services</h2>
                                </div>
                                <p class="contact-one__text">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit sed
                                    do eiusm od tempor ut labore. sit simply free text amet scelerisque eros. Phasellus
                                    hendrerit neque a augue.</p>
                                <div class="contact-one__img-and-counter">
                                    <div class="contact-one__img">
                                        <img src="assets/images/resources/contact-one-img.jpg" alt="">
                                    </div>
                                    <ul class="contact-one__counter list-unstyled">
                                        <li>
                                            <div class="contact-one__count-box">
                                                <h3 class="odometer" data-count="8963">00</h3>
                                            </div>
                                            <p class="contact-one__count-text">Massages & Therapies</p>
                                        </li>
                                        <li>
                                            <div class="contact-one__count-box">
                                                <h3 class="odometer" data-count="326">00</h3>
                                            </div>
                                            <p class="contact-one__count-text">Happy Repeat Clients</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="contact-one__right">
                                <div class="contact-one__content">
                                    <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated"
                                        novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="contact-one__form-input-box">
                                                    <input type="text" placeholder="Your Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="contact-one__form-input-box">
                                                    <input type="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="contact-one__form-input-box">
                                                    <input type="text" placeholder="Phone" name="Phone">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="contact-one__form-input-box">
                                                    <input type="text" placeholder="Select Service" name="Select Service">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-one__form-input-box text-message-box">
                                                <textarea name="message" placeholder="Write Message"></textarea>
                                            </div>
                                            <div class="contact-one__btn-box">
                                                <button type="submit" class="thm-btn contact-one__btn">Send a
                                                    message</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Contact One End-->

@endsection