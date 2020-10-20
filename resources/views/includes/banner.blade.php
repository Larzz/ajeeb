    
    <!-- Start Banner 
    ============================================= -->
    {{-- <div class="banner-area content-less responsive-auto-height">
        <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel"> --}}


            <div class="banner-area responsive-auto-height ds-fonts text-light video-bg-live bg-fixed" style="background-image: url({{asset('images/bg101.jpg')}});">
                <div class="player" data-property="{videoURL:'http://www.youtube.com/watch?v=nMsZkTA75D0',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:1, opacity:4, quality:'default'}"></div>

                <div id="bootcarousel" class="carousel transparent-nav slide carousel-fade animate_text" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner shadow dark">
                        <div class="item active">
                            <div class="box-table">
                                <div class="box-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="content">
                                                <h1 data-animation="animated slideInLeft">{{ __('default.EXPLORE') }} {{ __('default.OUR') }}  <span><h2 data-animation="animated fadeInUp">{{ __('default.PRODUCTS') }}</h2></span> </h1>
                                                    {{-- <div class="lists" data-animation="animated slideInUp">
                                                        <ul>
                                                            <li>
                                                                <i class="flaticon-hamburger"></i> 40 Food
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-champagne-glass"></i> 19 Drinks
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-coffee-cup"></i> 28 Soup
                                                            </li>
                                                        </ul>
                                                    </div> --}}
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-sm" href="{{ route('home.our_products') }}">{{ __('default.BROWSE')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item hide ">
                            <div class="box-table">
                                <div class="box-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="content">
                                                    <h1 data-animation="animated slideInLeft">YellowFin <span><h2 data-animation="animated fadeInUp">Tuna</h2></span> </h1>
                                                    {{-- <div class="lists" data-animation="animated slideInUp">
                                                        <ul>
                                                            <li>
                                                                <i class="flaticon-hamburger"></i> 40 Food
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-champagne-glass"></i> 19 Drinks
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-coffee-cup"></i> 28 Soup
                                                            </li>
                                                        </ul>
                                                    </div> --}}
                                                    <a data-animation="animated slideInUp" class="btn btn-theme effect btn-sm" href="#">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Wrapper for slides -->
        
                    <!-- Left and right controls -->
                    {{-- <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a> --}}
                </div>
            </div>
           
    </div>
    <!-- End Banner -->
    <!-- Shape -->
               {{-- <div class="wavesshape">
               <img src="{{ asset('images/shape.png') }}" alt="Shape">
            </div> --}}
            <!-- Shape -->
    {{-- http://placehold.jp/800x600.png --}}


