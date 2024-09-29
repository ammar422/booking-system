@extends('layouts.master')
@section('content')


    <div class="top-nav ">
        <div class="container">
            <div class="container text-center">
                <div class="row responsive-bar">
                    <div class="col">

                    </div>
                    <div class="col title-style font-weight-bold ">
                        <h2">خدمة تمديد تأمين تأشيرة زيارة</h2>
                    </div>
                    <div class="col">
                        <img class="img-banner" src="assets/images/WhatsApp Image 2024-09-13 at 8.56.08 PM.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-bot">
            <!-- left One -->
            <div class="nav-bot-left align-text-center">
                <ul class="nav-menu">
                    <li><a href="">حساب جديد</a></li>
                    <li> <a href="{{ route("login") }}">تسجيل الدخول <i class="fa-solid fa-lock"></i></a> </li>
                </ul>
            </div>
            <!-- right One -->
            <div class="nav-bot-right align-text-center">
                <div class="nav-bot-right-inner">
                    <ul class="nav-menu ">
                        <li><a href="{{ route('offer_inquiry') }}">الاستعلام عن وثيقة او عرض سعر</a></li>
                        <li><a href="{{ route('offer_new') }}">الحصول علي عرض سعر جديد</a></li>
                        <li> <a href="{{ route('home') }}">الرئيسية <i class="fa-solid fa-house"></i></a> </li>
                    </ul>
                    <div class="menu__mobile">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header>
        <nav class="menu">
            <div class="wrapper">


                <div class="mobile-menu-overlay"></div>
                <div class="menu__sidebar">
                    <div class="menu__sidebar-close">
                        <span class="menu__close">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                    <ul class="menu__bar">
                        <li class="menu__item"> <a class="menu__link" href="">الرئيسية <i
                                    class="fa-solid fa-house"></i></a> </li>
                        <li class="menu__item"><a class="menu__link" href="">الاستعلام عن وثيقة او عرض سعر</a></li>
                        <li class="menu__item"><a class="menu__link" href="">الحصول علي عرض سعر جديد</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-cart ">
        <div class="container-cart-inner">
            <a class="cart" href="{{ route("offer_inquiry") }}">
                <img class="icoon" src="assets/icons/aicc-vv-home-search-policy.png" alt="">
                <h2>الخدمة لإلكترونية</h2>
            </a>
            <a class="cart cart-right " href="{{ route('offer_new') }}">
                <img class="icoon" src="assets/icons/icon-const-before.svg" alt="">
                <h2>تأمين جديد لتمديد تأشيرة الزيارة</h2>
            </a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="assets/js/main.js"></script>
@endsection
