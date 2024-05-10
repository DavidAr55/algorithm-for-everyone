<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Agregar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Agregar JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Agregar Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Agregar Estilo CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar" id="navbar">
        <div class="colum-nav">
            <h3 class="ff-Varino fs-25"><a href="home" class="button-title">ALGORITHM FOR EVERYONE</a></h3>
        </div>
        <div class="colum-nav">
            <div class="container-nav-options">
                <ul class="ff-Cascadia">
                    <li><a href="#" class="button-nav-options">Home</a></li>
                    <li><a href="#" class="button-nav-options">Algorithms</a></li>
                    <li><a href="#" class="button-nav-options">Repository</a></li>
                    <li><a href="#" class="button-nav-options">Contact</a></li>
                    <li><a href="#" class="button-nav-options">Contribute</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    @yield('content')

    <!-- Scripts Section -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Scripts de Bootstap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>