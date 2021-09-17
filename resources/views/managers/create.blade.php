@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-6" style="margin-left: 15vw; margin-top: 8vh; height: 60vh; position: absolute">
        <div class="card-header" style="width: 102%; margin-left: -7.5px">
            <h3 class="card-title">Добавить менеджера</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/manager/store" method="post" style="margin-top: 20px" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form">
                    <div class="flex1">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ФИО</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="fio" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Телефон</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Категория</label>
                            <select name="categoryId" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Локация</label>
                            <select name="locationId" class="form-control">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Фото</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" name="img" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 55px">Добавить</button>
        </form>
    </div>

@endsection
