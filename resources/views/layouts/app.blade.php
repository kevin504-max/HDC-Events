<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>

        {{-- Fonte do Google --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        {{-- CSS da aplicação --}}
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('js/scripts.js') }}">
    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="" class="navbar-brand">
                        <img src="{{ asset('img/hdcevents_logo.svg') }}" alt="Logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Eventos</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Cadastrar Eventos</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Entrar</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Cadastrar</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield("content")
        <footer>
            <p>HDC Events &copy; 2023</p>
        </footer>
    </body>
</html>
