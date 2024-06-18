<!--footer section start-->
        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top  bg-gradient text-white ptb-120" style="background: url('{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/page-header-bg.svg') }}')no-repeat bottom right">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-white.png') }}" alt="logo" class="img-fluid logo-white" width="113" height="36">
                                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-color.png') }}" width="113" height="36" alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>
                                    {{ FrontHelper::getDescriptionFooter()->description }}
                                </p>

                                <!-- <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2" placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form> -->
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">{{ FrontHelper::getDescriptionFooter()->note }}</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                <div class="footer-single-col">
                                    <h3>Services</h3>
                                    <ul class="list-unstyled footer-nav-list mb-lg-0">
                                        @foreach(FrontHelper::allServicesForFooter() as $service)
                                            <li><a href="{{ route('service.single', $service) }}" class="text-decoration-none">{{ $service->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                <div class="footer-single-col">
                                    <h3>Pages</h3>
                                    <ul class="list-unstyled footer-nav-list mb-lg-0">
                                        <li><a href="{{ route('index') }}" class="text-decoration-none" style="color: {{Route::currentRouteName() == 'index'? '#175CFF' : ''}};">Accueil</a></li>
                                        <li><a href="{{ route('about') }}" class="text-decoration-none" style="color: {{Route::currentRouteName() == 'about'? '#175CFF' : ''}};">À propos</a></li>
                                        <li><a href="{{ route('services') }}" class="text-decoration-none" style="color: {{Route::currentRouteName() == 'services'? '#175CFF' : ''}}; color:{{Route::currentRouteName() == 'service.single'? '#175CFF' : ''}}">Services</a></li>
                                        <li><a href="{{ route('news') }}" class="text-decoration-none" style="color: {{Route::currentRouteName() == 'news'? '#175CFF' : ''}}; color:{{Route::currentRouteName() == 'actuality.single'? '#175CFF' : ''}}">Actualités</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                <div class="footer-single-col">
                                    <h3>Autres Liens</h3>
                                    <ul class="list-unstyled footer-nav-list mb-lg-0">
                                        <li><a href="{{ route('contact') }}" class="text-decoration-none" style="color: {{Route::currentRouteName() == 'contact'? '#175CFF' : ''}};">Nous contacter</a>
                                        </li>
                                        <li><a href="{{ route('cgu') }}" class="text-decoration-none" style="color: {{Route::currentRouteName() == 'cgu'? '#175CFF' : ''}};">CGU</a>
                                        </li>
                                        <li><a href="{{ route('mentionsLegales') }}" class="text-decoration-none" style="color: {{Route::currentRouteName() == 'mentionsLegales'? '#175CFF' : ''}};">Mentions légales</a>
                                        </li>
                                        <li><a href="{{ route('login') }}" class="text-decoration-none" target="_blank">Se connecter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom  bg-gradient text-white py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; {{ date('Y') }} {{ FrontHelper::getAppName() }} Tous droits réservés. Développé par
                                <a target="_blank" href="https://twoftechnologies.fr/">
                                    <span class="text-warning">TwoF</span>
                                    <span class="text-info">Technologies</span>
                                </a>.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end--> <!--footer section end-->