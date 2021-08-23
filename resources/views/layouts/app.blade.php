<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ego') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/nav_menu.js') }}" defer></script>
    <script src="{{ asset('js/filter.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="navbar-ego">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <img src="/images/logo.png" alt="Ego - logo" />
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a href="/home" class="{{  request()->is('home') ? 'active' : request()->routeIs('filter') ? 'active' : '' }}">
                                <span>Modelos</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="" class="{{  request()->routeIs('detail') ? 'active' : '' }}">
                                <span>Ficha de modelo</span>
                            </a>
                        </li>
                    </ul>

                   {{--  <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown mr-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> --}}
                    <button class="btn-menu">
                            <span>Menú</span>
                            <img src="/images/gray.svg" alt="Menú - Icono" />
                    </button>
                </div>
            </div>
        </nav>
            <div class="menu" >
            <ul>
                <li>
                    <a href="/" class="btn-menu-close">
                        Cerrar
                        <img src="/images/fill-1.png" alt="Close menu" />
                    </a>
                </li>
            </ul>
            <div class='menu-tab'>
                <ul>
                    <li><a href="/">Modelos</a></li>
                    <li><a href="/">Servicios y Accesorios</a></li>
                    <li><a href="/">Financiación</a></li>
                    <li><a href="/">Reviews y Comunidad</a></li>
                </ul>
            </div>
            <ul>
                <li>
                    <a href="/">
                        <hr />
                    </a>
                </li>
            </ul>
            <div class='menu-tab'>
                <ul>
                    <li><a href="/">Toyota Mobility Service</a></li>
                    <li><a href="/">Toyota Gazoo Racing</a></li>
                    <li><a href="/">Toyota Híbridos</a></li>
                </ul>
            </div>
            <ul>
                <li>
                    <a href="/">
                        <hr />
                    </a>
                </li>
            </ul>
            <div class='menu-tab'>
                <ul>
                    <li><a href="/">Concesionarios</a></li>
                    <li><a href="/">Test Drive</a></li>
                    <li><a href="/">Contacto</a></li>
                </ul>
            </div>
            <div class='menu-tab menu-tab-dark'>
                <ul>
                    <li><a href="/">Actividades</a></li>
                    <li><a href="/">Servicios al Cliente</a></li>
                    <li><a href="/">Ventas Especiales</a></li>
                    <li><a href="/">Innovación</a></li>
                    <li><a href="/">Prensa</a></li>
                    <li><a href="/">Acerca de...</a></li>
                </ul>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
            @yield('detail')
        </main>
    </div>
    @include('footer')
</body>
</html>
