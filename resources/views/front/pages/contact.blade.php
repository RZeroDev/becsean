@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
        <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->
    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area contact-page overflow-hidden bg-gray default-padding">
        <div class="sahpe-right-bottom">
            <img src="{{ asset(FrontHelper::getEnvFolder().'storage/front/assets/img/shape/16.png')}}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-xl-7 col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="{{ asset(FrontHelper::getEnvFolder().'storage/front/assets/img/illustration/10.png')}}" alt="Image Not Found">
                        <h5 class="sub-title">Vous Avez Des Questions?</h5>
                        <h2 class="heading">Envoyez-nous un massage</h2>
                        <form action="{{ route('contact.send') }}" method="POST" class="">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="fullname" placeholder="Nom" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="E-mail*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Téléphone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Parlez-nous du projet *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Entrer En Contact
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

                <div class="col-tact-stye-one col-xl-5 col-lg-5 pl-80 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>
                            Contact
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <ul>
                            <li>
                                <div class="content">
                                    <h5 class="title">Ligne d'assistance</h5>
                                    <a href="#">{{ FrontHelper::getSettings()->company_phone }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Notre emplacement</h5>
                                    <p>
                                        {{ FrontHelper::getSettings()->company_headquarters }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">E-mail officiel</h5>
                                    <a href="mailto:{{ FrontHelper::getSettings()->company_email }}.com">{{ FrontHelper::getSettings()->company_email }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
