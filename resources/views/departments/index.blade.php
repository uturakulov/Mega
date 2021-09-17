@extends('layout.app')

@section('content')
    <h1>Локации</h1>
    <div></div>

    @foreach ($photos as $photo)
        <div style="display: flex">
            <img src="{{ $photo->img }}" alt="" width="300" style="margin: 20px; border-radius: 10px">
            <div style="display: flex ;flex-direction: column; margin-top: 60px; margin-left: 10px">
                <a href="{{ route('departments.create') }}" class="btn btn-success"
                    style="margin-left: 20px; width: 200px">Добавить
                    категорию</a>
                <a href="photo/edit/{{ $photo->id }}" class="btn btn-primary"
                    style="margin-left: 20px; width: 200px; margin-top: 40px">Изменить
                    фото</a>
            </div>
        </div>
    @endforeach
    {{-- <a href="{{ route('departments.create') }}" class="btn btn-success">Добавить локацию</a> --}}

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Локация</th>
        </tr>
        @foreach ($locations as $location)
            <tr>
                <td>{{ $location->id }}</td>
                <td>{{ $location->title }}</td>
                <td>
                    <a href="{{ route('departments.departmentsEdit', $location['id']) }}"
                        class="btn btn-primary">Редактировать</a>
                    <a href="{{ route('departments.destroy', $location['id']) }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
