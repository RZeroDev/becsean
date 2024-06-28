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
                        <h2 class="title">Découvrez Nos Solutions Agricoles Innovantes</h2>
                       <p>
                        Visionnez notre vidéo pour comprendre comment nos services peuvent transformer votre projet agricole. De l'étude initiale à la réalisation et au suivi technique, nous offrons une expertise complète pour maximiser vos rendements et promouvoir des pratiques durables.
                       </p>
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
                                            <p style="font-size: 22px;">
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
   @include('front.layouts.includes.chooses')
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

                <div class="col-tact-stye-one col-xl-6 col-lg-7" id="contact">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/illustration/10.png') }}"
                            alt="Image Not Found">
                        <h5 class="sub-title">Vous avez des questions?</h5>
                        <h2 class="heading">Envoyez nous un message</h2>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" required name="fullname" placeholder="Nom & Prénoms"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" required  name="email" placeholder="Address email"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" required  name="phone" placeholder="Téléphone"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" required name="message" placeholder="Parler nous de votre project"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i> Prendre contact</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-xl-5 offset-xl-1 col-lg-5">
                    <div class="contact-style-one-info text-light">
                        <h2>
                           Nos
                            <span>
                                Contact
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                    <path
                                        d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0"
                                        style="animation-play-state: running;"></path>
                                </svg>
                            </span>
                        </h2>
                        <p>
                            Vous pouvez nous joindre aux addresses suivantes
                        </p>
                        <ul>
                            <li>
                                <div class="content">
                                    <h5 class="title">Téléphone</h5>
                                    <a href="#">{{ FrontHelper::getSettings()->company_phone }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Lacalisation</h5>
                                    <p>
                                        {{ FrontHelper::getSettings()->company_headquarters }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:{{ FrontHelper::getSettings()->company_email}}</">{{ FrontHelper::getSettings()->company_email }}</</a>
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
