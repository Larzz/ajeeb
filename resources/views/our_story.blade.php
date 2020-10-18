@extends('layouts.inner')

@section('content')

   <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url({{ asset('images/bg-101.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>{{ __('default.our_story') }}</h1>
                    <ul class="breadcrumb">
                    <li><a href="{{ route('home.index') }}"><i class="fas fa-home"></i> {{ __('default.home') }}</a></li>
                    <li class="active">{{ __('default.our_story') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 thumb">
                        {{-- <img src="{{ asset('images/products/product6.png') }}" alt="Thumb"> --}}
                          <img src="https://images.unsplash.com/photo-1566177229701-8895c29b9c68?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80
                          " alt="Thumb">
                        <a href="http://www.youtube.com/watch?v=nMsZkTA75D0" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="col-md-6 info">
                    <h3>{{ __('default.our_story') }}</h3>
                        <h2>Until I discovered cooking I was never really interested in anything</h2>
                        <p>
                            Pleased anxious or as in by viewing forbade minutes prevent. Too leave had those get being led weeks blind. Had men rose from down lady able. Its son him ferrars proceed six parlors.
                        </p>
                        <p>
                           Advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->


@endsection