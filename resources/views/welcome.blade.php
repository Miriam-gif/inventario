<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body,
        html {
            height: 100%;
        }

        /* The hero image */
        .hero-image {
            /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
            background-image: url("https://lp-cms-production.imgix.net/features/2017/09/GettyImages-148182634-c047e96be1cb.jpg");

            /* Set a specific height */
            height: 100%;

            /* Position and center the image to scale nicely on all screens */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Place text in the middle of the image */
        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
</head>

<body>


    <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/registro') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Inventario</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{ route('mostrar') }}">Mostrar</a>
                    <a class="nav-item nav-link" href="{{ route('registro') }}">Registrar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero-image">
        <div class="hero-text">
            <h1>SISTEMA DE INVENTARIO DE DOCUMENTOS</h1>
        </div>
    </div>

</body>

</html>