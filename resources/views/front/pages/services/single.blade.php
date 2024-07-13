@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->
            <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-xl-8 col-lg-7 pl-45 pl-md-15 pl-xs-15 services-single-content order-lg-last">
                        <div class="thumb">
                            <img src="{{ asset($service->main_image) }}" height="250" alt="Thumb">
                        </div>
                        <h2>{{ $service->title }}</h2>
                        <p>
                            {{ $service->description }}
                        </p>
                        <div class="common-faq mt-40">
                            <h2 class="mb-25">Sous services</h2>
                            <div class="accordion accordion-style-two-items" id="faqAccordion">
                                @foreach ($service->underservices as $index=> $item)
                                    <div class="accordion-style-two">
                                        <h2 class="accordion-header" id="headingOne{{ $item->id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $item->id }}" aria-controls="collapseOne{{ $item->id }}">
                                               {{  ++$index. ' ' .$item->title }}
                                            </button>
                                        </h2>
                                        <div id="collapseOne{{ $item->id }}" class="accordion-collapse collapse {{ $index == 1 ? 'show' : '' }}" aria-labelledby="headingOne{{ $item->id }}" data-bs-parent="#faqAccordion{{ $item->id }}">
                                            <div class="accordion-body">
                                                <p>
                                                   {{ $item->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-md-100 mt-xs-50 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list-widget">
                            <div class="content">
                                <ul>
                                    @foreach (FrontHelper::allServicesForFooter() as $service)
                                            <li><a href="{{ route('service.single',$service->slug) }}" class="active">{{ $service->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <div class="single-widget quick-contact-widget text-light" style="background-image: url(storage/front/assets/img/thumb/7.jpg);">
                            <div class="content">
                                <h3>Vous avez des questions?</h3>
                                <p>
                                    Appelez le siège social et nous vous mettrons en contact avec un membre de l’équipe.
                                </p>
                                <h2>{{ FrontHelper::getSettings()->company_phone }}</h2>
                                <h4><a href="mailto:{{ FrontHelper::getSettings()->company_email }}">{{ FrontHelper::getSettings()->company_email }}</a></h4>
                                <a class="btn mt-30 circle btn-theme animation btn-md" href="{{ route('contact') }}">Contactez-Nous</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->
@endsection
