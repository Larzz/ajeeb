@extends('layouts.inner')

@section('content')



      <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url({{ asset('images/product-banner.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('default.our_products') }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> {{ __('default.home') }}</a></li>
                        <li class="active"> {{ __('default.our_products') }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <div class="food-menu-area inc-isotop default-padding">
        <div class="container">
            <div class="food-menu-area text-center">
                <div class="row">
                    <div class="col-md-12 food-menu-content">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">{{ __('default.ALL')}}</button>
                            @if ($categories)
                              @foreach ($categories as $category)
                                   <button data-filter=".{{ $category->sluq}}">{{  App::isLocale('ar') ? $category->name_ar : $category->name}}</button>
                              @endforeach
                            @endif
                         
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row text-center masonary">
                            <div id="portfolio-grid" class="menu-lists text-center col-3">
                                @php
                                    $count = 0;
                                @endphp
                                @foreach ($products as $value)

                                <!-- Single Item -->
                                <div class="item-single pf-item {{ $value->category_sluq }}">
                                    <div class="item">
                                       <div class="thumb_{{ $count++ }}">
                                           <a href="{{ route('home.product_page', [ 'unique_id' => $value->unique_id, 'category_sluq' => $value->category_sluq, 'product_sluq' => $value->sluq]) }}">
                                                @if ($value->filename)
                                                     <img src="{{ asset('images/product/') }}/{{ $value->filename }}" alt="Thumb">
                                                @else
                                                     <img src="{{ asset('images/product/') }}/image_coming_1.png" alt="Thumb">
                                                @endif
                                            </a>
                                            <div class="price hide">
                                                <h5>$5.90</h5>
                                            </div>
                                        </div>
                                        <div class="info">
                                        @if (App::isLocale('ar'))
                                            <h4 style="font-weight:bolder"><a href="#"> {{ $value->name_ar }}</a></h4>
                                         @else
                                            <h4 style="font-weight:bolder"><a href="#">  {{ $value->name }} </a></h4>
                                         @endif
                                          {{-- <h6><a href="#">Available Packing: {{ $value->packing ?? ""}}</a></h6>
                                            <span>No Preservatives, No Colorants</span> --}}
                                            <p>
                                                @if (App::isLocale('ar'))
                                                   {{ $value->description_ar }}
                                                @else
                                                     {{ $value->description }}
                                                @endif
                                            </p>
                                            <div class="button hide">
                                                <a href="#">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>














     <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding hide ">
        <div class="container">
            <div class="food-menu-area">
                <div class="row">
                    <div class="col-md-12 text-center food-menu-content">
                        <div class="mix-item-menu">
                        <button class="active" data-filter="*">{{ __('default.ALL')}}</button>
                        <button data-filter=".white_meat">{{ __('default.WHITEMEAT_TUNA')}}</button>
                        <button data-filter=".yellowfin_chunk">{{ __('default.YELLOWFIN_CHUNK') }}</button>
                        <button data-filter=".skipjack_tuna">{{ __('default.SKIP_JACK') }}</button>
                        <button data-filter=".canned_sardine">{{ __('default.CANNED_SARDINE') }}</button>
                        <button data-filter=".pasta_sauced">{{ __('default.PASTA_SAUCE') }}</button>
                        <button data-filter=".mini_reqaq">{{ __('default.MINI_REQAQ') }}</button>
                        </div>
                        <!-- End Mixitup Nav-->
                        @php
                       @endphp
                

                
                        <div class="row text-center masonary hide">
                            <div id="portfolio-grid" class="menu-lists text-center col-3">
                                <!-- Single Item -->
                                <div class="item-single pf-item pancakes meat">
                                        <div id="portfolio-grid">
                                            {{-- {{ dd($products) }} --}}
                                            <!-- Single Item -->
                                                @foreach ($products as $value)
                                                    <div class="pf-item {{ $value->class }}">
                                                        <div class="item-effect">
                                                        <div class="gallery">
                                                            <a href="{{ $value->image }}"><img src="{{ $value->image }}" alt=""></a>
                                                            <a href="{{ $value->image }}"><img src="{{ $value->image }}" alt="" title=""/></a>
                                                            <a href="{{ $value->image }}"><img src="{{ $value->image }}" alt="" title="Beautiful Image"/></a>
                                                        </div>
                                                            <a href="{{ $value->image }}" class="item popup-link">
                                                                @if (App::isLocale('ar'))
                                                                   {{ $value->name_ar }}
                                                                @else
                                                                   {{ $value->name }}
                                                                @endif
                                                            </a>
                                                        </div>
                                                       
                                                    </div> 
                                                @endforeach
                                                   
                                            <!-- End Single Item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

@endsection

@section('script')
    <script>
        (function() {
              var $gallery1 = new SimpleLightbox('.thumb_0 a', {});
              var $gallery2= new SimpleLightbox('.thumb_1 a', {});
              var $gallery3 = new SimpleLightbox('.thumb_2 a', {});
              var $gallery4 = new SimpleLightbox('.thumb_3 a', {});
              var $gallery5 = new SimpleLightbox('.thumb_4 a', {});
              var $gallery6 = new SimpleLightbox('.thumb_5 a', {});
              var $gallery7 = new SimpleLightbox('.thumb_6 a', {});
              var $gallery8 = new SimpleLightbox('.thumb_7 a', {});
              var $gallery9 = new SimpleLightbox('.thumb_8 a', {});
              var $gallery11 = new SimpleLightbox('.thumb_9 a', {});
              var $gallery12 = new SimpleLightbox('.thumb_10 a', {});
              var $gallery13 = new SimpleLightbox('.thumb_11 a', {});
              var $gallery14 = new SimpleLightbox('.thumb_12 a', {});
              var $gallery15 = new SimpleLightbox('.thumb_13 a', {});
              var $gallery16 = new SimpleLightbox('.thumb_14 a', {});
              var $gallery17 = new SimpleLightbox('.thumb_15 a', {});
              var $gallery18 = new SimpleLightbox('.thumb_16 a', {});
              var $gallery19 = new SimpleLightbox('.thumb_17 a', {});
              var $gallery20 = new SimpleLightbox('.thumb_18 a', {});
              var $gallery21 = new SimpleLightbox('.thumb_19 a', {});
              var $gallery22 = new SimpleLightbox('.thumb_20 a', {});
              var $gallery23 = new SimpleLightbox('.thumb_21 a', {});
              var $gallery24 = new SimpleLightbox('.thumb_22 a', {});
              var $gallery25 = new SimpleLightbox('.thumb_23 a', {});
              var $gallery26 = new SimpleLightbox('.thumb_24 a', {});
              var $gallery262 = new SimpleLightbox('.thumb_25 a', {});
              var $gallery262 = new SimpleLightbox('.thumb_26 a', {});
              var $gallery262 = new SimpleLightbox('.thumb_27 a', {});
              var $gallery262 = new SimpleLightbox('.thumb_28 a', {});
        })();
        </script>
@endsection