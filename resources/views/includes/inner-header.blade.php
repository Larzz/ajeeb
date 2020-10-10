
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    {{-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> --}}
                    <li style="margin-top: 9px;">
                        @if (App::isLocale('ar'))
                            <a href="{{ route('home.switcher', ['language' => 'en' ]) }}"> {{ __('default.arabic')}}</a>
                        @else
                        <a href="{{ route('home.switcher', ['language' => 'ar']) }}"> {{ __('default.arabic')}}</a>
                        @endif
                    </li>
                   
                </ul>
            </div>        
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
            <a class="navbar-brand" href="{{ route('home.index') }}">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                        @if (App::isLocale('en'))
                        <img src="{{ asset('images/logo-english.png') }}" class="logo logo-size-inner" alt="Logo">
                        @else
                        <img src="{{ asset('images/logo-arabic.png') }}" class="logo logo-size-inner" alt="Logo">
                        @endif
                    </a>
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li>
                    <a href="{{ route('home.our_story') }}">{{ __('default.our_story')}}</a>
                    </li>
                    <li>
                        <a href="{{ route('home.our_products') }}"> {{ __('default.our_products') }} </a>
                    </li>
                    <li>
                    <a href="{{ route('home.get_in_touch') }}">{{ __('default.get_in_touch') }}</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
