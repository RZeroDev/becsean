@extends('front.layouts.master')
@section('title', 'Acceuil')
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
                <div class="row">
                    @foreach (FrontHelper::allActualities() as $actuality)
                    <!-- Single Item -->
                    <div class="col-xl-4 col-md-6 single-item">
                        <div class="blog-style-one">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/4.jpg" alt="Image Not Found"></a>
                                <div class="date"><strong>18</strong> <span>Apr, 2024</span></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">26 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="post-title">
                                    <a href="blog-single-with-sidebar.html">{{ $actuality->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                @endforeach
                </div>
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="blog-3-colum.html"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="blog-3-colum.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="blog-3-colum.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="blog-3-colum.html">3</a></li>
                            <li class="page-item"><a class="page-link" href="blog-3-colum.html"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
    <!-- End Blog -->

    @endsection
