@extends('front.layouts.master')
@section('title', 'Actualités')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->
<!-- Start Blog
    ============================================= -->
    <div class="blog-area blog-grid default-padding">
        <div class="container">
            <div class="blog-item-box">
                @if($param)
                <div class="row">
                    @foreach (FrontHelper::allActualitiesCat($newCategorie->id) as $actuality)
                    <!-- Single Item -->
                    <div class="col-xl-4 col-md-6 single-item">
                        <div class="blog-style-one">
                            <div class="thumb">
                                <a href="{{ route('actuality.single',$actuality->slug) }}"><img src="{{ asset($actuality->image) }}" alt="Image Not Found"></a>
                                <div class="date"><strong>{{ $actuality->created_at->format('d') }}</strong> <span>{{ $actuality->created_at->format('M.Y') }}</span></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            Becsean Sarl
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="post-title">
                                    <a href="{{ route('actuality.single',$actuality->slug) }}">{{ $actuality->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    @endforeach
                </div>
                @else
                    <div class="row">
                        @foreach (FrontHelper::allActualities() as $actuality)
                        <!-- Single Item -->
                        <div class="col-xl-4 col-md-6 single-item">
                            <div class="blog-style-one">
                                <div class="thumb">
                                    <a href="{{ route('actuality.single',$actuality->slug) }}"><img src="{{ asset($actuality->image) }}" alt="Image Not Found"></a>
                                    <div class="date"><strong>{{ $actuality->created_at->format('d') }}</strong> <span>{{ $actuality->created_at->format('M.Y') }}</span></div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                Becsean Sarl
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="post-title">
                                        <a href="{{ route('actuality.single',$actuality->slug) }}">{{ $actuality->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        @endforeach
                    </div>
                @endif
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    <nav aria-label="navigation">
                        {{ FrontHelper::allActualities()->links() }}
                    </nav>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
    <!-- End Blog -->

@endsection
