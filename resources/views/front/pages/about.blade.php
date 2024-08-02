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


        <!-- Start Team
    ============================================= -->
    <div class="team-style-one-area default-padding">
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
