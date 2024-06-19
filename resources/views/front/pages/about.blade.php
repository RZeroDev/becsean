@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->
    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding overflow-hidden">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-style-one-thumb">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/about/1.jpg')}}" alt="Image Not Found">
                        <div class="animation-shape">
                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/1.png')}}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-style-one-info">

                        <h2 class="title">Agriculture et <br>agriculture biologique</h2>
                        <p>
                            There are many variations of passages of ipsum available but the majority have suffered alteration in some form by injected humor or random word which don’t look even. Comparison new ham melancholy.
                        </p>
                        <div class="fun-fact-style-flex mt-35">
                            <div class="counter">
                                <div class="timer" data-to="25" data-speed="2000">25</div>
                                <div class="operator">M</div>
                            </div>
                            <span class="medium">Growth Tonns <br> of Harvest</span>
                        </div>
                        <ul class="top-feature">
                            <li>
                                <div class="icon">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/3.png')}}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>Produit 100% Garanti Bio</h4>
                                    <p>
                                        Always parties but trying she shewing of moment.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/2.png')}}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>Production d’aliments sains de qualité supérieure</h4>
                                    <p>
                                        Majority have suffered alteration in some form by injected humor.
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Timeline
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
    <!-- End Timeline -->

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
                    <h4 class="sub-title">Nos Agriculteurs</h4>
                    <h2 class="title">Rencontrez nos experts agricoles professionnels</h2>
                    <a class="btn btn-theme secondary mt-10 btn-md radius animation" href="farmers.html">Rencontrez Tous Les Agriculteurs</a>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="team-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/1.jpg')}}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of tomatoes</span>
                                        <h4><a href="farmer-details.html">Aleesha Brown</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/2.jpg')}}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of cherry</span>
                                        <h4><a href="farmer-details.html">Kevin Martin</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/3.jpg')}}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of potato</span>
                                        <h4><a href="farmer-details.html">Sarah Albert</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->
@endsection
