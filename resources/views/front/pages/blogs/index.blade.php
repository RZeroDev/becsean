@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ route('blog.single') }}"><img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/blog/5.jpg') }}" alt="Thumb"></a>
                                    <div class="date"><strong>18</strong> <span>April, 2022</span></div>
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
                                    <h2 class="title">
                                        <a href="{{ route('blog.single') }}">Announcing if attachment resolution sentiments.</a>
                                    </h2>
                                    <p>
                                        Bndulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now
                                    </p>
                                    <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ route('blog.single') }}"><img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/blog/6.jpg') }}" alt="Thumb"></a>
                                    <div class="date"><strong>26</strong> <span>July, 2022</span></div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                <a href="#">35 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{ route('blog.single') }}">Minuter him own clothes but observe country.</a>
                                    </h2>
                                    <p>
                                        Bndulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now
                                    </p>
                                    <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ route('blog.single') }}"><img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/blog/7.jpg') }}" alt="Thumb"></a>
                                    <div class="date"><strong>12</strong> <span>March, 2022</span></div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                <a href="#">48 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{ route('blog.single') }}">Overcame breeding point concerns has terminate</a>
                                    </h2>
                                    <p>
                                        Bndulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now
                                    </p>
                                    <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="blog-with-sidebar.html">1</a></li>
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">2</a></li>
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">3</a></li>
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-100 mt-xs-50">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text"  placeholder="Enter Keyword" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <h4 class="title">Recent Post</h4>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/3.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date">12 Feb, 2020</span>
                                            </div>
                                            <a href="{{ route('blog.single') }}">Commanded household smallness delivered.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/4.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date">05 Jul, 2022</span>
                                            </div>
                                            <a href="{{ route('blog.single') }}">Future Plan & Strategy for Consutruction </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/5.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date">29 Aug, 2020</span>
                                            </div>
                                            <a href="{{ route('blog.single') }}">Melancholy particular devonshire alteration</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-item category">
                                <h4 class="title">category list</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="blog-with-sidebar.html">national <span>69</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-with-sidebar.html">national <span>25</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-with-sidebar.html">sports <span>18</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-with-sidebar.html">megazine <span>37</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-with-sidebar.html">health <span>12</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item gallery">
                                <h4 class="title">Gallery</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/1.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/2.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/3.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/4.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/5.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/thumbs/6.jpg') }}" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item archives">
                                <h4 class="title">Archives</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="blog-with-sidebar.html">Aug 2020</a></li>
                                        <li><a href="blog-with-sidebar.html">Sept 2020</a></li>
                                        <li><a href="blog-with-sidebar.html">Nov 2020</a></li>
                                        <li><a href="blog-with-sidebar.html">Dec 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <h4 class="title">follow us</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <h4 class="title">tags</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="blog-with-sidebar.html">Fashion</a>
                                        </li>
                                        <li><a href="blog-with-sidebar.html">Education</a>
                                        </li>
                                        <li><a href="blog-with-sidebar.html">nation</a>
                                        </li>
                                        <li><a href="blog-with-sidebar.html">study</a>
                                        </li>
                                        <li><a href="blog-with-sidebar.html">health</a>
                                        </li>
                                        <li><a href="blog-with-sidebar.html">food</a>
                                        </li>
                                        <li><a href="blog-with-sidebar.html">travel</a>
                                        </li>
                                    </ul>
                                </div>
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
