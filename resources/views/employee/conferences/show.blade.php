
@extends('layouts.app')

@section('content')
    <div class="container text-center text-black">
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['description'] }}</p>
        <p><strong>Data:</strong> {{ $conference['date'] }}</p>

        <h3>Užsiregistravę klientai:</h3>
        <ul class="list-disc list-inside">
            @foreach($conference['registered_clients'] as $client)
                <li>{{ $client['name'] }} - {{ $client['email'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection

