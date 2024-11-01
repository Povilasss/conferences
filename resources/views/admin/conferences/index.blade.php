
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="color: black; text-align: center; font-weight: bold; font-size: 2rem;">Konferencijų valdymas</h1>
        <a href="{{ route('admin.conferences.create') }}" class="btn btn-primary">Sukurti naują konferenciją</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Data</th>
                <th>Statusas</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference['title'] }}</td>
                    <td>{{ $conference['date'] }}</td>
                    <td>{{ $conference['status'] }}</td>
                    <td>
                        <a href="{{ route('admin.conferences.edit', $conference['id']) }}" class="btn btn-warning">Redaguoti</a>
                        @if($conference['status'] !== 'Įvykusi')
                            <form action="{{ route('admin.conferences.destroy', $conference['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Trinti</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
