<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Link para o css -->
        <link rel="stylesheet" href="/css/style.css">

        <!-- Link para o js -->
         <script src="/js/script.js"></script>

         <!-- Link para o google fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

         <!-- Links para o bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    </head>
    <body class="antialiased">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/linkdin.svg" alt="" id='logo'>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/sobre" class="nav-link">Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/projetos" class="nav-link">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/login" class="nav-link">Entrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <p>Criado por &copy; Enzo Hilan</p>
        </footer>

    </body>
</html>