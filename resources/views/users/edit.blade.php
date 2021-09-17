@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-6" style="margin-left: 13vw; margin-top: 5vh; height: 67vh; position: absolute">
        <div class="card-header" style="width: 102%; margin-left: -7.5px">
            <h3 class="card-title">Редактировать</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($users as $user)
            <form action="/user/update/{{ $user->id }}" method="post" style="margin-top: 20px">
                {{ csrf_field() }}
                <div class="row">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telegram ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="telegramId" required
                                value="{{ $user->telegramId }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Роль ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="roleId" required
                                value="{{ $user->roleId }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ФИО</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="fio" required
                                value="{{ $user->fio }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Телефон</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="phone" required
                                value="{{ $user->phone }}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Компания</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="company" required
                                value="{{ $user->company }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="email" required
                                value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Логин</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="login" required
                                value="{{ $user->login }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пароль</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="pass" required
                                value="{{ $user->pass }}">
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- /.card-body -->

        <button type="submit" class="btn btn-primary" style="margin: -10px 10px 15px 20px">Изменить</button>
        </form>
    </div>
@endsection
