@extends('layout.app')

@section('content')
    <h1>Менеджеры</h1>
    <a href="{{ route('managers.create') }}" class="btn btn-success">Добавить менеджера</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Категория</th>
            <th>Локация</th>
            <th>Ф.И.О</th>
            <th>Телефон</th>
        </tr>
        @foreach ($managers as $manager)
            <tr>
                <td>{{ $manager->id }}</td>
                <td>{{ $manager->category->title ?? 'NA' }}</td>
                <td>{{ $manager->location->title ?? 'NA' }}</td>
                <td>{{ $manager->fio }}</td>
                <td>{{ $manager->phone }}</td>
                <td>
                    <a href="{{ route('managers.edit', $manager['id']) }}" class="btn btn-primary">Редактировать</a>
                    <a href="{{ route('managers.destroy', $manager['id']) }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
