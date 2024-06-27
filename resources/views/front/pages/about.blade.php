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

    {{-- <!-- Start Timeline
    ============================================= -->
    <div class="timeline-area default-padding-bottom" style="background-image: url({{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/21.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading">
                        <h2 class="title">L’agriculture existe <br> depuis 1866</h2>
                        <div class="row">
                            <div class="col-xl-10 offset-xl-2">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam eaque laborum ad asperiores dolorem. Adipisci error eaque dolorem, itaque aliquam animi fuga dolor ipsam! Velit ratione hic corporis veritatis odit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timeline-items">
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1906</h2>
                            <h4>Ferme ouverte</h4>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1920</h2>
                            <h4>Rénovation de la ferme</h4>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1925</h2>
                            <h4>Formation des producteurs de céréales</h4>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1930</h2>
                            <h4>Début de l’agriculture</h4>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Timeline --> --}}

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

@endsection
