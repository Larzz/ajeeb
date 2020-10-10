@extends('layouts.default')

@section('content')

<style type="text/css">
    .mb-0 {
        margin-bottom: 10px;
    }

    .sunflower-oil {
            background: #f8d150;
            color: white;
            display: initial !important;
            padding: 4px;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
    }

    .pasta-sauce {
            background: #000;
            color: white;
            display: initial !important;
            padding: 4px;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }
</style>

    <!-- Start Popular Dishes============================================= -->
    <div class="food-menu-area bg-gray path-less carousel-shadow  default-padding">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center">
                            <h3>{{ __('default.discover') }}</h3>
                            <h2>{{ __('default.our_products')}}</h2>
                            <p>
                                {{ __('default.OUR_PRODUCT_TAGLINE') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="menu-lists food-menu-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        @foreach ($products as $item)
                            <div class="item">
                                <div class="thumb">
                                <a href="{{ route('home.our_products') }}">
                                    <img src="{{ $item->image }}" alt="Thumb">
                                    </a>
                                    <div class="price hide">
                                        <h5>$5.90</h5>
                                    </div>
                                </div>
                                <div class="info">
                                    @if (App::isLocale('ar'))
                                        <h4 class="mb-0"><a href="#">{{ $item->name_ar }}</a></h4>
                                    @else
                                        <h4 class="mb-0"><a href="#">{{ $item->name }}</a></h4>
                                    @endif
                                    {{-- <span class="sunflower-oil"> Sunflower Oil</span> --}}
                                    <p class="hide">
                                        Considered introduced themselves mr to discretion at. Means among saw hopes for. Death mirth in oh learn he equal on.
                                    </p>
                                    <div class="button hide">
                                        <a href="#">Inquire</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                      
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Dishes -->

   <!-- Start Testimonials  ============================================= -->
    <div class="testimonials-area bg-gray carousel-shadow default-padding hide">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h3>Our Client</h3>
                        <h2>Feedbacks</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonials-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        <div class="item">
                            <h4>Delicious Burger</h4>
                            <p>
                                Finished no horrible blessing landlord dwelling dissuade if. Rent fond am he in on read. Anxious cordial demands settled entered in do to colonel. 
                            </p>
                            <div class="thumb">
                                <img src="assets/img/100x100.png" alt="Thumb">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="clients-info">
                                <h5>Ahel John</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Testimonials -->


   <!-- Stpry  ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 thumb">
                        <img src="{{ asset('images/products/product3.png') }}" alt="Thumb">
                            <a href="http://www.youtube.com/watch?v=nMsZkTA75D0" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="col-md-6 info">
                        <h3 class="text-center">{{ __('default.our_story') }}</h3>
                        <h2>What is Lorem Ipsum?</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!-- Start Testimonials  ============================================= -->
    <div class="testimonials-area bg-gray carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h3>{{ __('default.subscribe') }}</h3>
                        <h2>{{ __('default.to_newsletter') }}</h2>
                        <p>
                            {{ __('default.SUBSRIBE_MESSAGE') }}
                        </p>
                    </div>
                </div>
            </div>

            <style>
                
                .testimonial-items .error-box .search form input {
                    box-shadow: inherit;
                    border: 1px solid #e7e7e7;
                    border-radius: inherit;
                }

                .input-group {
                    position: relative;
                    display: table;
                    border-collapse: separate;
                }

            </style>

            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonials-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        <div class="item col-md-8 col-md-offset-2" style="height: 200px;">

                                <div class="sidebar" style="margin-top: 40px;">
                                    <form action="javascript:;" name="subscribe" id="subscribe">
                                        <input type="text" id="email" placeholder="{{ __('default.EMAIL') }}" class="form-control">
                                          <input type="submit" id="submit" data-route="{{ route('newsletter.submit') }}" class="btn btn-theme effect btn-sm" value="{{ __('default.SUBMIT') }}">
                                    </form>
                                </div>

                         </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>

        </div>
    </div>
   <!-- End Testimonials -->

@endsection



@section('script')

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<script>

    $('#subscribe').submit(function() {

        var $this = $(this)
        var email = $('#email').val();

        if(!email) {
            alertify.error('Please input your email');
        } else { 
            $.ajax({
                type : 'POST',
                url: $('#submit').attr('data-route'),
                cache: false,
                data: { email:email },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                beforeSend: function() {
                    $('#submit').html('Please wait <i class="fas fa-spinner fa-spin"></i>').attr('disabled', 'disabled')
                },
                success: function(response){
                    if(response.status) {
                        alertify.alert("Thank you for reaching to us", "We will share you an updates in regards on our products.", function(){
                            });
                    } else {
                        alertify.alert("Something went wrong", "Please try again later.", function(){
                            });
                    }

                    $('#submit').html(' Submit <i class="fa fa-paper-plane"></i>').removeAttr('disabled', 'disabled')

                    var email = $('#email').val('');
                

                }
            });
        }

    });

</script>

@endsection