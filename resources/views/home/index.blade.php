<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagrindinis puslapis</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a href="{{ route('client.index') }}">Kliento posistemis</a></li>
                <li><a href="{{ route('employee.dashboard') }}">Darbuotojo posistemis</a></li>
                <li><a href="{{ route('admin.dashboard') }}">Sistemos administratoriaus posistemis</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">Konferencijos</a>
    </div>
    <div class="navbar-end">
        <details class="dropdown">
            <summary class="btn m-1 btn-ghost">Studento informacija</summary>
            <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li>Vardas: {{ $studentInfo['name'] }}</li>
                <li>Pavardė: {{ $studentInfo['surname'] }}</li>
                <li>Grupė: {{ $studentInfo['group'] }}</li>
            </ul>
        </details>
        <button class="btn btn-active btn-ghost">Logout</button>
    </div>
</div>
</body>
</html>
{{--<div class="container">--}}
{{--    <h1>Pagrindinis puslapis</h1>--}}

{{--    <h2>Studento informacija:</h2>--}}
{{--    <ul>--}}
{{--        <li>Vardas: {{ $studentInfo['name'] }}</li>--}}
{{--        <li>Pavardė: {{ $studentInfo['surname'] }}</li>--}}
{{--        <li>Grupė: {{ $studentInfo['group'] }}</li>--}}
{{--    </ul>--}}

{{--    <h2>Nuorodos į vaidmenų posistemius:</h2>--}}
{{--    <ul>--}}
{{--        <li><a href="{{ route('client.index') }}">Kliento posistemis</a></li>--}}
{{--        <li><a href="{{ route('employee.dashboard') }}">Darbuotojo posistemis</a></li>--}}
{{--        <li><a href="{{ route('admin.dashboard') }}">Sistemos administratoriaus posistemis</a></li>--}}
{{--    </ul>--}}
{{--</div>--}}
