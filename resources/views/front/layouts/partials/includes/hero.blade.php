<!--hero section start-->
<section class="sc-hero-section ptb-120 position-relative overflow-hidden z-1">
    <video id="hero-video" class="position-absolute end-0 top-0 z--1" src="{{ asset(FrontHelper::getHero()->video) }}" muted loop autoplay></video>
    <div class="video-overlay position-absolute end-0 top-0 z-0 w-100 h-100"></div>
    <span class="skew-1 position-absolute" style="display: none;"></span>
    <span class="skew-2 position-absolute"></span>
    <div class="container">
        <div class="row g-4 align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="sc-hero-content">
                    <h1 class="mb-4 text-white display-5 fw-bold">{{ FrontHelper::getHero()->title }}</h1>
                    <p class="mb-5 text-white">{!! FrontHelper::getHero()->description !!}</p>
                    {{-- <a href="{{ FrontHelper::getHero()->actionUrl }}" class="btn btn-primary">{{ FrontHelper::getHero()->actionText }}</a> --}}
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="sc-hero-right position-relative mt-5 mt-lg-0">
                </div>
            </div>
        </div>
    </div>
</section> <!--hero section end-->

<script>
    const video = document.getElementById('hero-video');
    video.playbackRate = 0.5; 
</script>
