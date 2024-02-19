<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraWell</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">LaraWell</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chisiamo') }}">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                    </li>
                </ul>
                {{-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </nav>

    {{-- Titolo scheda --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center">Benvenuti su LaraWell!</h1>
            </div>
        </div>
    </div>
    {{-- fine titolo scheda --}}
    {{-- Cards --}}
    <div class="container">
        <div class="row justify-content-around">
            @foreach ($pagine as $pagina)
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $pagina['img'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pagina['name'] }}</h5>
                            <p class="card-text">{{ $pagina['smallDescrip'] }} </p>
                            <a href="{{ $pagina['link'] }}" class="btn btn-primary">Scopri di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- fine cards --}}



</body>

</html>
