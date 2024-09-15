<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description"
        content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{ route('dashboard') }}">Booking</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!--Notification Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                    aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                    <li class="app-notification__title">You have 4 new notifications.</li>
                    <div class="app-notification__content">
                        <li><a class="app-notification__item" href="javascript:;"><span
                                    class="app-notification__icon"><span class="fa-stack fa-lg"><i
                                            class="fa fa-circle fa-stack-2x text-primary"></i><i
                                            class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Lisa sent you a mail</p>
                                    <p class="app-notification__meta">2 min ago</p>
                                </div>
                            </a></li>
                    </div>
                    </div>
                    <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
                </ul>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                    aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i>
                            Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
                <p class="app-sidebar__user-designation">{{ auth()->user()->email }}</p>
            </div>
        </div>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="{{ route('dashboard') }}"><i
                        class="app-menu__icon fa fa-dashboard"></i><span
                        class="app-menu__label">{{ __('body.show_all_Insurance_categories') }}</span></a>
            </li>

            <li>
                <a class="app-menu__item" href="{{ route('all_Insurance_documents') }}">
                    <i class="app-menu__icon fa fa-address-book" aria-hidden="true"></i>
                    <span class="app-menu__label">{{ __('body.show_all_Insurance_documents') }}</span></a>
            </li>


        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa-solid fa-sack-dollar"></i>
                    <span>

                        {{ __('body.edit_category_price') }}
                    </span>
                </h1>
                {{-- {{ $price }} --}}
            </div>

            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard') }}">{{ __('body.show_all_Insurance_categories') }}</a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('editPrice', $price->id) }}">{{ __('body.edit_category_price') }}</a></li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">{{ __('body.edit_category_price') }}</h3>
                <strong>{{ __('body.category') . ' ' . $price->category }}</strong>
                <br>
                <strong>{{ ' frome' . $price->min_age . ' years old to ' . $price->max_age . ' years old' }}</strong>
                <br><br>
                <div class="tile-body">

                    <form class="row" method="POST" action="{{ route('updatePrice', $price->id) }}">
                        @csrf
                        <div class="form-group col-md-3">
                            <label class="control-label">{{ __('body.current_price') }}</label>
                            <input class="form-control" disabled type="text" value="{{ $price->monthly_cost }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">{{ __('body.new_price') }}</label>
                            <input class="form-control" name="price" type="text" autofocus>
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div class="form-group col-md-4 align-self-end">
                            <button class="btn btn-primary">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>{{ __('body.edit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>






    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/admin-main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('assets/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
</body>

</html>
