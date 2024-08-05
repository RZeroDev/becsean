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
                            <img src="{{ asset('storage/front/assets/img/illustration/8.png') }}"
                                alt="Image Not Found">
                        </div>
                        <h2 class="title">Découvrez nos solutions agricoles innovantes</h2>
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
                                        <img src="{{ asset($item->image) }}" alt="Imge
                                            Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="{{ asset('storage/front/assets/img/shape/quote-big.png') }}"
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
                        <h5 class="sub-title">Notre gallerie</h5>
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
                                <img src="{{ asset('storage/front/assets/img/projects/1.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('storage/front/assets/img/projects/2.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('storage/front/assets/img/projects/3.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('storage/front/assets/img/projects/4.jpg') }}" alt="Image
                                    not Found">
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('storage/front/assets/img/projects/5.jpg') }}" alt="Image
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
            <img src="{{ asset('storage/front/assets/img/shape/16.png') }}"
                alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-xl-6 col-lg-7" id="contact">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="{{ asset('storage/front/assets/img/illustration/10.png') }}"
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
                                contacts
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3960.1626558530893!2d2.66622237499713!3d6.990114193010891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTknMjQuNCJOIDLCsDQwJzA3LjciRQ!5e0!3m2!1sen!2sbj!4v1719932980017!5m2!1sen!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <div class="team-style-one-area">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4">
                    <h4 class="sub-title">Nos partenaires</h4>
                    <h2 class="title">Décrouvez nos partenaires</h2>
                    {{-- <a class="btn btn-theme secondary mt-10 btn-md radius animation" href="farmers.html">Meet all Farmers</a> --}}
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="team-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach (FrontHelper::allPartners() as $partner)
                                <!-- Single Item -->
                                <div class="swiper-slide wisth-50">
                                    <div class="farmer-style-one-item">
                                        <div class="thumb">
                                            <img src="{{ asset($partner->logo) }}" alt="Image Not Found">
                                        </div>
                                        <div class="info text-center">
                                            <span>Partenaire</span>
                                            <h4>{{ $partner->name }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- End Single Item -->
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
