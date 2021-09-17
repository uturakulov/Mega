@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-5" style="margin-left: 18vw; margin-top: 1vh; height: 82vh; position: absolute;">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Добавить</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/stock/store" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Caption</label>
                    {{-- <input type="text" class="form-control" id="exampleInputEmail1" name="caption" required> --}}
                    <textarea name="caption" cols="30" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Фото</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="img" required>
                </div>
                <div class="form">
                    <div class="flex1">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ТРЦ</label>
                            <select name="location_id" class="form-control">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Решения</label>
                            <select name="type" class="form-control">
                                <option value="">Выберите решение...</option>
                                <option value="Акционные решения">Акционные решения</option>
                                <option value="Пакетные решения">Пакетные решения</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>

@endsection
