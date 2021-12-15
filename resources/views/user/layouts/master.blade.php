<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>BeautyFarah</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <link rel="apple-icon" href="images/logo1.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div>
        @include('user.includes._navbar')
        <div>
            @yield('content')
        </div>
        @include('user.includes._footer')
    </div>

      <!-- ALL JS FILES -->
      <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/jquery.superslides.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-select.js')}}"></script>
    <script src="{{ asset('js/inewsticker.js')}}"></script>
    <script src="{{ asset('js/bootsnav.js.')}}"></script>
    <script src="{{ asset('js/images-loded.min.js')}}"></script>
    <script src="{{ asset('js/isotope.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/baguetteBox.min.js')}}"></script>
    <script src="{{ asset('js/form-validator.min.js')}}"></script>
    <script src="{{ asset('js/contact-form-script.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>