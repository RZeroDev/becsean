@extends('front.layouts.master')
@section('title', $service->title)
@section('filAriane')
    <a href="{{ route('services') }}">Services</a> &bull; {{$service->title}}
@endsection
@section('content')
<style>
    .swiper-slide img {
    transition: transform 0.3s;
}

.swiper-slide img:hover {
    transform: scale(1.5);
}

</style>
<!--feature section start-->

<section class="feature-section ptb-100 mb-5">
    <div class="container">
        <div class="row align-items-lg-center justify-content-between">
            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-4">
                    <h2>{!! $service->title !!}</h2>
                    <p style="text-align: justify;">
                        {!! $service->description !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" style="">
                <div class="pr-lg-4 mt-md-3 mt-lg-0 position-relative">
                    <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 mx-lg-auto">
                        <div class="ins-feedback-slider-wrapper overflow-hidden mt-4">
                            <div class="ins-feedback-slider swiper overflow-visible">
                                <div class="swiper-wrapper" id="image-slider">
                                    <div class="swiper-slide" style="height: 250px;">
                                        <img src="{{ asset(FrontHelper::getEnvFolder() . $service->main_image) }}" alt="" class="img-fluid shadow-sm rounded-custom" style="margin-top: 20px; height: 200px;">
                                        <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                    </div>
                                    @if (FrontHelper::getEnvFolder() . $service->images)
                                        @foreach ($service->images as $image)
                                            <div class="swiper-slide" style="height: 250px;">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . $image->url) }}" alt="" class="img-fluid shadow-sm rounded-custom" style="margin-top: 20px; height: 200px;">
                                                <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="swiper-btn-prev swiper-control-btn"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="swiper-btn-next swiper-control-btn" style="background-color: #175CFF;"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            
        </div>
    </div>
</section>


<!--feature section end-->

<!--feature promo section start-->
<section class="feature-promo ptb-120 bg-light-subtle">
    <div class="container">
        @if($service->underservices && $service->underservices->isNotEmpty())
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h2 class="text-primary mb-5 text-center">Sous services</h2>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            @php
                $totalUnderServices = count($service->underservices);
            @endphp
        	@foreach($service->underservices as $underservice)
	            <div class="col-lg-{{ $totalUnderServices == 3 ? '4' : '3' }} col-md-6">
	                <div class="single-feature-promo p-lg-5 p-4 text-center mt-3">
	                    <div class="feature-icon icon-center pb-5 rounded-custom bg-primary">
	                        <img src="{{asset(FrontHelper::getEnvFolder() .$underservice->image) }}" alt="icon" class="img-fluid feature-icon">
	                    </div>
	                    <div class="feature-info-wrap">
	                        <h3 class="h5">{{ $underservice->title }}</h3>
	                        <p>
	                        	{!! $underservice->description !!}
	                        </p>
	                    </div>
	                </div>
	            </div>
	        @endforeach
        </div>
        <div class="row">
        	<h2 class="text-primary mb-5 text-center">Autres Services</h2>
            @foreach(FrontHelper::getAllServicesWS($service) as $servic)
                
                    <div class="col-lg-4 col-md-12">
                        <div class="single-article rounded-custom my-3">
                            <a href="{{ route('service.single', $servic) }}" class="article-img">
                                <img src="{{ asset($servic->main_image) }}" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <a href="{{ route('service.single', $servic) }}">
                                    <h2 class="h5 article-title limit-2-line-text" style="line-height: 35px;">
                                        {{ $servic->title }}
                                    </h2>
                                </a>
                                <p class="limit-2-line-text">
                                    {!! Str::limit($servic->description, 65) !!}
                                </p>
                                <a href="{{ route('service.single', $servic) }}" class="link-with-icon text-decoration-none mt-3">Lire plus <i
                                    class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                
            @endforeach
        </div>
        
        <!--pagination start-->
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-auto my-1">
                <nav>
                    <ul class="pagination rounded mb-0">
                        {{ FrontHelper::getAllServicesWS($service)->links('pagination::bootstrap-4') }}
                    </ul>
                </nav>
            </div>
        </div>
        <!--pagination end-->
    </div>
</section> <!--feature promo section end-->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            var swiperElement = document.querySelector('.ins-feedback-slider');
            var swiperInstance = swiperElement.swiper;
 
            if (swiperInstance) {
                swiperElement.addEventListener('mouseenter', function () {
                    swiperInstance.autoplay.stop();
                });
 
                swiperElement.addEventListener('mouseleave', function () {
                    swiperInstance.autoplay.start();
                });
            } else {
                console.error('Swiper instance not found');
            }
        }, 1000);
    });
 </script>
 
@endsection
