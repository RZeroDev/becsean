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
                            <img src="{{ asset(FrontHelper::getEnvFolder() . $service->main_image) }}" alt="Thumb">
                        </div>
                        <h2>{{ $service->title }}</h2>
                        <p>
                            {{ $service->description }}
                        </p>
                        <div class="features mt-40 mt-xs-30 mb-30 mb-xs-20">
                            <div class="row">
                                <div class="col-xl-5 col-lg-12 col-md-6">
                                    <div class="content">
                                        <h3>Services offerts</h3>
                                        <ul class="feature-list-item">
                                            <li>Agriculture Consulting</li>
                                            <li>Custom farming rules</li>
                                            <li>Real-time rate shopping</li>
                                            <li>100 freight shipments / month</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-12 col-md-6 mt-xs-30">
                                    <div class="content">
                                        <h3>Le Challange</h3>
                                        <p>
                                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <blockquote>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</blockquote>
                        <h2>Que faisons-nous ?</h2>
                        <p>
                            Nam libero tempore, cum soluta nobis est elig endi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repelle ndus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias.
                        </p>

                        <div class="common-faq mt-40">
                            <h2 class="mb-25">Ici pour vous aider</h2>
                            <div class="accordion accordion-style-two-items" id="faqAccordion">
                                <div class="accordion-style-two">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Qu’ajoutez-vous au sol avant de planter ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Bennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-style-two">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Utilisez-vous des herbicides ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Cennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-style-two">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            D’où vient l’eau sur vos cultures ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Tennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-md-100 mt-xs-50 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list-widget">
                            <div class="content">
                                <ul>
                                    @foreach (FrontHelper::allServices() as $service)
                                            <li><a href="{{ route('service.single',$service->slug) }}">{{ $service->title }}</a></li>
                                            @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <div class="single-widget quick-contact-widget text-light" style="background-image: url(assets/img/thumb/7.jpg);">
                            <div class="content">
                                <h3>Besoin d’aide ?</h3>
                                <p>
                                    Parler avec un humain pour remplir un formulaire ? Appelez le siège social et nous vous mettrons en contact avec un membre de l’équipe.
                                </p>
                                <h2>+(012) 6679545</h2>
                                <h4><a href="mailto:info@agrika.com">info@agrika.com</a></h4>
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
