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
                                    {{Str::limit($service->description,240)}}
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
                           @foreach (FrontHelper::allTestimonials() as $item)
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
                                        “{{ $item->description }}”
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="{{asset($item->image)}}" alt="Image Not Found">
                                        <div class="quote">
                                            <img src="{{asset($item->image)}}" alt="Image Not Found">
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="content">
                                            <h4>{{ $item->fullname }}</h4>
                                            <span>{{ $item->job }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           @endforeach
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
    @include('front.layouts.includes.chooses')

    <!-- End Choose Us -->

    <!-- Start Brand
    ============================================= -->
    {{-- <div class="brand-style-two-area text-center bg-gray default-padding">
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
    </div> --}}
    <!-- End Brand -->


@endsection
