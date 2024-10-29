
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Redaguoti konferenciją</h1>

        <form action="{{ route('admin.conferences.update', $conference['id']) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Pavadinimas -->
            <div class="form-group">
                <label for="title">Pavadinimas</label>
                <input type="text" id="title" name="title" value="{{ old('title', $conference['title']) }}" class="form-control" required>
            </div>

            <!-- Aprašymas -->
            <div class="form-group">
                <label for="description">Aprašymas</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description', $conference['description']) }}</textarea>
            </div>

            <!-- Lektoriai -->
            <div class="form-group">
                <label for="lecturers">Lektoriai</label>
                <input type="text" id="lecturers" name="lecturers" value="{{ old('lecturers', $conference['lecturers']) }}" class="form-control" required>
            </div>

            <!-- Data -->
            <div class="form-group">
                <label for="date">Data</label>
                <input type="date" id="date" name="date" value="{{ old('date', $conference['date']) }}" class="form-control" required>
            </div>

            <!-- Laikas -->
            <div class="form-group">
                <label for="time">Laikas</label>
                <input type="time" id="time" name="time" value="{{ old('time', $conference['time']) }}" class="form-control" required>
            </div>

            <!-- Adresas -->
            <div class="form-group">
                <label for="address">Adresas</label>
                <input type="text" id="address" name="address" value="{{ old('address', $conference['address']) }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Išsaugoti</button>
        </form>
    </div>
@endsection
