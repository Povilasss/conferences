
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Darbuotojo posistemis</h1>
        <p>Šiame posistemyje galite matyti visų įvykusių ir planuojamų konferencijų sąrašą.</p>
        <a href="{{ route('employee.conferences.index') }}" class="btn btn-primary">Peržiūrėti konferencijas</a>
    </div>
@endsection

