@extends('front.layouts.master')
@section('title', $actuality->title)
@section('filAriane')
    <a href="{{ route('news') }}">Actualités</a> &bull; {{ $actuality->title }}
@endsection
@section('content')
    <!--blog details section start-->
    <section class="blog-details ptb-20">
        @if ($actuality->image)
            <div class="container">
                <div class="row align-items-lg-center justify-content-between">
                    <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                        <div class="mb-4">
                            <h2>{!! $actuality->title !!}</h2>
                            <p style="text-align: justify;">
                                {!! $actuality->description !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="pr-lg-4 mt-md-3 mt-lg-0 position-relative">
                            <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 mx-lg-auto">
                                <div class="ins-feedback-slider-wrapper overflow-hidden mt-4">
                                    <div class="ins-feedback-slider swiper overflow-visible">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" style="height: 250px;">
                                                <div class="img-container overflow-hidden" style="pointer-events: none;">
                                                    <img src="{{ asset(FrontHelper::getEnvFolder() .$actuality->image) }}" alt="" class="img-fluid shadow-sm rounded-custom" style="margin-top: 20px; height: 200px;">
                                                </div>
                                                <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                            </div>
                                            @if(FrontHelper::getEnvFolder() .$actuality->images)
                                                @foreach($actuality->images as $image)
                                                    <div class="swiper-slide overflow-hidden" style="height: 250px;">
                                                        <div class="img-container" style="pointer-events: none;">
                                                            <img src="{{ asset(FrontHelper::getEnvFolder() .$image->url) }}" alt="" class="img-fluid shadow-sm rounded-custom" style="margin-top: 20px; height: 200px;">
                                                        </div>
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
                    {{-- <div class="col-lg-6 order-lg-1">
                    <div class="pr-lg-4 mt-md-4 position-relative">
                        <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset(FrontHelper::getEnvFolder() .$actuality->image) }}" alt="" class="img-fluid shadow-sm rounded-custom">
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        @else
            <div class="container">
                <div class="bg-dark ptb-60 px-5 mt-50 position-relative overflow-hidden rounded-custom"
                    style="background: url('{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/page-header-bg.svg') }}')no-repeat center bottom">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-9">
                            <iframe width="560" height="315" src="{{ $actuality->video }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-dark-light left-5"></div>
                </div>
                <div class="mb-4" style="margin-top: 2%;">
                    <h2>{!! $actuality->title !!}</h2>
                    <p style="text-align: justify;">
                        {!! $actuality->description !!}
                    </p>
                </div>
            </div>

        @endif
    </section>
    <!--blog details section end-->

    <!--related blog start-->
    <section class="related-blog-list ptb-120 bg-light-subtle">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-12">
                    <div class="section-heading">
                        <h4 class="h5 text-primary">Autres actualités</h4>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0">
                        <a href="{{ route('news') }}" class="btn btn-primary">Tout voir</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach (FrontHelper::getAllActualitiesWA($actuality) as $actualiti)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="{{ route('actuality.single', $actualiti) }}" class="article-img">
                                @if ($actualiti->image)
                                    <img src="{{ asset(FrontHelper::getEnvFolder() . $actualiti->image) }}" alt="blog thumb"
                                        class="img-fluid" style="max-height: 250px; min-height: 250px;">
                                @else
                                    <iframe width="560" height="240" src="{{ $actuality->video }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                @endif
                            </a>
                            <div class="article-content p-4">
                                <a href="{{ route('actuality.single', $actualiti) }}">
                                    <h2 class="h5 article-title limit-2-line-text" style="line-height: 35px;">
                                        {{ $actualiti->title }}
                                    </h2>
                                </a>
                                <p class="limit-2-line-text">
                                    {!! Str::limit($actualiti->description, 65) !!}
                                </p>
                                <a href="{{ route('actuality.single', $actualiti) }}"
                                    class="link-with-icon text-decoration-none mt-3">Lire plus <i
                                        class="fas fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                @endforeach
                <!--pagination start-->
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-auto my-1">
                        <nav>
                            <ul class="pagination rounded mb-0">
                                {{ FrontHelper::getAllActualitiesWA($actuality)->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--pagination end-->
            </div>
        </div>
    </section>
    <!--related blog end-->


@stop
