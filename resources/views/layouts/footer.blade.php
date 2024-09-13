<!-- footer -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            {{ __('footer.address') }}
                        </h3>
                        <p class="footer_text"> 200, Green road, Mongla, <br>
                            New York City USA</p>
                        <a href="#" class="line-button">{{ __('footer.Get_Direction') }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            {{ __('footer.Contact_us') }}
                        </h3>
                        <p class="footer_text">+10 367 267 2678 <br>
                            reservation@montana.com</p>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            {{ __('footer.Navigation') }}
                        </h3>
                        <ul>
                            <li><a href="#">{{ __('header.home') }}</a></li>
                            <li><a href="#">{{ __('header.newOffer') }}</a></li>
                            <li><a href="#">{{ __('header.Inquiry') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    @unless (Auth::check())
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                {{ __('footer.Newsletter') }}
                            </h3>
                            <form action="{{ route('register') }}" class="newsletter_form">
                                <input type="text" placeholder="{{ __('footer.Enter_your_mail') }}">
                                <button type="submit">{{ __('header.register') }}</button>
                            </form>
                            <p class="newsletter_text">{{ __('footer.Subscribe_text') }}</p>
                        </div>
                    @endunless
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
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-8 col-md-7 col-lg-9">
                    <p class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This Website and system are made with <i
                            class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://alabdaatech.com/"
                            target="_blank">Al-Ebda3 Tech</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>

            </div>
        </div>
    </div>
</footer>

<!-- link that opens popup -->


<!-- JS here -->
<script src={{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}></script>
<script src={{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}></script>
<script src={{ asset('assets/js/popper.min.js') }}></script>
<script src={{ asset('assets/js/bootstrap.min.js') }}></script>
<script src={{ asset('assets/js/owl.carousel.min.js') }}></script>
<script src={{ asset('assets/js/isotope.pkgd.min.js') }}></script>
<script src={{ asset('assets/js/ajax-form.js') }}></script>
<script src={{ asset('assets/js/waypoints.min.js') }}></script>
<script src={{ asset('assets/js/jquery.counterup.min.js') }}></script>
<script src={{ asset('assets/js/imagesloaded.pkgd.min.js') }}></script>
<script src={{ asset('assets/js/scrollIt.js') }}></script>
<script src={{ asset('assets/js/jquery.scrollUp.min.js') }}></script>
<script src={{ asset('assets/js/wow.min.js') }}></script>
<script src={{ asset('assets/js/nice-select.min.js') }}></script>
<script src={{ asset('assets/js/jquery.slicknav.min.js') }}></script>
<script src={{ asset('assets/js/jquery.magnific-popup.min.js') }}></script>
<script src={{ asset('assets/js/plugins.js') }}></script>
<script src={{ asset('assets/js/gijgo.min.js') }}></script>

<!--contact js-->
<script src={{ asset('assets/js/contact.js') }}></script>
<script src={{ asset('assets/js/jquery.ajaxchimp.min.js') }}></script>
<script src={{ asset('assets/js/jquery.form.js') }}></script>
<script src={{ asset('assets/js/jquery.validate.min.js') }}></script>
<script src={{ asset('assets/js/mail-script.js') }}></script>

<script src={{ asset('assets/js/main.js') }}></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
</script>
