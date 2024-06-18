@include('front.layouts.partials.start')
	@include('front.layouts.partials.header')
    @if(Route::currentRouteName() == 'index')
        @include('front.layouts.partials.includes.hero')
    @else
        @include('front.layouts.partials.includes.breadcrumb')
    @endif
    @yield('content')
	@include('front.layouts.partials.footer')
@include('front.layouts.partials.end')
