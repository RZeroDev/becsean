@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->

    <!-- Start Services
    ============================================= -->
    <div class="services-style-one-area bg-gray default-padding bottom-less">
        <div class="shape-right-top" style="background-image: url({{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/9.png')}});"></div>
        <div class="container">

            <div class="row">
                <!-- Single Item -->
                @foreach (FrontHelper::allServices() as $service)
                    <div class="col-lg-4 col-md-6 service-one-single">
                        <div class="service-style-one-item">
                            <div class="thumb">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . $service->main_image) }}"
                                    alt="Image Not Found">
                            </div>
                            <div class="info">
                                <div class="top">
                                    <h4><a href="{{ route('service.single',$service->slug) }}">{{ $service->title }}</a></h4>
                                </div>
                                <p>
                                    {{$service->description}}
                                </p>
                            </div>
                            <a href="{{ route('service.single', $service->slug) }}" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Product
    ============================================= -->
    {{-- <div class="product-cat-area default-padding">
        <div class="shape-right-bottom-mini">
            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/11.png')}}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="product-cat-items">
                <div class="row align-center">
                    <div class="col-lg-5 product-cat-info">
                        <h2 class="mask-text" style="background-image: url({{FrontHelper::getEnvFolder().asset('storage/front/assets/img/banner/17.jpg')}});">Healthy Life With Fresh Products</h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="product-cat-lists text-light">
                            <div class="product-list-box">
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/9.png')}}" alt="Icon">
                                        <h5>Blueberry</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/10.png')}}" alt="Icon">
                                        <h5>Strawberry</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/11.png')}}" alt="Icon">
                                        <h5>Cabbage</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/12.png')}}" alt="Icon">
                                        <h5>Maize</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/13.png')}}" alt="Icon">
                                        <h5>Orange</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/14.png')}}" alt="Icon">
                                        <h5>Apples</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Cat -->

    <!-- Start Testimonial
    ============================================= -->
    <div class="testimonial-style-two-area default-padding bg-gray" style="background-image: url({{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/27.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Avis Des Clients</h5>
                        <h2 class="title">Qu’en disent les gens ?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-style-two-carousel swiper text-center">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item-info">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>
                                            “Targeting consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.”
                                        </p>
                                    </div>
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/3.jpg')}}" alt="Image Not Found">
                                            <div class="quote">
                                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/quote.png')}}" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="content">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item-info">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>
                                            “Mentions consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.”
                                        </p>
                                    </div>
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/1.jpg')}}" alt="Image Not Found">
                                            <div class="quote">
                                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/quote.png')}}" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="content">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item-info">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>
                                            “Greatest consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.”
                                        </p>
                                    </div>
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/2.jpg')}}" alt="Image Not Found">
                                            <div class="quote">
                                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/quote.png')}}" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="content">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>

                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Start Choose Us Area
    ============================================= -->
    <div class="choose-us-style-one-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="choose-us-thumb">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/9.png')}}" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7">
                    <div class="achivement-items">
                        <ul class="list-details">
                            <li>
                                <h4>Pur et biologique</h4>
                                <p>
                                    Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
                                </p>
                            </li>
                            <li>
                                <h4>Toujours frais</h4>
                                <p>
                                    Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
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
                                <h4>Solutions biologiques</h4>
                            </div>
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="60">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Agriculture de qualité</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Brand
    ============================================= -->
    <div class="brand-style-two-area text-center bg-gray default-padding">
        <div class="container">
            <div class="brand-style-two">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand5col swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/brand/1.png')}}" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/brand/2.png')}}" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/brand/3.png')}}" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/brand/4.png')}}" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/brand/5.png')}}" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/brand/3.png')}}" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Brand -->
            </div>
        </div>
    </div>
    <!-- End Brand -->


@endsection
