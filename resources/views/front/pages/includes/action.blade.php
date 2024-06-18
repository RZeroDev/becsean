<!--call to action start-->
    <section class="sc-cta-section position-relative z-1 overflow-hidden bg-white border-line-bg mb-5">
        <div class="container">
            <div class="sc-cta-box position-relative z-1 rounded-4 overflow-hidden">
                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/cta-curve.png') }}" alt="not found" class="position-absolute start-0 top-0 z--1">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6">
                        <div class="sc-cta-content">
                            <h3 class="mb-40 text-white">{{ FrontHelper::getAuthorSection()->title }}</h3>
                            <p style="text-align: justify; color: white;">
                            	{!! FrontHelper::getAuthorSection()->description !!}
                            </p>
                            <a href="{{ FrontHelper::getAuthorSection()->actionUrl }}" class="btn btn-primary">{{ FrontHelper::getAuthorSection()->actionText }}</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sc-cta-right position-relative z-1 mt-100 mt-lg-0">
                            <img src="{{ asset(FrontHelper::getAuthorSection()->image) }}" alt="not found" class="img-fluid">
                            <img src="{{ asset(FrontHelper::getAuthorSection()->shape) }}" alt="cta shape" class="position-absolute cta-shape z--1 img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--call to action end-->