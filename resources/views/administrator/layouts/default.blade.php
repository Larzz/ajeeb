<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- ========== Page Title ========== -->
    <title>Ajeeb - Food & Restauratn Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ mix('css/administrator.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    @yield('uploader')
    <script src="{{ mix('js/administrator.js') }}"></script>
</head>

<body>
    <!-- Header  ============================================= -->
    @include('administrator.includes.header')
    <!-- End Header -->
    @yield('content')
    <!-- jQuery Frameworks ============================================= -->
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    @yield('script')
</body>
</html>