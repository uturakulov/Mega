@extends('layout.app')

@section('content')
    <h1>Акция</h1>
    <a href="{{ route('stock.create') }}" class="btn btn-success">Добавить</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Caption</th>
            <th>Тип</th>
            <th>ТРЦ</th>
            <th>Фото</th>
        </tr>
        @foreach ($stocks as $stock)
            <tr>
                <td>{{ $stock->id }}</td>
                <td>{{ $stock->title }}</td>
                <td>{{ $stock->caption }}</td>
                <td>{{ $stock->type }}</td>
                <td>{{ $stock->location->title ?? 'NA' }}</td>
                <td><img src="{{ asset($stock->img) }}" alt="" width="150"></td>
                <td>
                    <a href="{{ route('stock.destroy', $stock['id']) }}" class="btn btn-danger">Удалить</a>
                    <a href="{{ route('stock.edit', $stock['id']) }}" class="btn btn-primary">Редактировать</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
