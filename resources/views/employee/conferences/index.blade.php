
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Visų konferencijų sąrašas</h1>
        <ul>
            @foreach($conferences as $conference)
                <li>
                    <h3>{{ $conference['title'] }}</h3>
                    <p>{{ $conference['description'] }}</p>
                    <p><strong>Data:</strong> {{ $conference['date'] }}</p>
                    <a href="{{ route('employee.conferences.show', $conference['id']) }}" class="btn btn-primary">Peržiūrėti</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
