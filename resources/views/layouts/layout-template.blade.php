<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/layoutStyle.css')}}">
</head>
<header>
<div class="container">
    <img src="{{asset('assets/logo.png')}}" alt="Logo">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-pad">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('welcome.get')}}">Página Inicial</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{route('proposals.get.view')}}">Enviar Proposta</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{route('list.get.view.proposals')}}">Lista de Trabalhos</a>
        </li>
        </ul>
    </div>
    </nav>
</div>
</header>
<body>
    @yield('content')
</body>
<br>
<div class="container">
    <footer class="mb-5 bg-dark footer-color">
        <p>&copy; Emprego & Carreira | Poços de Caldas, MG.</p>
    </footer>
</div>
</html>