@extends('layouts.inner')

@section('content')   

       <!-- Start Breadcrumb   ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url({{ asset('images/bg-101.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>{{ __('default.get_in_touch') }}</h1>
                    <ul class="breadcrumb">
                    <li><a href="{{ route('home.index') }}"><i class="fas fa-home"></i> {{ __('default.home') }}</a></li>
                        <li class="active">{{ __('default.get_in_touch') }}</li>
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
                            <div class="avatar">
                                <img src="http://ajeeb.test/images/products/white_meat_tuna_olive_oil.png" alt="Thumb">
                             
                            </div>
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
                         
                        </div>
                    </div>
                    <div class="col-md-7 info">
                        <h2>How do i make raservations</h2>
                        <p>
                            Pleased anxious or as in by viewing forbade minutes prevent. Too leave had those get being led weeks blind. Had men rose from down lady able. Its son him ferrars proceed six parlors.
                        </p>
                    </div>
                    <!-- Start Form -->
                    

                 
                    
                </div>
            </div>
        </div>
    </div>

    <div class="food-menu-area path-less carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h3>Discorver</h3>
                        <h2>Our specials</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-lists food-menu-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="price">
                                    <h5>$5.90</h5>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Crispy Crust Pizzeria</a></h4>
                                <span>Mutton / Olive Oil / Salt</span>
                                <p>
                                    Considered introduced themselves mr to discretion at. Means among saw hopes for. Death mirth in oh learn he equal on.
                                </p>
                                <div class="button">
                                    <a href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="price">
                                    <h5>$18.10</h5>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Luger Burger</a></h4>
                                <span>Beef / Olive Oil / Salt</span>
                                <p>
                                    Considered introduced themselves mr to discretion at. Means among saw hopes for. Death mirth in oh learn he equal on.
                                </p>
                                <div class="button">
                                    <a href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="price">
                                    <h5>$6.00</h5>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Fries McDonald's</a></h4>
                                <span>Chicken / Olive Oil / Salt</span>
                                <p>
                                    Considered introduced themselves mr to discretion at. Means among saw hopes for. Death mirth in oh learn he equal on.
                                </p>
                                <div class="button">
                                    <a href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="price">
                                    <h5>$11.50</h5>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Chicken Popeyes</a></h4>
                                <span>Mutton / Olive Oil / Salt</span>
                                <p>
                                    Considered introduced themselves mr to discretion at. Means among saw hopes for. Death mirth in oh learn he equal on.
                                </p>
                                <div class="button">
                                    <a href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>git 

@endsection

@section('script')

<script>
</script>

@endsection