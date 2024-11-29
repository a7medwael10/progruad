<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('frontend.index')}}"><img id="logo" src="{{asset('assets/images/logo2.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @yield('home-active')">
                        <a class="nav-link" href="{{route('frontend.index')}}">{{__('translate.Home')}}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item @yield('products-active')">
                        <a class="nav-link" href="{{route('frontend.products')}}">{{__('translate.Products')}}</a>
                    </li>
                    <li class="nav-item @yield('contacts-active')">
                        <a class="nav-link" href="{{route('frontend.contacts')}}">{{__('translate.Contacts')}}</a>
                    </li>
                    <li class="nav-item">
                        @php
                            $lang = request()->segment(1) == 'ar' ? 'en' : 'ar';
                        @endphp
                        <a class="nav-link" href="{{LaravelLocalization::getLocalizedURL($lang)}}">{{strtoupper($lang)}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
