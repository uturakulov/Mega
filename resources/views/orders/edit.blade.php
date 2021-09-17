@extends('layout.app')

@section('content')

    <div class="card card-primary col-md-5" style="margin-left: 18vw; margin-top: 15vh; height: 40vh; position: absolute;">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Редактировать</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($orders as $order)
            <form action="/order/edit/{{ $order->id }}" method="post" style="margin-top: 20px">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Статус</label>
                        <select name="status" class="form-control">
                            <option value="Открыта" {{ $order->status == 'Открыта' ? 'selected' : '' }}>Открыта</option>
                            <option value="В работе" {{ $order->rate == 'В работе' ? 'selected' : '' }}>В работе</option>
                            <option value="Закрыта" {{ $order->rate == 'Закрыта' ? 'selected' : '' }}>Закрыта</option>
                        </select>
                    </div>
                </div>
        @endforeach
        <!-- /.card-body -->

        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>
@endsection
