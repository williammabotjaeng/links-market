<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('Icon.png') }}" type="image/x-icon">
    <script src="js/app.js"></script>
    <title>@yield('title', 'Where Influencers Meet Brands, Effortlessly')</title>
    <link rel="stylesheet" href="css/app.css">
    <style>
        :root {
            --bulma-primary: #008c8c;
            --bulma-danger: #ff4c4c;
        }

        .full-viewport {
            height: 100vh; 
            width: 100vw;  
            overflow: hidden; 
        }

        .navbar a:hover {
            background-color: rgba(0, 140, 140, 0.1) !important; 
        }

        .button:hover {
            background-color: rgba(0, 140, 140, 0.1) !important;
            color: white !important;
            border-color: white !important;
        }
    </style>
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