<!--how it work section-->
    <section class="sc-htw-section bg-light-subtle position-relative z-1 overflow-hidden ptb-120 border-line-bg">
        <div class="container">
            <div class="row justify-content-center justify-content-xxl-start">
                <div class="col-xxl-6 col-lg-7 pb-2">
                    <div class="section-title text-center text-xxl-start">
                        <h2 class="mb-0 clr-text">
                        	Notre processus de travail intelligent 
                        </h2>
                    </div>
                </div>
            </div>
             <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/line-doted.png') }}" alt="not found" class="img-fluid mt-40 mb-4 line-doted d-none-mobile spacing-mobile">
            <div class="row g-4 justify-content-center">
                @foreach(FrontHelper::getProcessWork() as $work)
                    <div class="col-xxl-4 col-xl-4 col-md-6">
                        <div class="htw-single-item bg-white rounded" style="height: 250px;">
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper position-relative">
                                  <h4 class="mb-0 text-white position-absolute start-50 top-50 translate-middle">0{{ $work->number }}</h4>
                                  <img src="{{ FrontHelper::getIconShape($work->number) }}"
                                       alt="icon">
                              </span>
                                <h5 class="mb-0 ms-3">{{ $work->title }}</h5>
                            </div>
                            <p class="mb-0 mt-3">
                            	{!! $work->description !!}
                            </p>
                
                        </div>
                    </div>
                @endforeach
                
                
            </div>
        </div>
    </section> <!--how it work section end-->