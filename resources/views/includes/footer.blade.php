   <!-- Start Footer 
    ============================================= -->
    <footer class="bg-fixed pattern shadow dark-hard" style="background-image: url({{asset('images/bg-101.jpg')}});">
        <div class="container">
            <div class="row">

                <div class="f-items title-effect text-light default-padding">
                    <div class="col-md-6 col-md-offset-3 item-center text-center">
                        @if (App::isLocale('en'))
                        <img src="{{ asset('images/logo-english.png') }}" style="width: 160px;" class="logo" alt="Logo">
                        @else
                        <img src="{{ asset('images/logo-arabic.png') }}" style="width: 160px;" class="logo" alt="Logo">
                        @endif
                        <p>
                            {{ __('default.footer_address')}}
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+971 54 3055102"> +971 54 3055102</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:ajeeb@ajeeb-switch.com">ajeeb@ajeeb-switch.com</a>
                            </li>
                        </ul>
                        <div class="social">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/ajeebswitch"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/ajeebswitch/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/in/ajeeb-switch-8252941b8/"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-light">
            <div class="container">
                <div class="row">   
                    <div class="col-md-6">
                        <p>&copy; {{ __('default.copy_right') }} <a href="#">ajeeb-switch.com</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                            <a href="{{ route('home.our_story') }}">{{ __('default.our_story') }}</a>
                            </li>
                            <li>
                            <a href="{{ route('home.our_products') }}">{{ __('default.our_products') }}</a>
                            </li>
                            <li>
                            <a href="{{ route('home.get_in_touch') }}">{{ __('default.get_in_touch') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->