<!--feedback section start-->
    <section class="sc-feedback-section ptb-20 position-relative z-1 overflow-hidden border-line-bg">
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/fd-shape.png') }}" alt="shape" class="position-absolute z--1 bottom-0 start-50 translate-middle-x">
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/fd-curve.png') }}" alt="curve" class="position-absolute z--1 top-50 start-50 translate-middle">
        <!---clients demo pictures-->
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/client-demo-1.png') }}" alt="client" class="position-absolute z--1 rounded-circle bg-white p-2 d-none d-lg-block client-demo client-demo-1">
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/client-demo-2.png') }}" alt="client" class="position-absolute z--1 rounded-circle bg-white p-2 d-none d-lg-block client-demo client-demo-2">
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/client-demo-3.png') }}" alt="client" class="position-absolute z--1 rounded-circle bg-white p-2 d-none d-lg-block client-demo client-demo-3">
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/client-demo-4.png') }}" alt="client" class="position-absolute z--1 rounded-circle bg-white p-2 d-none d-lg-block client-demo client-demo-4">
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/client-demo-5.png') }}" alt="client" class="position-absolute z--1 rounded-circle bg-white p-2 d-none d-lg-block client-demo client-demo-5">
        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/client-demo-6.png') }}" alt="client" class="position-absolute z--1 rounded-circle bg-white p-2 d-none d-lg-block client-demo client-demo-6">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-title text-center">
                        <h2 class="mb-0 clr-text">
                            Ce qu'ils disent de nous
                        </h2>
                    </div>
                </div>
            </div>
            <div class="sc-feedback-slider swiper mt-40">
                <div class="swiper-wrapper">
                    @foreach(FrontHelper::allTestimonials() as $testimonial)
	                    <div class="sc-feedback-card swiper-slide bg-white rounded">
	                        <span class="quote-icon text-end d-block">
	                          <svg width="63"
	                               height="43"
	                               viewBox="0 0 63 43"
	                               fill="none"
	                               xmlns="http://www.w3.org/2000/svg">
	                              <path d="M51.8766 43C49.9078 43 48.3984 42.17 47.3484 40.5099C46.2984 38.8472 46.2328 37.1364 47.1516 35.3773L51.1875 27.3636H43.3125C41.1469 27.3636 39.2936 26.5975 37.7528 25.0651C36.2093 23.5353 35.4375 21.6955 35.4375 19.5455V7.81818C35.4375 5.66818 36.2093 3.8283 37.7528 2.29854C39.2936 0.766181 41.1469 0 43.3125 0H55.125C57.2906 0 59.1452 0.766181 60.6887 2.29854C62.2296 3.8283 63 5.66818 63 7.81818V25.5068C63 26.0932 62.9501 26.6965 62.8504 27.3167C62.7533 27.9344 62.5406 28.5038 62.2125 29.025L56.6016 40.0682C56.1422 40.9803 55.4859 41.697 54.6328 42.2182C53.7797 42.7394 52.8609 43 51.8766 43ZM16.4391 43C14.4703 43 12.9609 42.17 11.9109 40.5099C10.8609 38.8472 10.7953 37.1364 11.7141 35.3773L15.75 27.3636H7.875C5.70937 27.3636 3.85612 26.5975 2.31525 25.0651C0.771749 23.5353 0 21.6955 0 19.5455V7.81818C0 5.66818 0.771749 3.8283 2.31525 2.29854C3.85612 0.766181 5.70937 0 7.875 0H19.6875C21.8531 0 23.7077 0.766181 25.2512 2.29854C26.7921 3.8283 27.5625 5.66818 27.5625 7.81818V25.5068C27.5625 26.0932 27.5139 26.6965 27.4168 27.3167C27.3171 27.9344 27.1031 28.5038 26.775 29.025L21.1641 40.0682C20.7047 40.9803 20.0484 41.697 19.1953 42.2182C18.3422 42.7394 17.4234 43 16.4391 43Z"
	                                    fill="#F8F9FA" />
	                          </svg>
	                      </span>
	                        <ul class="sc-star-list list-unstyled d-flex align-items-center mb-4 mt-1">
	                            @php
                                    $rate = intval($testimonial->rate ?? 5);
                                @endphp
                                @for($i = 1; $i <= $rate; $i++)
                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                @endfor
	                        </ul>
	                        <p class="text-dg-color fw-semibold mb-40" style="text-align: justify;">
	                        	{!! $testimonial->description !!}
	                        </p>
	                        <div class="d-flex align-items-center">
	                            <img src="{{ asset(FrontHelper::getEnvFolder() .$testimonial->image) }}" alt="not found" class="rounded-circle flex-shrink-0" width="60" height="60">
	                            <div class="ms-4">
	                                <h5 class="mb-1 sc-heading-color">{{ $testimonial->fullname }}</h5>
	                                <span class="text-dg-color fs-sm">{{ $testimonial->job }}</span>
	                            </div>
	                        </div>
	                    </div>
	                @endforeach
                </div>
            </div>
        </div>
    </section> <!--feedback section end-->