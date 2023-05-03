<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('js/scripts.js') }}">
    </head>
    <body class="antialiased">
        <h1>Algum título!</h1>
        <img src="{{ asset('img/banner.jpg') }}" alt="Banner">
    </body>
</html>
