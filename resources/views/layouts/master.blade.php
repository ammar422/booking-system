<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Booking Visa')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('assets/img/favicon.png') }}>
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/magnific-popup.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/themify-icons.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/nice-select.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/flaticon.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/gijgo.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/animate.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/slicknav.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('includes.custom_style')
</head>

<body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')


</body>

</html>
