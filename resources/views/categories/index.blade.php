@extends('layout.app')

@section('content')
    <h1>Департаменты</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success">Добавить департамент</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Департамент</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category['id']) }}" class="btn btn-primary">Редактировать</a>
                    <a href="{{ route('categories.destroy', $category['id']) }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
