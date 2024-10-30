@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>Konferencijų sąrašas</h1>
        <ul>
            @foreach($conferences as $conference)
                <li>
                    <h3>{{ $conference['title'] }}</h3>
                    <p>{{ $conference['description'] }}</p>
                    <a href="{{ route('client.show', $conference['id']) }}" class="btn btn-primary">Peržiūrėti</a>
                    <a href="#" class="btn btn-success">Registruotis</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
