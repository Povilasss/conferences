@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['description'] }}</p>
        <p>Data: {{ $conference['date'] }}</p>
        <p>Vieta: {{ $conference['location'] }}</p>
        <a href="#" class="btn btn-success">Registruotis</a>
    </div>
@endsection
