@extends('layout.app')

@section('content')
    <h1>Рассылка</h1>
    <a href="{{ route('broadcast.create') }}" class="btn btn-success">Добавить</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Блок</th>
            <th>Фото</th>
        </tr>
        @foreach ($broadcasts as $broadcast)
            <tr>
                <td>{{ $broadcast->id }}</td>
                <td>{{ $broadcast->title }}</td>
                <td>{{ $broadcast->blocked }}</td>
                <td><img src="{{ asset($broadcast->image) }}" alt="" width="150"></td>
                <td>
                    <a href="{{ route('broadcast.destroy', $broadcast['id']) }}" class="btn btn-danger">Удалить</a>
                    <a href="{{ route('broadcast.edit', $broadcast['id']) }}" class="btn btn-primary">Редактировать</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $broadcasts->links() }}
@endsection
