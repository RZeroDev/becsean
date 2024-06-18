<!-- Logo Start -->
        <section class="digtal-marketing-logo pb-120 mt-5">
            <div class="container">
                <div class="bg-light-subtle shadow-sm py-5 px-4 rounded-3">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <h2 class="text-primary mb-4">Nos clients</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="swiper digi-logo-slider">
                                <div class="swiper-wrapper">
                                	@foreach(FrontHelper::allPartners() as $partner)
	                                    <div class="swiper-slide">
	                                        <div class="single-logo">
	                                            <img src="{{ asset(FrontHelper::getEnvFolder() .$partner->logo) }}" class="img-fluid" height="30" style="max-height: 150px;" alt="logo" />
	                                        </div>
	                                    </div>
	                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Logo End -->