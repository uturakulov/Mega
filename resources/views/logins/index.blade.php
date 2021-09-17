@extends('layout.app')

@section('content')
    <h1>Пароли</h1>
    <a href="{{ route('login.create') }}" class="btn btn-success">Добавить</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
        @foreach ($logins as $login)
            <tr>
                <td>{{ $login->id }}</td>
                <td>{{ $login->login }}</td>
                <td>{{ $login->pass }}</td>
                <td>
                    <a href="{{ route('login.destroy', $login['id']) }}" class="btn btn-danger">Удалить</a>
                    <a href="{{ route('login.edit', $login['id']) }}" class="btn btn-primary">Редактировать</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
