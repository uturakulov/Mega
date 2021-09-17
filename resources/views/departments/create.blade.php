@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-5" style="margin-left: 18vw; margin-top: 15vh; height: 38vh; position: absolute;">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Добавить локацию</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/product/store" method="post" style="margin-top: 20px">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Локация</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="location" required>
                </div>
            </div>
            <!-- /.card-body -->

            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>

@endsection
