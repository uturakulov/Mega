@extends('layout.app')

@section('content')
    <h1>Заявки</h1>
    <form action="/orders/export" method="get">
        <input type="date" name="begin">
        <input type="date" name="end">
        <button type="submit">Export</button>
    </form>
    {{-- <a href="{{ action('OrderController@export') }}" class="btn btn-success">Export</a> --}}

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Пользователь</th>
            <th>Тип</th>
            <th>ТРЦ</th>
            <th>Время</th>
            <th>Бренд</th>
            <th>Период</th>
            <th>Бюджет</th>
            <th>Тип Рекламы</th>
            <th>Акция</th>
            <th>Статус</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td><a href="{{ route('users.show', $order['user_id']) }}">{{ $order->user->fio ?? 'NA' }}</a></td>
                <td>{{ $order->type }}</td>
                <td>{{ $order->firm }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->brend }}</td>
                <td>{{ $order->period }}</td>
                <td>{{ $order->budjet }}</td>
                <td>{{ $order->tipRek }}</td>
                <td>{{ $order->stock }}</td>
                <td><a href="/order/edit/{{ $order->id }}">{{ $order->status }}</a></td>
                <td>
                    <a href="{{ route('order.destroy', $order['id']) }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
