<!--blog section start-->
    <section class="sc-blog-section bg-white position-relative overflow-hidden z-1 ptb-20 border-line-bg">
        <div class="container">
        	<h2 class="text-primary mb-5 text-center">{{ FrontHelper::getActualityPage()->title }}</h2>
            <div class="row justify-content-center g-4">
            	@foreach(FrontHelper::allActualities() as $actuality)
	                <div class="col-xl-4 col-md-6">
	                    <article class="sc-blog-card bg-white rounded-4 overflow-hidden rounded-4 overflow-hidden">
	                        <div class="thumbnail overflow-hidden">
	                            <a href="{{ route('actuality.single', $actuality) }}">
	                            	@if($actuality->image)
	                            		<img src="{{ asset(FrontHelper::getEnvFolder() .$actuality->image) }}" alt="blog thumb" class="img-fluid" style="max-height: 250px; min-height: 250px;">
	                            	@else
	                            		<iframe width="560" height="240" src="{{ $actuality->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	                            	@endif
	                            </a>
	                        </div>
	                        <div class="sc-blog-card-content p-4">
	                            <a href="{{ route('actuality.single', $actuality) }}">
	                                <h5 class="mb-3" style="line-height: 35px;">
	                                	{{ $actuality->title }}
	                                </h5>
	                            </a>
	                            <p class="mb-4">
	                            	{!! Str::limit($actuality->description, 65) !!}
	                            </p>
	                            <div class="author-info d-flex align-items-center">
	                                {{--<img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/client-demo-1.png') }}" alt="not found" class="rounded-circle">
	                                <div class="authors-info-right ms-3">
	                                    <span class="title fw-bold fs-sm d-block">Danielle M.Reese</span>
	                                    <span class="meta d-block">12 December, 2022</span>
	                                </div>--}}
	                                <a href="{{ route('actuality.single', $actuality) }}" class="link-with-icon text-decoration-none mt-3">Lire plus <i
                                    class="fas fa-arrow-right"></i></a>
	                            </div>
	                        </div>
	                    </article>
	                </div>
	            @endforeach
            </div>
            @if(Route::currentRouteName() != 'index')
                <!--pagination start-->
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-auto my-1">
                        <nav>
                            <ul class="pagination rounded mb-0">
                                {{ FrontHelper::allActualities()->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--pagination end-->
            @endif

            @if(Route::currentRouteName() == 'index')
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-lg-7 col-md-12">
                        <div class="text-center">
                            <a href="{{ route('news') }}" class="btn btn-primary">Tout voir</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section> <!--blog section end-->