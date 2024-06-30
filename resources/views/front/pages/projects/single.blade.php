@extends('front.layouts.master')
@section('title', 'Actualités')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->

        <!-- Start Project Details
    ============================================= -->
    <div class="project-details-style-one default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-top text-center">
                        <img src="{{ asset(FrontHelper::getEnvFolder() . $project->main_image) }}" alt="Image Not Found">
                    </div>
                </div>
            </div>
            <div class="project-detail-content">
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <ul class="project-info bg-theme-secondary text-light">
                            <li>
                                <h4>Client</h4> Validthemes
                            </li>
                            <li>
                                <h4>Services</h4> Organic Products
                            </li>
                            <li>
                                <h4>Duration</h4> 8 Month
                            </li>
                            <li>
                                <h4>Category</h4>  Agriculture , Eco
                            </li>
                        </ul>
                    </div> --}}

                    <div class="col-lg-12 pl-80 pl-md-15 pl-xs-15 mt-md-50 mt-xs-30">
                        <div class="item-grid-container">
                            <div class="single-grid">
                                <div class="item-grid-colum">
                                    <div class="left-info">
                                        <h3>{{ $project->title }}</h3>
                                    </div>
                                    <div class="right-info">
                                        <p>
                                            {{ $project->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="single-grid">
                                <div class="item-grid-colum">
                                    <div class="left-info">
                                        <h3>Harvest Innovations</h3>
                                    </div>
                                    <div class="right-info">
                                        <p>
                                            Contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence
                                        </p>
                                        <p>
                                            New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                                        </p>
                                        <h4>Continue indulged speaking the was out horrible for domestic.</h4>
                                        <ul class="list-disc">
                                            <li>Modern Agriculture Equipment</li>
                                            <li>Awesome Harvest of Wheat</li>
                                            <li>Fresh Fruits & Vegetables</li>
                                        </ul>
                                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/8.jpg') }}" alt="Image Not Found">
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="single-grid">
                                <div class="item-grid-colum">
                                    <div class="left-info">
                                        <h3>Livestock Breeding</h3>
                                    </div>
                                    <div class="right-info">
                                        <p>
                                            Contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence
                                        </p>
                                        <p>
                                            New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                                        </p>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="project-static-gallery">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/9.jpg') }}" alt="Thumb">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/10.jpg') }}" alt="Thumb">
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project Details Area -->

@endsection

