@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-6" style="margin-left: 13vw; margin-top: 5vh; height: 70vh; position: absolute">
        <div class="card-header" style="width: 102%; margin-left: -7.5px">
            <h3 class="card-title">Добавить пользователя</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/user/store" method="post" style="margin-top: 20px">
            {{ csrf_field() }}
            <div class="row">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telegram ID</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="telegramId" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Роль ID</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="roleId" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ФИО</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="fio" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Телефон</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" required>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Компания</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="company" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Логин</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Пароль</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="pass" required>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>

@endsection
