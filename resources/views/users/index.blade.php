@extends('layout.app')

@section('content')
    <h1>Пользователи</h1>
    <a href="{{ route('users.create') }}" class="btn btn-success">Добавить пользователя</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Telegram ID</th>
            <th>Роль</th>
            <th>ФИО</th>
            <th>Телефон</th>
            <th>Компания</th>
            <th>Email</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->telegramId }}</td>
                <td>{{ $user->roleId }}</td>
                <td>{{ $user->fio }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->company }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->login }}</td>
                <td>{{ $user->pass }}</td>
                <td>
                    <a href="{{ route('users.show', $user['id']) }}" class="btn btn-secondary">Все</a>
                    <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-primary">Редактировать</a>
                    <a href="{{ route('users.destroy', $user['id']) }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
