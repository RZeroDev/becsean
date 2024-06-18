@include('front.layouts.includes.start')

    <!-- Start Preloader 
    ============================================= -->
  @include('front.layouts.includes.preloader')
    <!-- End Preloader -->

    <!-- Start Header Top 
    ============================================= -->
   @include('front.layouts.includes.start_header')
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
  @include('front.layouts.includes.header')
    <!-- End Header -->

    <!-- Start Banner Area 
    ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/3dd)')}}';"></div>
                    <div class="shape">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/2.png')}}" alt="Image Not Found">
                    </div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-9">
                                <div class="content">
                                    <div class="badge">
                                        <div class="curve-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                            </svg>
                                            <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h2><strong>Agriculture</strong> Farming Products</h2>
                                        <p>
                                            Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable.
                                        </p>
                                        <div class="button">
                                            <a class="btn btn-theme btn-md radius animation" href="about-us.html">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/4dd)')}}';"></div>
                    <div class="shape">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/2.png')}}" alt="Image Not Found">
                    </div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-9">
                                <div class="content">
                                    <div class="badge">
                                        <div class="curve-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                <path id="textPath2" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                            </svg>
                                            <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h2><strong>Homemade</strong> Organic Product</h2>
                                        <p>
                                            Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable.
                                        </p>
                                        <div class="button">
                                            <a class="btn btn-theme btn-md radius animation" href="about-us.html">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>        
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <div class="about-style-one-area default-padding overflow-hidden">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-style-one-thumb">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/about/1dd"')}}' alt="Image Not Found">
                        <div class="animation-shape">
                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/1.png')}}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-style-one-info">
                        
                        <h2 class="title">Agriculture & Organic <br> Product Farm</h2>
                        <p>
                            There are many variations of passages of ipsum available but the majority have suffered alteration in some form by injected humor or random word which don’t look even. Comparison new ham melancholy.
                        </p>
                        <div class="fun-fact-style-flex mt-35">
                            <div class="counter">
                                <div class="timer" data-to="25" data-speed="2000">25</div>
                                <div class="operator">M</div>
                            </div>
                            <span class="medium">Growth Tonns <br> of Harvest</span>
                        </div>
                        <ul class="top-feature">
                            <li>
                                <div class="icon">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/3.png')}}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>100% Guaranteed Organic Product</h4>
                                    <p>
                                        Always parties but trying she shewing of moment.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/2.png')}}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>Top-Quality Healthy Foods Production</h4>
                                    <p>
                                        Majority have suffered alteration in some form by injected humor.
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-style-one-area bg-gray default-padding bottom-less">
        <div class="shape-right-top" style="background-image: url(assets/img/shape/9.png')}});"></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">What we do</h5>
                        <h2 class="title">Currently we are <br> selling organic food</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <div class="thumb">
                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/2.png')}}" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Agriculture <span>Products</span></a></h4>
                            </div>
                            <p>
                                Seeing rather her you not esteem men settle genius excuse. Deal say over means age from. Comparison new melancholy son devonshire to the dispatched.
                            </p>
                        </div>
                        <a href="services-details.html" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <div class="thumb">
                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/3.png')}}" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Fresh <span>Vegetables</span></a></h4>
                            </div>
                            <p>
                                Perming rather her you not esteem men settle genius excuse. Deal say over means age from. Comparison new melancholy son devonshire to the dispatched.
                            </p>
                            <a href="services-details.html" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <div class="thumb">
                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/4.png')}}" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Dairy <span>Products</span></a></h4>
                            </div>
                            <p>
                                Seeing rather her you not esteem men settle genius excuse. Deal say over means age from. Comparison new melancholy son devonshire to the dispatched.
                            </p>
                            <a href="services-details.html" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->
    

    <!-- Start Benifits 
    ============================================= -->
    <div class="benifits-area default-padding-top video-bg-live bg-cover mt--50 mt-md-0 mt-xs-0" style="background-image: url(assets/img/banner/16dd)')}}';">
        <div class="player" data-property="{videoURL:'w9eRIGTHKJM',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:13, opacity:1, quality:'default'}"></div>
        <div class="shape-top-center" style="background-image: url(assets/img/shape/10.png')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="benifit-items text-light">
                        <div class="shape">
                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/8.png')}}" alt="Image Not Found">
                        </div>
                        <h2 class="title">Distributors of Organic Produce</h2>
                        <p>
                            Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously.
                        </p>
                        <ul class="list-standard">
                            <li>Modern Agriculture Equipment</li>
                            <li>Awesome Harvest of Wheat</li>
                            <li>Fresh Fruits & Vegetables</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Benifits -->

    <!-- Start Product 
    ============================================= -->
    <div class="product-cat-area default-padding">
        <div class="shape-right-bottom-mini">
            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/11.png')}}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="product-cat-items">
                <div class="row align-center">
                    <div class="col-lg-5 product-cat-info">
                        <h2 class="mask-text" style="background-image: url(assets/img/banner/17dd)')}}';">Healthy Life With Fresh Products</h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="product-cat-lists text-light">
                            <div class="product-list-box">
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/9.png')}}" alt="Icon">
                                        <h5>Blueberry</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/10.png')}}" alt="Icon">
                                        <h5>Strawberry</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/11.png')}}" alt="Icon">
                                        <h5>Cabbage</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/12.png')}}" alt="Icon">
                                        <h5>Maize</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/13.png')}}" alt="Icon">
                                        <h5>Orange</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="product-list-item">
                                    <a href="services-details.html">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/icon/14.png')}}" alt="Icon">
                                        <h5>Apples</h5>
                                    </a>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cat -->

    <!-- Start Testimonial 
    ============================================= -->
    <div class="testimonial-area default-padding bg-gray" style="background-image: url(assets/img/shape/13.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="testimonial-heading">
                        <h2>Tetsimonials</h2>
                    </div>
                    <div class="testimonial-carousel testimonial-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/3dd"')}}' alt="Imge Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/quote-big.png')}}" alt="Image Not Found">
                                        <p>
                                            “Targeting consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/2dd"')}}' alt="Imge Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/quote-big.png')}}" alt="Image Not Found">
                                        <p>
                                            “Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits.”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>Anthom Bu Spar</h4>
                                                <span>Marketing Manager</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/farmers/1dd"')}}' alt="Imge Not Found">
                                    </div>
                                    <div class="info">
                                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/quote-big.png')}}" alt="Image Not Found">
                                        <p>
                                            “Business discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts.”
                                        </p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>Metho k. Partho</h4>
                                                <span>Senior Developer</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Start Gallery 
    ============================================= -->
    <div class="gallery-style-one-area default-padding">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Awesome Gallery</h5>
                        <h2 class="title">Explore Projects</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fill">
            <div class="row">
                <div class="gallery-style-one-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/projects/1dd"')}}' alt="Image not Found">
                                <div class="overlay">
                                    <p>Fruit</p>
                                    <h4><a href="project-details.html">Healthy Food</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/projects/2dd"')}}' alt="Image not Found">
                                <div class="overlay">
                                    <p>Organic</p>
                                    <h4><a href="project-details.html">Cow Milk</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/projects/3dd"')}}' alt="Image not Found">
                                <div class="overlay">
                                    <p>Vegetables</p>
                                    <h4><a href="project-details.html">Organic Vegetables</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/projects/4dd"')}}' alt="Image not Found">
                                <div class="overlay">
                                    <p>Cereals</p>
                                    <h4><a href="project-details.html">Fresh Mandrains</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/projects/5dd"')}}' alt="Image not Found">
                                <div class="overlay">
                                    <p>Havest</p>
                                    <h4><a href="project-details.html">Crispy Cucumber</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

    <!-- Start Choose Us Area
    ============================================= -->
    <div class="choose-us-style-one-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="choose-us-thumb">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/9.png')}}" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7">
                    <div class="achivement-items">
                        <ul class="list-details">
                            <li>
                                <h4>Pure & Organic</h4>
                                <p>
                                    Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
                                </p>
                            </li>
                            <li>
                                <h4>Always Fresh</h4>
                                <p>
                                    Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.
                                </p>
                            </li>
                        </ul>
                        <div class="achivement-content">
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="83">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Organic Solutions</h4>
                            </div>
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="60">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Quality Agriculture</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-area overflow-hidden bg-gray default-padding">
        <div class="sahpe-right-bottom">
            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/shape/16.png')}}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">
                
                <div class="col-tact-stye-one col-xl-6 col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/illustration/10.png')}}" alt="Image Not Found">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a massage</h2>
                        <form action="https://validthemes.net/site-template/agrica/assets/mail/contact.php" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-xl-5 offset-xl-1 col-lg-5">
                    <div class="contact-style-one-info text-light">
                        <h2>
                            Contact 
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <p>
                            Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.
                        </p>
                        <ul>
                            <li>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="#">+4733378901</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        55 Main Street, The Grand Avenue 2nd Block, <br> New York City
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:info@agrul.com.com">info@agrul.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area home-blog default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Latest News</h5>
                        <h2 class="title">Check out our blog posts </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-6 col-md-12 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/blog/1dd"')}}' alt="Image Not Found">
                            <div class="overlay text-light">
                                <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly commanded if.</a></h3>
                                <p>
                                    Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                                </p>
                                <a href="blog-single-with-sidebar.html" class="button-regular">
                                    Continue Reading <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/blog/3dd"')}}' alt="Image Not Found"></a>
                            <div class="date"><strong>26</strong> <span>Aug, 2023</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Expression acceptance imprudence particular</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/blog/2dd"')}}' alt="Image Not Found"></a>
                            <div class="date"><strong>08</strong> <span>Dec, 2023</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Considered imprudence of technical friendship.</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Footer 
    ============================================= -->
   @include('front.layouts.includes.footer')
    <!-- End Footer -->
    @include('front.layouts.includes.end')
  