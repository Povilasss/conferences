<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puslapio pavadinimas')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<!-- Navigacijos juosta -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Sistemos pavadinimas</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Pagrindinis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.index') }}">Kliento posistemis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employee.dashboard') }}">Darbuotojo posistemis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Administratoriaus posistemis</a>
                </li>
            </ul>

            <!-- Naudotojo informacija ir Logout mygtukas -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link">Jonas Jonaitis</span> <!-- Čia naudotojo vardas ir pavardė -->
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-secondary" disabled>Logout</button> <!-- Išjungtas Logout mygtukas -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Pagrindinis turinys -->
<div class="container mt-4">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

