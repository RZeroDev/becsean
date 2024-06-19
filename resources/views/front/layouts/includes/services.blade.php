<div class="services-style-one-area bg-gray default-padding bottom-less">
    <div class="shape-right-top" style="background-image: url(storage/front/assets/img/shape/9.png);"></div>
    <div class="container">

        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="site-heading text-center">
                    <h5 class="sub-title">Ce que nous faisons</h5>
                    <h2 class="title">Decrouvez les services <br> que nous proposons</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach (FrontHelper::allServices() as $service)
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <div class="thumb">
                            <img src="{{ asset(FrontHelper::getEnvFolder() . $service->main_image) }}"
                                alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="top">
                                <h4><a href="{{ route('service.single',$service->slug) }}">{{ $service->title }}</a></h4>
                            </div>
                            <p>
                                {{$service->description}}
                            </p>
                        </div>
                        <a href="services-details.html" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
            <div class="col-12">
                <a name="" id="" class="btn btn-theme btn-md radius animation" href="{{ route('services') }}" role="button">Tous les services</a>
            </div>
            <!-- Single Item -->
            <!-- End Single Item -->
        </div>
    </div>
</div>
