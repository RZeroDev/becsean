@extends('front.layouts.master')
@section('title', 'Accueil')
@section('content')
    @if (FrontHelper::getSectionStatus()->service)
        @include('front.pages.includes.service-area')
    @endif
    @if (FrontHelper::getSectionStatus()->about)
        @include('front.pages.includes.about-area')
    @endif
    @if (FrontHelper::getSectionStatus()->testimonial)
        @include('front.pages.includes.testimonial-area')
    @endif
    @if (FrontHelper::getSectionStatus()->work)
        @include('front.pages.includes.work')
    @endif
    @if (FrontHelper::getSectionStatus()->action)
        @include('front.pages.includes.action')
    @endif
    @if (FrontHelper::getSectionStatus()->actuality)
        @include('front.pages.includes.actuality-area')
    @endif
    @if (FrontHelper::getSectionStatus()->partner)
        @include('front.pages.includes.partner-area')
    @endif
@stop
