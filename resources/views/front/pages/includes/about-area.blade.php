<!--about section start-->
<section class="sc-about-section pb-120 bg-white position-relative z-1 overflow-hidden border-line-bg">
    <span class="sc-shape-gradient sc-shape-gradient-4 position-absolute z--1"></span>
    <span class="sc-shape-gradient sc-shape-gradient-5 position-absolute z--1"></span>
    <span class="sc-shape-gradient sc-shape-gradient-6 position-absolute z--1"></span>
    <div class="container">
        <h2 class="text-primary mb-5 text-center">{{ FrontHelper::getAboutHome()->title }}</h2>
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="sc-about-left position-relative z-1">
                    <img src="{{ asset(FrontHelper::getAboutHome()->image) }}" alt="not found" class="img-fluid"
                        style="width: 400px;">
                    <img src="{{ asset(FrontHelper::getAboutHome()->shape) }}" alt="shape image"
                        class="position-absolute ab-shape z--1 img-fluid" style="width: 300px;">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="sc-about-right">
                    <h3 class="sc-heading-color mb-4">
                        {{ FrontHelper::getAboutHome()->secondTitle }}
                    </h3>
                    @if (Route::currentRouteName() == 'index')
                        <p class="mb-0" style="text-align: justify;">
                            {!! FrontHelper::getAboutHome()->firstDescription !!}
                        </p>
                        <span class="doted-border d-block mt-4 mb-4"></span>
                        <a href="{{ route('about') }}" class="read-more-link text-decoration-none">
                            {{ FrontHelper::getAboutHome()->actionText }} <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    @endif

                    @if (Route::currentRouteName() == 'about')
                        <p class="mb-0" style="text-align: justify;">
                            {!! FrontHelper::getAboutHome()->secondDescription !!}
                        </p>
                        <span class="doted-border d-block mt-4 mb-4"></span>
                        <div style="text-align: justify;">
                            <h4 class="sc-heading-color mb-4">
                                {{ FrontHelper::getAboutPolitique()->title }}
                            </h4>
                            {!! FrontHelper::getAboutPolitique()->description !!}
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section> <!--about section end-->
