<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagrindinis puslapis</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Pagrindinis puslapis</h1>

    <h2>Studento informacija:</h2>
    <ul>
        <li>Vardas: {{ $studentInfo['name'] }}</li>
        <li>Pavardė: {{ $studentInfo['surname'] }}</li>
        <li>Grupė: {{ $studentInfo['group'] }}</li>
    </ul>

    <h2>Nuorodos į vaidmenų posistemius:</h2>
    <ul>
        <li><a href="{{ route('client.index') }}">Kliento posistemis</a></li>
        <li><a href="{{ route('employee.dashboard') }}">Darbuotojo posistemis</a></li>
        <li><a href="{{ route('admin.dashboard') }}">Sistemos administratoriaus posistemis</a></li>
    </ul>
</div>
</body>
</html>
