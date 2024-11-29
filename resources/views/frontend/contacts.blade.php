@extends('frontend.master')
@section('contacts-active', 'active')
@section('content')

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>{{__('translate.contact-h4')}}</h4>
                        <h2>{{__('translate.contact-h2')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{__('translate.choose region')}}</h2>
                    </div>
                </div>
                @if(count($contacts)>0)
                    @foreach($contacts as $contact)
                        <div class="col-md-4 mb-3">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i></div>
                                <div class="down-content">
                                    <h4>{{$contact->region}}</h4>
                                    <p>
                                        {{$contact->number}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
            @endif
        </div>
    </div>
    </div>

@endsection
