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

        /* ssjskwuh */


/* helpers/align.css */

.align {
  align-items: center;
  display: flex;
  justify-content: center;
}


/* helpers/grid.css */

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: 80%;
  width: 100%;
}

/* modules/figure.css */

figure {
  margin: 0;
}


/* Common style */
.grid figure {
	position: relative;
	float: left;
	overflow: hidden;
	/* margin: 10px 1%;
	min-width: 320px;
	max-width: 480px;
	max-height: 360px; */
	/* width: 48%; */
	height: auto;
	background: #3085a3;
	text-align: center;
	cursor: pointer;
}

.grid figure figcaption {
	padding: 2em;
	color: #fff;
	text-transform: uppercase;
	font-size: 1.25em;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.grid figure figcaption h2 {
    background: #c20e0e;
    color: white;
    text-align: center;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
	pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
	z-index: 1000;
	text-indent: 200%;
	white-space: nowrap;
	font-size: 0;
	opacity: 0;
}

.grid figure h2 {
	word-spacing: -0.15em;
	font-weight: 300;
}

.grid figure h2 span {
	font-weight: 800;
}

.grid figure h2,
.grid figure p {
	margin: 0;
}

.grid figure p {
	letter-spacing: 1px;
	font-size: 68.5%;
}


/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
	z-index: 1000;
	text-indent: 200%;
	white-space: nowrap;
	font-size: 0;
	opacity: 0;
}

.grid figure h2 {
	word-spacing: -0.15em;
	font-weight: 300;
}

.grid figure h2 span {
	font-weight: 800;
}

.grid figure h2,
.grid figure p {
	margin: 0;
}

.grid figure p {
	letter-spacing: 1px;
	font-size: 68.5%;
}


figure.effect-julia figcaption {
	text-align: left;
}

figure.effect-julia h2 {
	position: relative;
	padding: 0.5em 0;
}

figure.effect-julia p {
	display: inline-block;
	margin: 0 0 0.25em;
	padding: 0.4em 1em;
	background: rgba(255,255,255,0.9);
	color: #2f3238;
	text-transform: none;
	font-weight: 500;
	font-size: 75%;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(-360px,0,0);
	transform: translate3d(-360px,0,0);
}

figure.effect-julia p:first-child {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}


figure.effect-julia {
	background: #2f3238;
}

figure.effect-julia img {
	/* max-width: none; */
	/* height: 400px; */
	-webkit-transition: opacity 1s, -webkit-transform 1s;
	transition: opacity 1s, transform 1s;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

figure.effect-julia figcaption {
	text-align: left;
}

figure.effect-julia h2 {
	position: relative;
	padding: 0.5em 0;
}

figure.effect-julia p {
	display: inline-block;
	margin: 0 0 0.25em;
	padding: 0.4em 1em;
	background: rgba(255,255,255,0.9);
	color: #2f3238;
	text-transform: none;
	font-weight: 500;
	font-size: 75%;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(-360px,0,0);
	transform: translate3d(-360px,0,0);
}

figure.effect-julia p:first-child {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}

figure.effect-julia p:nth-of-type(2) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

figure.effect-julia p:nth-of-type(3) {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

figure.effect-julia:hover p:first-child {
	-webkit-transition-delay: 0s;
	transition-delay: 0s;
}

figure.effect-julia:hover p:nth-of-type(2) {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

figure.effect-julia:hover p:nth-of-type(3) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

figure.effect-julia:hover img {
	opacity: 0.4;
	-webkit-transform: scale3d(1.1,1.1,1);
	transform: scale3d(1.1,1.1,1);
}

figure.effect-julia:hover p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}


/* modules/image.css */

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

/* vendor/masonry.css */

:root {
  --masonryGutter: 1.5%;
}

.masonry {
  margin: calc(var(--masonryGutter) * -1);
}

.masonry__item {
  margin: calc(var(--masonryGutter) / 2);
  width: calc(100% / 2 - var(--masonryGutter));
}


@media (min-width: 30em) {

.masonry__item {
  width: calc(100% / 3 - var(--masonryGutter));
}

}

@media (min-width: 48em) {

.masonry__item {
  /* width: calc(100% / 4 - var(--masonryGutter)); */
}

}



</style>

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

    <div class="food-menu-area bg-gray path-less carousel-shadow  default-padding">
        {{-- <div class="container"> --}}
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center">
                            <h3>{{ __('default.OUR') }}</h3>
                            <h2>{{ __('default.CATEGORIES') }}</h2>
                            <p>
                                {{ __('default.SUBSRIBE_MESSAGE') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="masonry js-masonry js-images-loaded">
                        @foreach ($categories as $category)
                            <div class="masonry__item js-masonry-item">
                                    <figure class="effect-julia">
                                        <picture>
                                            <img src="{{ asset('images/category') }}/{{ $category->featured_image }}" alt="">
                                        </picture>
                                        <figcaption>
                                            <h2><span>{{ App::isLocale('ar') ? $category->name_ar : $category->name }}  </span></h2>
                                            <div style="margin-top: 10px;">
                                                <p>{{ App::isLocale('ar') ? $category->description_ar : $category->description }} </p>
                                            </div>
                                        <a href="{{ route('home.category_page', ['unique_id' => $category->unique_id, 'sluq' => $category->sluq]) }}">View more</a>
                                        </figcaption>		
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
        {{-- </div> --}}
    </div>

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
                                        <h4 style="font-weight: bolder" class="mb-0"><a href="#">{{ $item->name_ar }}</a></h4>
                                    @else
                                        <h4 style="font-weight: bolder" class="mb-0"><a href="#">{{ $item->name }}</a></h4>
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
                        <img src="https://images.unsplash.com/photo-1566177229701-8895c29b9c68?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Thumb">
                            <a href="http://www.youtube.com/watch?v=nMsZkTA75D0" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="col-md-6 info">
                        <h3 class="text-center">{{ __('default.our_story') }}</h3>
                        <p>
                            {{ _('default.OUR_STORY_PAR') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>

<script>

    imagesLoaded('.js-images-loaded', () => {
    new Masonry(document.querySelector('.js-masonry'), {
        itemSelector: '.js-masonry-item'
    });
    });

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