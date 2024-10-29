
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sukurti naują konferenciją</h1>

        <form action="{{ route('admin.conferences.store') }}" method="POST">
            @csrf

            <!-- Pavadinimas -->
            <div class="form-group">
                <label for="title">Pavadinimas</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Aprašymas -->
            <div class="form-group">
                <label for="description">Aprašymas</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Lektoriai -->
            <div class="form-group">
                <label for="lecturers">Lektoriai</label>
                <input type="text" id="lecturers" name="lecturers" class="form-control" value="{{ old('lecturers') }}" required>
                @error('lecturers')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Data -->
            <div class="form-group">
                <label for="date">Data</label>
                <input type="date" id="date" name="date" class="form-control" value="{{ old('date') }}" required>
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Laikas -->
            <div class="form-group">
                <label for="time">Laikas</label>
                <input type="time" id="time" name="time" class="form-control" value="{{ old('time') }}" required>
                @error('time')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Adresas -->
            <div class="form-group">
                <label for="address">Adresas</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Sukurti konferenciją</button>
        </form>
    </div>
@endsection
