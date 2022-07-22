<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SFA') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>

    <div id="app">
        @guest
        @endguest
    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">Pruebas de Menú</a>
                  </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Formulario') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listarpersonas') }}">{{ __('Actualizar de Usuarios') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">{{ __('Usuarios') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('crear') }}">{{ __('Citas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Cerrar Sesión') }}</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        
    <body>
            <main class="py-4">
                    @yield('content')    
            </main>
    </div>
    </body>
</html>
