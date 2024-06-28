@extends('front.layouts.master')
@section('title', 'Actualités')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->

        <!-- Start Gallery
    ============================================= -->
    <div class="gallery-style-two-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 gallery-content">
                    <div class="magnific-mix-gallery gallery-masonary">
                        <div id="gallery-masonary" class="gallery-items colums-3">
                            @foreach (FrontHelper::allProject() as $project)
                                <!-- Single Item -->
                                <div class="gallery-item">
                                    <div class="gallery-style-one">
                                        <img src="{{ asset(FrontHelper::getEnvFolder() . $project->main_image) }}" alt="Image not Found">
                                        <div class="overlay">
                                            {{-- <p>Fruit</p> --}}
                                            <h4><a href="{{ route('project.single', $project->slug) }}">{{ $project->title }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach

                            {{-- <!-- Single Item -->
                            <div class="gallery-item width">
                                <div class="gallery-style-one">
                                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/6.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Vegetables</p>
                                        <h4><a href="{{ route('project.single') }}">Organic Vegetables</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="gallery-item">
                                <div class="gallery-style-one">
                                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/3.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Maize</p>
                                        <h4><a href="{{ route('project.single') }}">Fresh Corn</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="gallery-item">
                                <div class="gallery-style-one">
                                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/4.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Cereals</p>
                                        <h4><a href="{{ route('project.single') }}">Fresh Mandrains</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="gallery-item">
                                <div class="gallery-style-one">
                                    <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/projects/5.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Havest</p>
                                        <h4><a href="{{ route('project.single') }}">Crispy Cucumber</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item --> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

@endsection

