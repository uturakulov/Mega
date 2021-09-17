@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-5" style="margin-left: 18vw; margin-top: 15vh; height: 47vh; position: absolute;">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Редактировать</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($logins as $login)

            <form action="/login/update/{{ $login->id }}" method="post" style="margin-top: 20px">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Логин</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="login"
                            value="{{ $login->login }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Пароль</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="pass"
                            value="{{ $login->pass }}" required>
                    </div>
                </div>
                <!-- /.card-body -->
        @endforeach

        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>

@endsection
