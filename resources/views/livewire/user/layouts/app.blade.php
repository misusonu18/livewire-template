<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @livewireStyles
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Slick-theme.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
        type="text/css"
        href="{{ asset('css/color.css') }}"
        media="screen"
        id="color"
    >
</head>

<body>
    <header>
        <div class="mobile-fix-option"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>

                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-left">
                                                <i class="fa fa-angle-left pr-2" aria-hidden="true"></i>

                                                Back
                                            </div>
                                        </div>

                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="brand-logo">
                                <a href="#">                        
                                </a>
                            </div>
                        </div>

                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>

                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">
                                                Back

                                                <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#">
                                                Home
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-cart">
                                            <div>
                                                <i class="fa fa-shopping-bag"> </i>
                                            </div>

                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    No Cart Item
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="addcart_btm_popup" id="fixed_cart_icon">
        <a href="#" class="fixed_cart">
            <i class="fa fa-shopping-cart"></i>
        </a>
    </div>

    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }
        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

    @if (session()->has('message.text'))
        <script>
            alertify.set('notifier', 'position', 'top-right');
            let type = "{{ session('message.type') }}";
            let message = "{{ session('message.text') }}";
            alertify.notify(message, type);
        </script>
    @endif
</body>
</html>