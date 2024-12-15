<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">
    <title>@yield('title', 'Where Publishers Meet Buyers—Effortlessly')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="hero is-fullheight" style="background-image: url('{{ asset('img/welcome-bg.jpg') }}'); background-size: cover; position: relative; margin: 0px">
    @include('components.header') 

    <main>
        @yield('content')
    </main>

    @include('components.footer') 
</body>
</html>