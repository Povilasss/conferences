
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sistemos administratoriaus posistemis</h1>
        <p>Pasirinkite vieną iš žemiau pateiktų valdymo galimybių:</p>
        <ul>
            <li>
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Naudotojų duomenų valdymas</a>
            </li>
            <li>
                <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">Konferencijų valdymas</a>
            </li>
        </ul>
    </div>
@endsection
