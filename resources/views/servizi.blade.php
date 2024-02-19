<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraWell</title>
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- mio css --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            {{-- Nome Sito --}}
            <a class="navbar-brand" href="#">LaraWell</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- link con pulsanti collegati a web.php --}}
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/chisiamo">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servizi">Servizi</a>
                    </li>
                </ul>
                {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
            </div>
        </div>
    </nav>
    {{-- end navbar --}}
    {{-- Titolo scheda --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="display-3 text-center">I nostri servizi:</h2>
            </div>
        </div>
    </div>
    {{-- fine titolo scheda --}}
    {{-- Cards --}}
    <div class="container">
        <div class="row">
            @foreach ($servizi as $servizio)
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $servizio['name'] }} </h5>
                            <p class="card-text">{{ $servizio['function'] }} </p>
                            <a href="{{ route('serviziDet', ['service' => $servizio['name']]) }} "
                                class="btn btn-primary">Scopri di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- fine cards --}}


    {{-- bootsrap css --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- mio css --}}
    <script src="/js/main.js"></script>
</body>

</html>
