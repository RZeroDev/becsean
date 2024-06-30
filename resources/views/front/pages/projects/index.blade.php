@extends('front.layouts.master')
@section('title', 'Actualités')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->

        <!-- Start Gallery
    ============================================= -->
    @if($param)
        <div class="gallery-style-two-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="magnific-mix-gallery gallery-masonary">
                            <div id="gallery-masonary" class="gallery-items colums-2">
                                @foreach (FrontHelper::allProjectCat($projectCategorie->id) as $project)
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="gallery-style-two-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="magnific-mix-gallery gallery-masonary">
                            <div id="gallery-masonary" class="gallery-items colums-2">
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- End Gallery -->

@endsection

