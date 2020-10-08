<!DOCTYPE html>
<html lang="en">
<head>
    <title>Developer Guide LK </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar" role="banner">
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-12 search-form-wrap js-search-form">
                <form method="get" action="#">
                    <input type="text" id="s" class="form-control" placeholder="Search...">
                    <button class="search-btn" type="submit"><span class="icon-search"></span></button>
                </form>
            </div>

            <div class="col-4 site-logo">
                <a href="index.html" class="text-black h2 mb-0 font-weight-bold">Developer Guide LK</a>
            </div>

            <div class="col-8 text-right">
                <nav class="site-navigation" role="navigation">
                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li><a href="category.html">Cources</a></li>
                        <li><a href="{{url('/post')}}">Blog</a></li>
                        <li><a href="{{url('/')}}">About me</a></li>

                        @auth
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endauth
                        @guest
                      {{--  <li><a href="{{url('/register')}}">Register</a></li>--}}
                        <li><a href="{{url('/login')}}">Login</a></li>
                        @endguest

                        <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
                    </ul>
                </nav>
                <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
        </div>

    </div>
</header>
<div class="site-wrap">
@yield('body-content')
</div>



<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
