<!--service section start-->
    <section class="sc-service-section ptb-20 bg-white overflow-hidden position-relative z-1 border-line-bg mb-5" style="{{ Route::currentRouteName() == 'index' ? 'margin-top: 60px;' : '-20px' }}">
        <span class="sc-shape-gradient sc-shape-gradient-1 position-absolute z--1"></span>
        <span class="sc-shape-gradient sc-shape-gradient-2 position-absolute z--1"></span>
        <span class="sc-shape-gradient sc-shape-gradient-3 position-absolute z--1"></span>
        <div class="container">
            <h2 class="text-primary mb-5 text-center">{{ FrontHelper::getServieHome()->title }}</h2>
            <div class="row align-items-center justify-content-center justify-content-lg-between g-4">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title text-center text-lg-start">
                        <h2 class="sc-heading-color mb-0">
                            {{ FrontHelper::getServieHome()->secondTitle }}
                        </h2>
                    </div>
                </div>
                @if(Route::currentRouteName() == 'index')
                    <div class="col-lg-4">
                        <div class="text-end d-none d-lg-block">
                            <a href="{{ route('services') }}" class="btn sc-outline-btn">{{ FrontHelper::getServieHome()->actionText }}</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <div class="row justify-content-cetner g-4 justify-content-center">
                	@foreach(FrontHelper::allServices() as $service)
	                    <div class="col-xxl-4 col-xl-4 col-md-6">
	                        <div class="sc-service-card bg-white rounded">
	                        	<a href="{{ route('service.single', $service) }}" class="article-im">
	                                <img src="{{ asset(FrontHelper::getEnvFolder() .$service->main_image) }}" alt="article" class="img-fluid" style="max-height: 110px; max-width: 200px;">
	                            </a>
	                            <a href="{{ route('service.single', $service) }}">
	                                <h5 class="sc-heading-color mb-3">{{ $service->title }}</h5>
	                            </a>
	                            <p class="mb-30">
	                            	{!! Str::limit($service->description, 65) !!}
	                            </p>
	                            <div class="d-flex align-items-center justify-content-between">
	                                <a href="{{ route('service.single', $service) }}" class="explore-more">Lire plus</a>
	                                {{--<img src="{{ asset($service->main_image) }}" alt="icon" class="img-fluid feature-icon">--}}
	                            </div>
	                        </div>
	                    </div>
	                @endforeach
                </div>
                @if(Route::currentRouteName() == 'index')
                    <div class="text-center d-lg-none mt-5">
                        <a href="{{ route('services') }}" class="btn sc-outline-btn">Tout voir</a>
                    </div>
                @endif
                
            </div>
            @if(Route::currentRouteName() != 'index')
                <!--pagination start-->
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-auto my-1">
                        <nav>
                            <ul class="pagination rounded mb-0">
                                {{ FrontHelper::allServices()->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--pagination end-->
            @endif
        </div>
    </section> <!--service section end-->