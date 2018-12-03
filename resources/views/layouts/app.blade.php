<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ url('./assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ url('./assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ url('css/creative.css') }}" rel="stylesheet">
    <!-- Fonts -->
    @if (Auth::guest())
        <link href="{{ url('css/app.css') }}" rel="stylesheet">
    @else
        <link href="{{ url('css/admin.css') }}" rel="stylesheet">
    @endif
</head>
<body id="app-layout">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('./images/Netflix_Logo_RGB.png')}}" width="120px" height="30px"></a>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                @if (!Auth::guest())
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/tv-show') }}">TV Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/recently') }}">Recently Added</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/list') }}">My List</a>
                    </li>
                </ul>
                @endif
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="right">
                            <a class="btn btn-light btn-xl login-button " href="{{ url('/login') }}">Login</a>
                            {{--<a class="btn btn-light btn-xl login-button " href="{{ url('/register') }}">register</a>--}}
                        </li>
                    @else
                        <div class="dropdown">
                            <button class="btn btn-light btn-xl  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('/') }}">Menage Profiles</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Account</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Help Center</a>
                                <a class="dropdown-item" href="{{ url('/logout') }}">Sing out of Netflix</a>
                            </div>
                        </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    @yield('services')
    @yield('about')
    @yield('watch')
    @yield('price')
    @yield('contact')

    @yield('lists-video')
    @yield('contact-video')


    @yield('footer')

    <script src="{{ url('./assets/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('./assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('./js/app.js')}}"></script>
    @stack('scripts')

</body>
</html>
