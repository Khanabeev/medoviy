@extends('admin.layout.main')

@section('content')
    <div class="card">
        <div class="card-header">Клиент</div>
        <div class="card-body">
                <div class="alert-dark alert">Имя: {{$order['name']}}</div>
                <div class="alert-dark alert">Телефон: {{$order['phone']}}</div>
                <div class="alert-dark alert">Город: {{$order['city']}}</div>
                <div class="alert alert-{{\App\Order::STATUS_COLOR[$order['status']]}}">
                        Текущий статус заказа: {{\App\Order::STATUSES[$order['status']]}}
                    </div>
        </div>
    </div>
    <hr>
    <h5>Поменять статус заказа на:</h5>
    <a class="btn btn-{{\App\Order::STATUS_COLOR[\App\Order::STATUS_IN_PROGRESS]}}" href="{{route('order.change.status',['id'=> $order['id'],'status'=>\App\Order::STATUS_IN_PROGRESS])}}">
        {{\App\Order::STATUSES[\App\Order::STATUS_IN_PROGRESS]}}</a>
    <a class="btn btn-{{\App\Order::STATUS_COLOR[\App\Order::STATUS_DONE]}}" href="{{route('order.change.status',['id'=> $order['id'],'status'=>\App\Order::STATUS_DONE])}}">
        {{\App\Order::STATUSES[\App\Order::STATUS_DONE]}}</a>
    <a class="btn btn-{{\App\Order::STATUS_COLOR[\App\Order::STATUS_DELETED]}}" href="{{route('order.change.status',['id'=> $order['id'],'status'=>\App\Order::STATUS_DELETED])}}">
        {{\App\Order::STATUSES[\App\Order::STATUS_DELETED]}}</a>
    <a class="btn btn-{{\App\Order::STATUS_COLOR[\App\Order::STATUS_REJECTED]}}" href="{{route('order.change.status',['id'=> $order['id'],'status'=>\App\Order::STATUS_REJECTED])}}">
        {{\App\Order::STATUSES[\App\Order::STATUS_REJECTED]}}</a>
    <hr>
    <h5>Заказ</h5>
    <table class="table table-info">
        <thead>
        <th>Название</th>
        <th>Цена</th>
        <th>Кол.</th>
        <th>Сумма</th>
        </thead>
        @foreach(unserialize($order['order']) as $item)
            <tr>
                <td>{{$item['product_name']}}</td>
                <td>{{$item['quantity']}}{{$item['measure']}} / {{$item['price']}}руб.</td>
                <td>{{$item['qwt']}} шт.</td>
                <td>{{$item['total']}} руб.</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2"></td>
                <td class="font-weight-bold">ИТОГО: </td>
                <td class="font-weight-bold">{{$total}} руб.</td>
            </tr>
    </table>
    <form action="{{route('order.save.comment',$order['id'])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="comment">Комментарий к заказу</label>
            <textarea class="form-control" name="comment" id="comment" cols="30" rows="3">{{$order['comment']}}</textarea>
        </div>
        <button class="btn btn-outline-danger">Сохранить</button>
    </form>

    @endsection
