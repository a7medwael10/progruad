<footer class="footer">
    <div class="footer-container">
        <!-- Brand Name -->
        <a href="{{ route('frontend.index') }}" class="footer-logo">
            <img src="{{asset('assets/images/logo2.png')}}" alt="">
        </a>

        <!-- Navigation Links -->
        <ul class="footer-nav">
            <li><a href="{{ route('frontend.index') }}">{{__('translate.Home')}}</a></li>
            <li><a href="{{ route('frontend.products') }}">{{__('translate.Products')}}</a></li>
            <li><a href="{{ route('frontend.contacts') }}">{{__('translate.Contacts')}}</a></li>
        </ul>

        <!-- Optional Social Media Links -->
        <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

        <!-- Copyright -->
        <p class="footer-copyright">&copy; {{__('translate.copyRight')}}</p>
    </div>
</footer>
