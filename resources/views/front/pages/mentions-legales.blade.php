@extends('front.layouts.master')
@section('title', 'CGU')
@section('filAriane', 'CGU')
@section('content')
    <!--integration details section start-->
    <section class="integration-details ptb-15 mb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 pe-lg-5">
                    <div class="integration-details-wrap">
                       {!! FrontHelper::getLegalPage()->description !!}
                        <p>&copy; {{ date('Y') }} {{ FrontHelper::getAppName() }} Tous droits réservés. Développé par
                            <a target="_blank" href="https://twoftechnologies.fr/">
                                <span class="text-warning">TwoF</span>
                                <span class="text-info">Technologies</span>
                            </a>.</p>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--integration details section end-->
@stop

