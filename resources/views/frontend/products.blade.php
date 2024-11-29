@extends('frontend.master')
@section('products-active', 'active')
@section('content')


    <!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>{{__('translate.products-h4')}}</h4>
                    <h2>{{__('translate.products-h2')}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>{{__('translate.our products')}}</h2>
                </div>
            </div>
            @if(count($products)>0)
                @foreach($products as $product)
                    <div class="col-md-4" >
                        <div class="product-item">
                            <img src="{{asset("storage/uploads/$product->image")}}" alt="">
                            <div class="down-content">
                                <h4>{{$product->name}}</h4>
                                <p>{{$product->description}}</p>
                                <a href="{{route('frontend.contacts')}}">{{__('translate.contact link')}}<i class="fa fa-angle-{{__('translate.arrow')}}"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="col-md-12 pagination-links">
                {{$products->render('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
</div>

@endsection
