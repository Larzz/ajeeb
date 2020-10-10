@extends('layouts.inner')

@section('content')

       <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url({{ asset('images/bg-101.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>{{ __('default.ERROR') }}</h1>
                    <ul class="breadcrumb">
                    <li><a href="{{ route('home.index') }}"><i class="fas fa-home"></i> {{ __('default.home') }}</a></li>
                        <li class="active">{{ __('default.ERROR') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="error-page-area text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="error-box">
                        <h1>4<i class="fas fa-sad-tear"></i>4</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <p>
                            The Page you are looking for doesn't exist or an other error occurred. 
                            <br/>
                            Go back, or head over to the homepage to choose new directions
                        </p>
                        <div class="search hide">
                            <div class="input-group">
                                <form action="#">
                                    <input type="text" placeholder="Search" class="form-control" name="text">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231106.72081450655!2d55.12490892878765!3d25.168042334913313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5bfaff1cf17f%3A0x39cb811887e7343e!2sSwitch%20Foodstuff%20Trading%20Co%20LLC-Sharjah%20Office!5e0!3m2!1sen!2sae!4v1600593079010!5m2!1sen!2sae" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->

@endsection

@section('script')

<script>
    $('#contact-forms').submit(function() {
        console.log('helo')
        alert('hello')
    });
</script>

@endsection