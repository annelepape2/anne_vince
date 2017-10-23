<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('/public/css/app.css') }}" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background:#e74c3c;margin-bottom:0px;!important;border:none; ">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a href="{{ url('/') }}"><img
                                    src="https://icon-icons.com/icons2/537/PNG/512/camera_icon-icons.com_52946.png" class="img-responsive"
                                    style="height:40px;width:80px;margin-top:5px;"></a></span>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Se connecter</a></li>
                            <li><a href="{{ route('register') }}">Inscription</a></li>
                        @else
                            <li><a href="{{ url('/home') }}">Accueil</a></li>
                            <li><a href="{{ route('profile') }}">Mon profil</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false" style="position:relative; padding-left: 50px;">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                                         style="width: 32px; height: 32px; border-radius: 50%; position: absolute; top: 10px; left: 10px;">
                                </a>
                            </li>




                            <li class="dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false" style="position:relative; padding-left: 50px;">
                                   <!-- <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                                         style="width: 32px; height: 32px; border-radius: 50%; position: absolute; top: 10px; left: 10px;"> -->
                                     <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                                    class="fa fa-btn fa-sign-out"></i> Deconnexion</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<style>

    .navbar-default .navbar-nav > li > a {
        color:#ffffff; !important;
    }

</style>
