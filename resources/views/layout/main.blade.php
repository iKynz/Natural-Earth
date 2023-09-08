<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Css --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="">

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <a href="/"><img src="/img/natural_logo.png" alt="" class="title-img"></a>
            <a class="navbar-brand fs-4 title-container" href="/">Natural Terra</a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title menu-container" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4">
                    <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item mx-2 mt-2">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item mx-2 mt-2">
                            <a class="nav-link" href="/events/create_receita">Adicionar Receita</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center align-items-center gap-3" style="padding: 5px;">
                        <a href="#" class="text-white">Entrar</a>
                        <a href="#" class="text-white text-decoration-none px-3 py-1 rounded-4"
                            style="background-color: yellowgreen; font-weight: bold;">Cadastrar</a>
                    </div>
                    <form class="d-flex mt-2 " role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar Receita" aria-label="Search">
                        <button class="btn-search" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>
