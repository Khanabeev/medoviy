@extends('admin.layout.main')

@section('content')
    <h1>Заказы</h1>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <th>ID</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Город</th>
            <th>Дата</th>
            <th>Статус</th>
            <th>Детали</th>
            </thead>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->city??""}}</td>
                <td>{{\Carbon\Carbon::parse($order->created_at)->format('d.m.Y H:i:s')}}</td>
                <td><button class="no-csspointerevents btn btn-{{\App\Order::STATUS_COLOR[$order->status]}} disabled">
                        {{\App\Order::STATUSES[$order->status]}}
                    </button></td>
                <td><a href="{{route('order.show',$order->id)}}" class="btn btn-success">Заказ</a></td>

            </tr>
                @endforeach
        </table>
        {{ $orders->links() }}
    </div>

@endsection
