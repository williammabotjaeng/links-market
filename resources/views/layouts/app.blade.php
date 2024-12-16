<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="shortcut icon" href="{{ asset('Icon.png') }}" type="image/x-icon">
    <script src="js/app.js"></script>
    <title>@yield('title', 'Where Publishers Meet Buyers—Effortlessly')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @include('components.header') 

    <main>
        @yield('content')
    </main>

    @include('components.footer') 
    <script src="../../js/app.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>