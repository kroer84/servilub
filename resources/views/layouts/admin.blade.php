<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="page">
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo-container">
                <div class="logo-container">
                    <img class="logo-sidebar" alt="logo" src="{{ asset('img/logo.png') }}"/>
                </div>
                <div class="brand-name-container">
                    <div class="brand-name">
                        thyssenkrupp
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="navigation-list">
                <li class="navigation-list-item">
                    <a class="navigation-link" href="{{ url('/') }}">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="col-10">
                                Dashboard
                            </div>
                        </div>
                    </a>
                </li>
                <li class="navigation-list-item">
                    <a class="navigation-link" href="{{ url('/') }}">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-file-invoice-dollar"></i>
                            </div>
                            <div class="col-10">
                                Presupuestos
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <hr class="style9">
            <div class="teams-title-container">
                <p class="teams-title">Reportes</p>
            </div>
            <ul class="teams-list">
                <li class="teams-list-item">
                    <a class="navigation-link" href="#">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-file" style="color: blue"></i>
                            </div>
                            <div class="col-10">
                                Rango De Fechas
                            </div>
                        </div>
                    </a>
                </li>
                <li class="teams-list-item">
                    <a class="navigation-link" href="#">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-file" style="color: red"></i>
                            </div>
                            <div class="col-10">
                                Mensual
                            </div>
                        </div>
                    </a>
                </li>
                <li class="teams-list-item">
                    <a class="navigation-link" href="#">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-file" style="color: orange"></i>
                            </div>
                            <div class="col-10">
                                Bimestral
                            </div>
                        </div>
                    </a>
                </li>
                <li class="teams-list-item">
                    <a class="navigation-link" href="#">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-file" style="color: rgb(252, 227, 0)"></i>
                            </div>
                            <div class="col-10">
                                Trimestral
                            </div>
                        </div>
                    </a>
                </li>
                <li class="teams-list-item">
                    <a class="navigation-link" href="#">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-file" style="color: rgb(16, 154, 178)"></i>
                            </div>
                            <div class="col-10">
                                Semestral
                            </div>
                        </div>
                    </a>
                </li>
                <li class="teams-list-item">
                    <a class="navigation-link" href="#">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-file" style="color: green"></i>
                            </div>
                            <div class="col-10">
                                Anual
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <hr class="style9">
            <ul>
                <li>

                </li>
            </ul>
        </div>
    </div>
    <div class="content">
            {{-- <div class="navigationBar">
                <button id="sidebarToggle" class="btn sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div> --}}

        <nav class="navbar navbar-expand-md bg-primary navbar-light bg-white shadow-sm navigationBar">
            <div class="container">
                <button id="sidebarToggle" class="btn sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand spacio" href="{{ url('/') }}">
                       {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div id="app">


        <main class="py-3">
            admin
            @yield('content')
        </main>
    </div>
    </div>
</div>



</body>
</html>
