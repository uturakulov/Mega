@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-5" style="margin-left: 18vw; margin-top: 1vh; height: 82vh; position: absolute;">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Редактировать</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($stocks as $stock)

            <form action="/stock/update/{{ $stock->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form">
                        <div class="flex1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                                    value="{{ $stock->title }}" required>
                            </div>
                        </div>
                        <div class="flex2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Caption</label>
                                <textarea name="caption" cols="30" rows="4"
                                    class="form-control">{{ $stock->caption }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-left: 30px">
                        <label for="exampleInputEmail1">Фото</label>
                        <div></div>
                        <input type="file" id="exampleInputEmail1" name="img" required>
                        <img src="{{ asset($stock->img) }}" alt="" width="130">
                    </div>
                    <div class="form">
                        <div class="flex1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ТРЦ</label>
                                <select name="location_id" class="form-control">
                                    <option value="{{ $stock->location_id }}" selected>
                                        {{ $stock->location->title ?? 'NA' }}
                                    </option>
        @endforeach
        @foreach ($locations as $location)
            <option value="{{ $location->id }}">{{ $location->title }}</option>
        @endforeach
        </select>
    </div>
    </div>
    <div class="flex2">
        @foreach ($stocks as $stock)
            <div class="form-group">
                <label for="exampleInputEmail1">Решения</label>
                <select name="type" class="form-control">
                    <option value="{{ $stock->type }}" selected>{{ $stock->type }}</option>
                    <option value="Акционные решения">Акционные решения</option>
                    <option value="Пакетные решения">Пакетные решения</option>
                </select>
            </div>
    </div>
    </div>
    </div>
    <!-- /.card-body -->
    @endforeach
    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 50px">Добавить</button>
    </form>
    </div>

@endsection
