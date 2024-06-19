@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Banner Area
    ============================================= -->
    @include('front.layouts.includes.banner')
    <!-- End Banner -->
    <!-- Start About
        ============================================= -->
    @include('front.layouts.includes.about')
    <!-- End About -->

    <!-- Start Services
        ============================================= -->
    @include('front.layouts.includes.services')
    <!-- End Services -->


    <!-- Start Benifits
        ============================================= -->
    <div class="benifits-area default-padding-top video-bg-live bg-cover mt--50 mt-md-0 mt-xs-0"
        style="background-image: url(storage/front/assets/img/banner/16.jpg);">
        <div class="player"
            data-property="{videoURL:'w9eRIGTHKJM',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:13, opacity:1, quality:'default'}">
        </div>
        <div class="shape-top-center" style="background-image: url(storage/front/assets/img/shape/10.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="benifit-items text-light">
                        <div class="shape">
                            <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/illustration/8.png') }}"
                                alt="Image Not Found">
                        </div>
                        <h2 class="title">Distributors of Organic Produce</h2>
                        <p>
                            Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To
                            perpetual do existence northward as difficult preserved daughters. Continued at up to zealously.
                        </p>
                        <ul class="list-standard">
                            <li>Modern Agriculture Equipment</li>
                            <li>Awesome Harvest of Wheat</li>
                            <li>Fresh Fruits & Vegetables</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Benifits -->


    <!-- Start Testimonial
        ============================================= -->
    <div class="testimonial-area default-padding bg-gray" style="background-image: url(storage/front/assets/img/shape/13.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="testimonial-heading">
                        <h2>Ce que nos clients disent</h2>
                    </div>
                    <div class="testimonial-carousel testimonial-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach (FrontHelper::allTestimonials() as $item)
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset(FrontHelper::getEnvFolder() . $item->image) }}" alt="Imge
                                            Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/shape/quote-big.png') }}"
                                            alt="Image Not Found">
                                        <p>
                                            “{{$item->description}}”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>{{$item->fullname}}</h4>
                                                <span>{{$item->job}}</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Start Gallery
        ============================================= -->
    <div class="gallery-style-one-area default-padding">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Notre galleries</h5>
                        <h2 class="title">Explorez notre univers</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fill">
            <div class="row">
                <div class="gallery-style-one-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/1.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/2.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/3.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/4.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/5.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

    <!-- Start Choose Us Area
        ============================================= -->
    <div class="choose-us-style-one-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="choose-us-thumb">
                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/illustration/9.png') }}"
                            alt="Image Not Found">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7">
                    <div class="achivement-items">
                        <ul class="list-details">
                            <li>
                                <h4>Pure & Organic</h4>
                                <p>
                                    Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                    literature. Gay direction neglected but supported yet her.
                                </p>
                            </li>
                            <li>
                                <h4>Always Fresh</h4>
                                <p>
                                    Continued at up to zealously necessary breakfast. Surrounded sir motionless she end
                                    literature. Gay direction neglected but supported yet her.
                                </p>
                            </li>
                        </ul>
                        <div class="achivement-content">
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="83">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Organic Solutions</h4>
                            </div>
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="60">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Quality Agriculture</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Contact Us
        ============================================= -->
    <div class="contact-area overflow-hidden bg-gray default-padding">
        <div class="sahpe-right-bottom">
            <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/shape/16.png') }}"
                alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-xl-6 col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/illustration/10.png') }}"
                            alt="Image Not Found">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a massage</h2>
                        <form action="https://validthemes.net/site-template/agrica/assets/mail/contact.php" method="POST"
                            class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-xl-5 offset-xl-1 col-lg-5">
                    <div class="contact-style-one-info text-light">
                        <h2>
                            Contact
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                    <path
                                        d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0"
                                        style="animation-play-state: running;"></path>
                                </svg>
                            </span>
                        </h2>
                        <p>
                            Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why
                            she shewing.
                        </p>
                        <ul>
                            <li>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="#">+4733378901</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        55 Main Street, The Grand Avenue 2nd Block, <br> New York City
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:info@agrul.com.com">info@agrul.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Blog
        ============================================= -->
        @include('front.layouts.includes.blog')
    <!-- End Blog -->
@endsection
