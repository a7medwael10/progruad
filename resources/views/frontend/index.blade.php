@extends('frontend.master')


<!-- Page Content -->
@section('home-active', 'active')
@section('content')
    <!-- Banner Starts Here -->
    <div class="banner header-text" dir="ltr">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                    <h4>{{__('translate.banner-h4-1')}}</h4>
                    <h2>{{__('translate.banner-h2-1')}}</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                    <h4>{{__('translate.banner-h4-2')}}</h4>
                    <h2>{{__('translate.banner-h2-2')}}</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                    <h4>{{__('translate.banner-h4-3')}}</h4>
                    <h2>{{__('translate.banner-h2-3')}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{__('translate.Latest Products')}}</h2>
                        <a href="{{route('frontend.products')}}">{{__('translate.View All')}} <i class="fa fa-angle-{{__('translate.arrow')}}"></i></a>
                    </div>
                </div>
                @if(count($latestProducts)>0)
                    @foreach($latestProducts as $product)
                        <div class="col-md-4" >
                            <div class="product-item">
                                <img src="{{asset("storage/uploads/$product->image")}}" alt="">
                                <div class="down-content">
                                    <h4>{{$product->name}}</h4>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
