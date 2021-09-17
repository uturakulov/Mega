@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-5" style="margin-left: 18vw; margin-top: 7vh; height: 67vh; position: absolute;">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Редактировать</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($messages as $message)
            <form action="/broadcast/update/{{ $message->id }}" method="post" style="margin-top: 20px"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                            value="{{ $message->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Фото</label>
                        <div></div>
                        <input type="file" id="exampleInputEmail1" name="image" required>
                        <img src="{{ $message->image }}" alt="" width="200">
                    </div>
                </div>
                <!-- /.card-body -->
        @endforeach
        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>

@endsection

