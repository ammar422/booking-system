<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li>
                                        <i class="fa fa-home" aria-hidden="true">
                                            <a class="active" href="{{ route('home') }}">{{ __('header.home') }}</a>

                                        </i>
                                    </li>
                                    <li><a href="{{ route('offer_new') }}">{{ __('header.newOffer') }}</a></li>
                                    <li><a href="{{ route('offer_inquiry') }}"> {{ __('header.Inquiry') }}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            {{-- <a href="index.html">
                                <img src={{ asset('assets/img/logo.png') }} alt="">
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="book_room">
                            <div class="language-switch">
                                @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                    <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                        <i class="fas fa-globe"></i> English
                                    </a>
                                @else
                                    <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                        <i class="fas fa-globe"></i> العربية
                                    </a>
                                @endif
                            </div>

                            <div class="book_btn d-none d-lg-block">
                                <a href="{{ route('login') }}" style="font-weight: bold;">{{ __('header.login') }}</a>
                            </div>
                            <div class="book_btn d-none d-lg-block">
                                <a href="{{ route('register') }}"
                                    style="font-weight: bold;">{{ __('header.register') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
