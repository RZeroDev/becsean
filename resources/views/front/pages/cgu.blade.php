@extends('front.layouts.master')
@section('title', 'CGU')
@section('filAriane', 'CGU')
@section('content')
    <!--integration details section start-->

    <section class="integration-details ptb-15 mb-5 text-justify">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 pe-lg-5">
                    <div class="integration-details-wrap">
                       {!! FrontHelper::getCguPage()->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--integration details section end-->
@stop
