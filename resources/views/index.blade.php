@extends('Layouts.master')
@section('title', 'Home Page')

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
        "delay": 8000
        }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer-three"
                        style="background-image: url(assets/images/logo/scentsation3.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <p class="main-slider-three__title">Refresh Your Nightlife Experience</p>
                                    <p class="main-slider-three__sub-title">On-demand access to premium fragrances, perfect for a night out. Scentsation brings luxury pay-per-spray fragrance solutions to nightlife venues worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->

    <!--Our Intro Start-->
    <section class="our-intro">
        <div class="our-intro__shape-1 float-bob-y">
            <img src="assets/images/shapes/our-intro-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="our-intro__left">
                        <div class="our-intro__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="our-intro__img">
                                <img src="assets/images/logo/scentsation1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="our-intro__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Introduction</span>
                            <h2 class="section-title__title">We’re Revolutionizing The Fragrance Experience</h2>
                        </div>
                        <p class="our-intro__text">Our innovative vending machines allow patrons instant access to top-tier fragrances on a pay-per-spray basis, giving them a fresh, luxurious experience whenever they want.</p>  
                    </div>
                    <div class="main-slider-three__btn-box">
                        <a href="/about" class="thm-btn main-slider-three__btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Intro End-->

    <!--Our Benefits Start-->
    <section class="services-three">
        <div class="container">
            <div class="services-three__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Benefits</span>
                                <h2 class="section-title__title">Why Choose Scentsation?                                    </h2>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-6 col-lg-6">
                        <div class="services-three__right">
                            <p class="services-three__text">There are many variations of passages of lorem Ipsum
                                available, but the majority simply free text now have suf-fered alteration.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="services-three__bottom">
                <div class="row">
                    <!--Services Three Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-three__single">
                            <div class="services-three__shape-1">
                                <img src="assets/images/shapes/services-three-shape-1.png" alt="">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-customer-service"></span>
                            </div>
                            <h3 class="services-three__title"><a href="#">Instant Access</a></h3>
                            <p class="services-three__text">Enjoy high-quality scents right when you need them.</p>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-three__single">
                            <div class="services-three__shape-1">
                                <img src="assets/images/shapes/services-three-shape-1.png" alt="">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-gift"></span>
                            </div>
                            <h3 class="services-three__title"><a href="#">Luxury Made Affordable</a></h3>
                            <p class="services-three__text">Only pay for the fragrance you use, with options from renowned brands.</p>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-three__single">
                            <div class="services-three__shape-1">
                                <img src="assets/images/shapes/services-three-shape-1.png" alt="">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-lotus-1"></span>
                            </div>
                            <h3 class="services-three__title"><a href="#">Sustainable Practices</a></h3>
                            <p class="services-three__text">We’re committed to minimal waste, offering eco-friendly refill options and recyclable materials.</p>
                        </div>
                    </div>
                </div>
                <div class="services-three__btn-box">
                    <a href="/contact" class="main-slider-three__btn thm-btn">Find a Scentsation Location</a>
                </div>
            </div>
        </div>
    </section>
    <!--Our Benefits  End-->

    <!--How it Works Start-->
    <section class="process-one process-two">
        <div class="process-two__bg" style="background-image: url(assets/images/backgrounds/process-two-bg.png);">
        </div>
        <div class="container">
            <div class="process-one__inner">
                <div class="process-one__shape-1"></div>
                <div class="section-title text-center">
                    <span class="section-title__tagline">3 easy steps - For Patrons</span>
                    <h2 class="section-title__title">How It Works?</h2>
                </div>
                <div class="row">
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__img-box">
                                <div class="services-three__icon">
                                    <span class="icon-magnifying-glass"></span>
                                </div>
                                <div class="process-one__count"></div>
                            </div>
                            <h3 class="process-one__title">Locate</h3>
                            <p class="process-one__text">Locate a Scentsation machine in your venue.</p>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__img-box">
                                <div class="services-three__icon">
                                    <span class="icon-shopping-cart"></span>
                                </div>
                                <div class="process-one__count"></div>
                            </div>
                            <h3 class="process-one__title">Select</h3>
                            <p class="process-one__text">Select a fragrance from our exclusive collection.
                            </p>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__img-box">
                                <div class="services-three__icon">
                                    <svg class="icon icon-credit-card"><use xlink:href="assets/icons.svg#icon-credit-card"></use></svg>
                                </div>
                                <div class="process-one__count"></div>
                            </div>
                            <h3 class="process-one__title">Pay</h3>
                            <p class="process-one__text">Tap to pay via secure digital payment, and enjoy your spray.
                            </p>
                        </div>
                    </div>
                    <!--Process One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--How it Works End-->
    
    <!--For Venue Partner Start-->
    <section class="spa-special">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="spa-special__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">For Venue Partner</span>
                            <h2 class="section-title__title">We work with venues to create an elevated patron experience</h2>
                        </div>
                        <p class="spa-special__text">Our machines increase customer satisfaction, provide a passive income stream, and come with built-in digital advertising to enhance the ambiance. All installation, maintenance, and refill services are handled by our team, making it a seamless addition for your venue.</p>
                    </div>
                    <div class="partner__btn-box">
                        <a href="/partner" class="main-slider-three__btn thm-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="spa-special__right">
                        <div class="spa-special__img-box">
                            <div class="spa-special__shape-1 float-bob-x">
                                <img src="assets/images/shapes/spa-special-shape-1.png" alt="">
                            </div>
                            <div class="spa-special__img">
                                <img src="assets/images/gallery/partner.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--For Venue Partner End-->

    {{-- <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__bg-box">
            <div class="testimonial-one__bg"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
        </div>
        <div class="container">
            <div class="testimonial-one__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">****Customer Reviews</span>
                                <h2 class="section-title__title">What They’re Talking
                                    About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__right">
                            <p class="testimonial-one__text">Quotes from patrons and venue owners praising the unique, on-demand fragrance experience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-one__bottom">
                <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 2
                        },
                        "1200":{
                            "items": 3
                        }
                    }
                }'>
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__icon-quote">
                                <img src="assets/images/icon/icon-quote.png" alt="">
                            </div>
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="testimonial-one__text-2">I was very impresed by the avivon service, lorem
                                    ipsum is simply free text used by copytyping.</p>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h3 class="testimonial-one__client-name">Edna Marxten</h3>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__icon-quote">
                                <img src="assets/images/icon/icon-quote.png" alt="">
                            </div>
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="testimonial-one__text-2">I was very impresed by the avivon service, lorem
                                    ipsum is simply free text used by copytyping.</p>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h3 class="testimonial-one__client-name">Mike Hardson</h3>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__icon-quote">
                                <img src="assets/images/icon/icon-quote.png" alt="">
                            </div>
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="testimonial-one__text-2">I was very impresed by the avivon service, lorem
                                    ipsum is simply free text used by copytyping.</p>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                        <p class="testimonial-one__client-sub-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End--> --}}

    <!--Instagram Two End-->
    <section class="instagram-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Products</span>
                <h2 class="section-title__title">Our Machine</h2>
            </div>
            <div class="instagram-two__bottom">
                <div class="instagram-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        },
                        "1200":{
                            "items": 4
                        }
                    }
                }'>
                    <!--Instagram Single Start-->
                    <div class="item">
                       
                                <img src="assets/images/resources/instagram/scentsation1.jpg" alt="">
                                
                    </div>
                    <!--Instagram Single End-->
                    <!--Instagram Single Start-->
                    <div class="item">
                                <img src="assets/images/resources/instagram/machine3.png" alt="">
                                </div>
                    <!--Instagram Single End-->
                    <!--Instagram Single Start-->
                    <div class="item">
                        
                                <img src="assets/images/resources/instagram/machine2.png" alt="">
                                
                    </div>
                    <!--Instagram Single End-->
                    <!--Instagram Single Start-->
                    <div class="item">
                        
                                <img src="assets/images/resources/instagram/machine1.png" alt="">
                                
                    </div>
                    <!--Instagram Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Instagram Two End-->
@endsection