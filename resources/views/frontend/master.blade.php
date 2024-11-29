<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
@include('frontend.partials.head')
<body>

<!--================ PreLoader =================-->
@include('frontend.partials.preloader')
<!--================ PreLoader  =================-->

<!--================Header Menu Area =================-->
@include('frontend.partials.header')
<!--================Header Menu Area =================-->


@yield('content')

<!--================ Start Footer Area =================-->
@include('frontend.partials.footer')
<!--================ End Footer Area =================-->

@include('frontend.partials.scripts')
</body>
</html>


{{--!20_pro#gruad_25--}}
