<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">
    <title>@yield('title', 'Where Publishers Meet Buyers—Effortlessly')</title>
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body class="hero is-fullheight" style="background-image: url('{{ asset('img/welcome-bg.jpg') }}'); background-size: cover; position: relative; margin: 0px">
    @include('components.header') 

    <main>
        @yield('content')
    </main>

    @include('components.footer') 
    <script src="../../js/app.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>