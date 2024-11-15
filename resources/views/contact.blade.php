@extends('Layouts.master')
@section('title', 'Contact')

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
                        style="background-image: url(assets/images/gallery/contact.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <p class="main-slider-three__title">Contact Us</p>
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

    {{-- <!--Location Start-->
    <section class="spa-center-three">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Locations</span>
                <h2 class="section-title__title">Find a Scentsation Location</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="spa-center-three__single">
                        <h3 class="spa-center-three__title">xxx</h3>
                        <p class="spa-center-three__text">22 Texas West Hills
                            <br> Mon - Fri: 9:00 to 19:00</p>
                        <div class="spa-center-three__contact">
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                            <a href="tel:8889990000">888 999 0000</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="spa-center-three__single">
                        <h3 class="spa-center-three__title">xxx</h3>
                        <p class="spa-center-three__text">22 Texas West Hills
                            <br> Mon - Fri: 9:00 to 19:00</p>
                        <div class="spa-center-three__contact">
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                            <a href="tel:8889990000">888 999 0000</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="spa-center-three__single">
                        <h3 class="spa-center-three__title">xxx</h3>
                        <p class="spa-center-three__text">22 Texas West Hills
                            <br> Mon - Fri: 9:00 to 19:00</p>
                        <div class="spa-center-three__contact">
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                            <a href="tel:8889990000">888 999 0000</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="spa-center-three__single">
                        <h3 class="spa-center-three__title">xxx</h3>
                        <p class="spa-center-three__text">22 Texas West Hills
                            <br> Mon - Fri: 9:00 to 19:00</p>
                        <div class="spa-center-three__contact">
                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                            <a href="tel:8889990000">888 999 0000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Location Three End--> --}}

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Contact us</span>
                            <h2 class="section-title__title">Send a Message</h2>
                        </div>
                        <p class="contact-page__text">Interested?  <br> Contact us now!</p>
                        <div class="contact-page__social">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <div class="contact-page__content">
                            <div class="message-container"></div>
                            <form action="{{ route('send.email') }}" method="POST" class="contact-page__form contact-form-validated" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-page__form-input-box">
                                            <input type="text" placeholder="Full Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page__form-input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__form-input-box">
                                            <select name="subject" class="contact-page__form-select">
                                                <option value="" disabled selected>I am a:</option>
                                                <option value="Venue Owner">Venue Owner</option>
                                                <option value="Fragrance Brand">Fragrance Brand</option>
                                                <option value="General Inquiry">General Inquiry</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__form-input-box text-message-box">
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="thm-btn contact-page__btn">Send a message</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    {{-- <!--Faq Start-->
    <section class="why-choose-one">
        <div class="why-choose-one__shape-1 float-bob-x">
            <img src="assets/images/shapes/why-choose-one-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img">
                            <img src="assets/images/logo/scentsation2.jpg" alt="">
                            <div class="why-choose-one__left-title">
                                <h2>Scentsation</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">FAQ Section</span>
                            <h2 class="section-title__title">Got questions? We’ve got answers.
                            </h2>
                        </div>
                        <div class="why-choose-one__faq">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Question 1 ?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Answer</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Question 2 ?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Answer</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion last-child">
                                    <div class="accrodion-title">
                                        <h4>Question 3 ?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Answer</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq End--> --}}

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.contact-page__form').on('submit', function(e) {
            e.preventDefault();
            
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Show success message
                    $('.message-container').html('<div class="alert alert-success">Your message has been sent successfully!</div>');
                },
                error: function() {
                    alert('There was an error sending your message. Please try again.');
                }
            });
        });
    });
</script>
@endsection