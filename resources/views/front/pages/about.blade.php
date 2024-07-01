@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->
    <!-- Start About
    ============================================= -->
    @include('front.layouts.includes.about')
    <!-- End About -->

    <!-- Start Choose Us
    ============================================= -->
    <div class="choose-us-style-three-area default-padding bg-dark text-light">
        <div class="illustration-bottom">
            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/17.png')}}" alt="Image Not Found">
        </div>
        <div class="shape" style="background-image: url({{FrontHelper::getEnvFolder().asset('storage/front/assets/img/about/3.jpg')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 pl-60 pl-md-15 pl-xs-15">
                    <h2 class="title">Une vie saine avec <br> des produits frais </h2>
                    <p>
                        Consume ipsum dolor sit amet consectetur adipisicing elit. Veritatis, illo ullam harum et fuga suscipit quibusdam sapiente. Corrupti ut consequatur magni minus! Iusto eos consectetur similique minus culpa odio temporibus.
                    </p>
                    <div class="list-grid">

                        <div class="achivement-content">
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="87">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Solutions Biologiques</h4>
                            </div>
                        </div>
                        <ul class="list-item">
                            <li>Alimentation biodynamique</li>
                            <li>Jardinage biologique</li>
                            <li>Certification des aliments biologiques</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

        <!-- Start Team
    ============================================= -->
    <div class="team-style-one-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4">
                    <h4 class="sub-title">Nos partenaires</h4>
                    <h2 class="title">Meet our professional farm experts</h2>
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
                                            <img src="{{ asset(FrontHelper::getEnvFolder() . $partner->logo) }}" alt="Image Not Found">
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
    <!-- End Team -->

@endsection
