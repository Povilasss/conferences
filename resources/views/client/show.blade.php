@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black">{{ $conference['title'] }}</h1>
        <p class="text-black">{{ $conference['description'] }}</p>
        <p class="text-black">Data: {{ $conference['date'] }}</p>
        <p class="text-black">Vieta: {{ $conference['location'] }}</p>
        <a href="#" class="btn btn-success">Registruotis</a>
    </div>
@endsection
