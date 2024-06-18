<!--header start-->
    <header class="main-header position-absolute w-100">
        <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
            <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none" >
                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-white.png') }}" width="113" height="36" alt="logo" class="img-fluid logo-white" />
                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-color.png') }}" alt="logo" width="113" height="36" class="img-fluid logo-color" />
                </a>
                <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                    <i class="flaticon-menu" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"
                 data-bs-toggle="offcanvas" role="button"></i>
                </a>
                <div class="clearfix"></div>
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                        <li><a href="{{ route('index') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'index'? '#175CFF' : ''}};">Accueil</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'about'? '#175CFF' : ''}};">À propos</a></li>
                        
                        <li><a href="{{ route('services') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'services'? '#175CFF' : ''}}; color:{{Route::currentRouteName() == 'service.single'? '#175CFF' : ''}}">Services</a></li>
                        <li><a href="{{ route('news') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'news'? '#175CFF' : ''}}; color:{{Route::currentRouteName() == 'actuality.single'? '#175CFF' : ''}}">Actualités</a></li>
                    </ul>
                </div>
                <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block" id="mobileh">
                    <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle" style="margin-right: 35px;">
                        <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                        <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>

                     </a> <!--<a href="login.html" class="btn btn-link text-decoration-none me-2">Sign In</a> -->

                    <!-- </a> <a href="login.html" class="btn btn-link text-decoration-none me-2">Sign In</a> -->

                    <a href="{{ route('contact') }}" class="btn btn-primary">Nous contacter</a>
                </div>
            </div>
        </nav>
        <!--offcanvas menu start-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
            <div class="offcanvas-header d-flex align-items-center mt-4">
                <a href="{{ route('index') }}" class="d-flex align-items-center mb-md-0 text-decoration-none">
                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-color.png') }}" alt="logo" class="img-fluid ps-2" />
                </a>
                <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="flaticon-cancel"></i>
                </button>
            </div>
            <div class="offcanvas-body z-10">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li><a href="{{ route('index') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'index'? '#175CFF' : ''}};">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'about'? '#175CFF' : ''}};">A Propos</a></li>
                    
                    <li><a href="{{ route('services') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'services'? '#175CFF' : ''}}; color:{{Route::currentRouteName() == 'service.single'? '#175CFF' : ''}}">Services</a></li>
                    <li><a href="{{ route('news') }}" class="nav-link" style="color: {{Route::currentRouteName() == 'news'? '#175CFF' : ''}}; color:{{Route::currentRouteName() == 'actuality.single'? '#175CFF' : ''}}">Actualités</a></li>
                </ul>
                <div class="action-btns mt-4 ps-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Nous Contacter</a>
                </div>
            </div>
        </div>
        <!--offcanvas menu end-->
    </header>
<!--header end--> <!--header section end-->