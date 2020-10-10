<!DOCTYPE html>

  @if (App::isLocale('en'))
    <html lang="en">
  @else
    <html lang="ar" dir="rtl">
  @endif

<head>

    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- ========== Page Title ========== -->
    <title>{{ $title ?? ''}} </title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- ========== Start Stylesheet ========== -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- ========== End Stylesheet ========== -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
    
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178492437-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-178492437-1');
    </script>

</head>

<body>

      <!-- Preloader Start -->
      @if (App::isLocale('ar'))
      <div class="se-pre-con" style="background: url('{{ asset('images/pre-cicon-ar.png') }}') center no-repeat #fff; !important"></div>
      @else
      <div class="se-pre-con" style="background: url('{{ asset('images/pre-cicon-en.png') }}') center no-repeat #fff; !important"></div>
      @endif
      <!-- Preloader Ends -->

      
    @include('includes.inner-header')
     @yield('content')
    @include('includes.footer')

    <script src="{{ asset('js/all.js') }}"></script>
    @yield('script')

</body>
</html>