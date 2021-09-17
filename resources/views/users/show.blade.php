@extends('layout.app')

@section('content')

    <ul class="list-group">
        @foreach ($users as $user)
            <li class="list-group-item"><span class="bold-span">ID:</span>
                {{ $user->id }}</li>
            <li class="list-group-item"><span class="bold-span">Telegram ID:</span>
                {{ $user->telegramId }}
            </li>
            <li class="list-group-item"><span class="bold-span">Ф.И.О.:</span>
                {{ $user->fio }}
            </li>
            <li class="list-group-item"><span class="bold-span">Телефон:</span>
                {{ $user->phone }}
            </li>
            <li class="list-group-item"><span class="bold-span">Компания:</span>
                {{ $user->company }}
            </li>
            <li class="list-group-item"><span class="bold-span">Эл. почта:</span>
                {{ $user->email }}
            </li>
            <li class="list-group-item"><span class="bold-span">Логин:</span>
                {{ $user->login }}
            </li>
            <li class="list-group-item"><span class="bold-span">Пароль:</span>
                {{ $user->pass }}
            </li>
        @endforeach
    </ul>

@endsection
