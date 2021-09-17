@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-6" style="margin-left: 15vw; margin-top: 15vh; height: 45vh; position: absolute">
        <div class="card-header" style="width: 102%; margin-left: -7.5px">
            <h3 class="card-title">Добавить фото</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($photos as $photo)
            <form action="/product/photo/edit/{{ $photo->id }}" method="post" style="margin-top: 20px"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Фото</label>
                        <div></div>
                        <input type="file" id="exampleInputEmail1" name="image">
                        <img src="{{ $photo->img }}" alt="" width="200" style="border-radius: 20px">
                    </div>
        @endforeach
    </div>
    <!-- /.card-body -->

    <button type="submit" class="btn btn-primary" style="margin: 0 10px 15px 20px; width: 100px">Добавить</button>
    </form>
    </div>

@endsection
