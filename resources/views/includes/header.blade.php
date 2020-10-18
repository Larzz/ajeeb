   <!-- Header 
    ============================================= -->
    <header id="home">

         <!-- Start Navigation -->
         <nav class="navbar navbar-default fixed-border navbar-fixed white no-background bootsnav brand-top ">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand" href="{{ route('home.index') }}">
                        @if (App::isLocale('ar'))
                           <img src="{{ asset('images/logo-arabic.png') }}" class="logo " alt="Logo">
                        @else
                          <img src="{{ asset('images/logo-english.png') }}" class="logo logo-size-home" class="logo" alt="Logo">
                        @endif
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        <li>
                         <a href="{{ route('home.our_story') }}">{{ __('default.our_story')}}</a>
                        </li>
                        <li>
                         <a href="{{ route('home.our_products') }}">{{ __('default.our_products') }}</a>
                        </li>
                        <li>
                        <a href="{{ route('home.get_in_touch') }}">{{ __('default.get_in_touch') }}</a>
                        </li>
                        <li>
                            @if (App::isLocale('ar'))
                                <a href="{{ route('home.switcher', ['language' => 'en' ]) }}"> {{ __('default.arabic')}}</a>
                            @else
                              <a href="{{ route('home.switcher', ['language' => 'ar']) }}"> {{ __('default.arabic')}}</a>
                            @endif
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->


    </header>
    <!-- End Header -->
