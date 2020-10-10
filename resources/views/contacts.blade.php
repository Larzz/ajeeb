@extends('layouts.inner')

@section('content')   

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

       <!-- Start Breadcrumb 
    ============================================= -->
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

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="contact-box">
                    
                    <!-- Start Form -->
                    <div class="col-md-5 form-box">
                        <div class="form-content">
                            <div class="heading">
                            <h3>{{ __('default.DROP_US_A_LINE') }}</h3>
                            </div>
                            <form action="javascript:;" method="POST" id="contact-forms" class="contact-forms">

                                <div class="col-md-12 hide">
                                    <div class="alert alert-primary" role="alert">
                                        This is a primary alert—check it out!
                                      </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="{{ __('default.NAME') }}" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="{{ __('default.EMAIL') }}" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="" placeholder="{{ __('default.PHONE') }}" type="numeric">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="message" name="message" placeholder="{{ __('default.MESSAGE') }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                       <button type="submit" data-route="{{ route('contact.submit') }}" name="submit" id="submit">
                                            Send Message 
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                            
                            
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                    <div class="col-md-6 col-md-offset-1 info">
                        <h2>{{ __('default.get_in_touch') }}</h2>
                        <p>
                           {{ __('default.CONTACT_MESSAGE') }}
                        </p>
                        <br>
                        <div class="address">
                            <ul>
                                <li>
                                    <span>{{ __('default.ADDRESS') }}</span>
                                    <p>
                                         <a href="">Switch Foodstuff Trading Co. LLC Sharjah, UAE P.O. Box 25743 </a>
                                    </p>
                                </li>
                                <br>
                                <li>
                                    <span>{{ __('default.PHONE') }}</span>
                                    <p>
                                        <a href="tel:+971 54 3055102">+971 54 3055102</a>
                                    </p>
                                    <p>
                                        <a href="tel:+971 56 3773129">+971 56 3773129</a>
                                    </p>
                                    <p>
                                        <a href="tel:+971 56 3377634"> +971 56 3377634</a>                             
                                     </p>
                                </li>
                                <br>
                                <li>
                                    <span>{{ __('default.CONNECT') }}</span>
                                    <p>
                                        <a target="_blank" href="https://www.facebook.com/ajeebswitch"><i class="fab fa-facebook-f"></i> Facebook </a>
                                    </p>
                                    <p>
                                        <a target="_blank" href="https://www.instagram.com/ajeebswitch/"><i class="fab fa-instagram"></i> Instagram</a>
                                    </p>
                                    <p>
                                        <a target="_blank" href="https://www.linkedin.com/in/ajeeb-switch-8252941b8/"><i class="fab fa-linkedin"></i> Linkedin</a>
                                    </p>
                                </li>

                            </ul>
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

        var $this = $(this)

        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var message = $('#message').val();

        var data = {
            name: name,
            email:email,
            phone: phone,
            message:message
        }

        if(!name) {
            alertify.error('Please input your name');
        } else if(!email) {
            alertify.error('Please input your email');
        } else if(!phone) {
            alertify.error('Please input your phone');
        } else if(!message) {
            alertify.error('Please input your message');
        } else {

            $.ajax({
                type : 'POST',
                url: $('#submit').attr('data-route'),
                cache: false,
                data: data,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                beforeSend: function() {
                    $('#submit').html('Please wait <i class="fas fa-spinner fa-spin"></i>').attr('disabled', 'disabled')
                },
                success: function(response){
                    if(response.status) {
                           alertify.alert("Thank you for reaching to us", "One of our representative will contact to your as soon possible.", function(){
                            });
                    } else {
                        alertify.alert("Something went wrong", "Please try again later.", function(){
                            });
                    }

                    $('#submit').html(' Send Message <i class="fa fa-paper-plane"></i>').removeAttr('disabled', 'disabled')

                    var name = $('#name').val('');
                    var email = $('#email').val('');
                    var phone = $('#phone').val('');
                    var message = $('#message').val('');

                }
            });
        }

    });
</script>

@endsection