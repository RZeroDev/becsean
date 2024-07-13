<div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
    <!-- Slider main container -->
    <div class="banner-fade">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <!-- Single Item -->
            <div class="swiper-slide banner-style-one">
                <div class="banner-thumb bg-cover shadow dark" style="background: url(storage/front/assets/img/banner/3.jpg);"></div>
                <div class="shape">
                    <img src="{{ asset('storage/front/assets/img/shape/2.png')}}" alt="Image Not Found">
                </div>
                <div class="container">
                    <div class="row align-center">
                        <div class="col-xl-9">
                            <div class="content">
                                <div class="badge">
                                    <div class="curve-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                            <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                            <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>Transformez Vos Idées en Projets Agricoles Réussis</h3>
                                    <p>
                                        Découvrez des solutions complètes et personnalisées pour maximiser le potentiel de vos terrains agricoles, de l'étude initiale à la récolte finale.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme btn-md radius animation" href="{{route('contact')}}">Nous contactez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="swiper-slide banner-style-one">
                <div class="banner-thumb bg-cover shadow dark" style="background: url(storage/front/assets/img/banner/4.jpg);"></div>
                <div class="shape">
                    <img src="{{ asset('storage/front/assets/img/shape/2.png')}}" alt="Image Not Found">
                </div>
                <div class="container">
                    <div class="row align-center">
                        <div class="col-xl-9">
                            <div class="content">
                                <div class="badge">
                                    <div class="curve-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                            <path id="textPath2" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                            <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>Votre Partenaire pour une Agriculture Durable et Prospère</h3>
                                    <p>
                                        Accompagnement expert à chaque étape de votre projet agricole pour garantir des rendements optimisés et une gestion efficace des ressources.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme btn-md radius animation" href="{{ route('services') }}">Nos services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->

        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</div>
