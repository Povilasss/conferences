@extends('layouts.app')

@section('content')
    <div class="container mx-auto max-w-3xl my-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-center mb-3 text-black">Konferencijų sąrašas</h1>
        <ul class="space-y-6">
            @foreach($conferences as $conference)
                <li class="p-6 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-2xl font-semibold mb-3 text-black">{{ $conference['title'] }}</h3>
                    <p class="text-gray-700 mb-4">{{ $conference['description'] }}</p>
                    <div class="flex justify-between">
                        <a href="{{ route('client.show', $conference['id']) }}" class="btn btn-primary">Peržiūrėti</a>
                        <a href="#" class="btn btn-success">Registruotis</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
