
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black text-center" style="font-size: 2rem; font-weight: bold;">Naudotojų valdymas</h1>
        <p class="text-black text-center">Čia galite valdyti sistemos naudotojus</p>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>El. paštas</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user['id']) }}" class="btn btn-primary">Redaguoti</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
