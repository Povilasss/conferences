<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puslapio pavadinimas')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav>
    <!-- Navigacijos juosta -->
    <ul>
        <li><a href="{{ route('home') }}">Pagrindinis</a></li>
        <li><a href="{{ route('client.index') }}">Kliento posistemis</a></li>
        <li><a href="{{ route('employee.dashboard') }}">Darbuotojo posistemis</a></li>
        <li><a href="{{ route('admin.dashboard') }}">Administratoriaus posistemis</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
