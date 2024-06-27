@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->
<!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">

                        <div class="blog-style-two item">
                            <div class="thumb">
                                <a href=""><img src="{{ asset($actuality->image) }}" alt="Thumb"></a>
                                <div class="date"><strong>{{ $actuality->created_at->format('d') }}</strong> <span>{{ $actuality->created_at->format('M.Y') }}</span></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user-circle"></i> Becsean Sarl
                                        </li>
                                        <li>
                                        </li>
                                    </ul>
                                </div>
                                {!!$actuality->description !!}
                            </div>
                        </div>


                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-100 mt-xs-50">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <h4 class="title">Articles récents</h4>
                                <ul>
                                    @foreach (FrontHelper::getAllActualitiesWA($actuality) as $item)
                                            <li>
                                                <div class="thumb">
                                                    <a href="{{ route('actuality.single',$item->slug) }}">
                                                        <img src="{{ asset($item->image) }}" alt="Thumb">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="meta-title">
                                                        <span class="post-date">{{ $item->created_at->format('d M Y') }}</span>
                                                    </div>
                                                    <a href="{{ route('actuality.single',$item->slug) }}">{{ Str::limit($item->title, 25, '...') }}</a>
                                                </div>
                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
