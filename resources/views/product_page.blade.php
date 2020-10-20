@extends('layouts.inner')

@section('content')   

       <!-- Start Breadcrumb   ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url({{ asset('images/product-banner.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>  {{ App::isLocale('ar')  ? $product->name_ar : $product->name }}
                </h1>
                    <ul class="breadcrumb">
                    <li><a href="{{ route('home.index') }}"><i class="fas fa-home"></i> {{ __('default.home') }}</a></li>
                        <li class="active"> {{ App::isLocale('ar')  ? $product->name_ar : $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <div class="reservation about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="reservation-items about-items">
                    <div class="col-md-5 form">
                        <div class="form-box" style="padding: 0px 0px 0px 0px;">
                            @php
                                $count = 0;
                            @endphp

                            @if (!empty($product_images))

                                @if (count($product_images) > 0)
                                    @foreach ($product_images as $image)

                                    <div class="avatar">
                                       <img src="{{ asset('images/product')}}/{{ $image->filename }}" alt="Thumb">
                                     </div>
                                
                                    @php
                                        $count++
                                    @endphp
                                    @endforeach

                                @else

                                    <div class="sidebar-item gallery">
                                        <div class="sidebar-info">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://ajeeb.test/images/products/white_meat_tuna_olive_oil.png" alt="thumb">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://ajeeb.test/images/products/white_meat_tuna_olive_oil.png" alt="thumb">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://ajeeb.test/images/products/white_meat_tuna_olive_oil.png" alt="thumb">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://ajeeb.test/images/products/white_meat_tuna_olive_oil.png" alt="thumb">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://ajeeb.test/images/products/white_meat_tuna_olive_oil.png" alt="thumb">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://ajeeb.test/images/products/white_meat_tuna_olive_oil.png" alt="thumb">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                @endif
                              
                            @else
                                <div class="avatar">
                                <img src="{{ asset('images/product')}}/image_coming_1.png" alt="Thumb">
                                </div>
                            @endif
                         
                        </div>
                    </div>
                    <div class="col-md-7 info">
                        <h2>{{ App::isLocale('ar')  ? $product->name_ar : $product->name }}</h2>
                        <p>
                            {{ App::isLocale('ar')  ? $product->description_ar : $product->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (!empty($related_products))
        <div class="food-menu-area path-less carousel-shadow default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-lists food-menu-carousel owl-carousel owl-theme text-center">
                            @foreach ($related_products as $related_product)
                                <div class="item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                     {{--    <div class="price">
                                            <h5>$5.90</h5>
                                        </div> --}}
                                    </div>
                                    <div class="info">
                                        <h4><a href="#">{{ App::isLocale('ar')  ? $related_product->name_ar : $related_product->name }}</a></h4>
                                        <p>
                                            {{ App::isLocale('ar')  ? $related_product->description_ar : $related_product->description }}
                                        </p>
                                        <div class="button">
                                            <a href="#">View Products</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    @endif
 

@endsection

@section('script')

<script>
</script>

@endsection