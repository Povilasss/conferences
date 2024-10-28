
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Redaguoti naudotoją: {{ $user['name'] }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.users.update', $user['id']) }}" method="POST">
            @csrf
            @method('PUT') <!-- Nurodo, kad tai PUT metodas -->

            <!-- Vardas -->
            <div class="form-group">
                <label for="name">Vardas</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user['name']) }}" class="form-control" required>
            </div>

            <!-- El. paštas -->
            <div class="form-group">
                <label for="email">El. paštas</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user['email']) }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Išsaugoti</button>
        </form>
    </div>
@endsection

