@extends('admin.layout.main')

@section('content')
<h1>{{$name}}</h1>
<h3>Список цен</h3>
<table class="table table-responsive">
    <thead>
    <tr>
        <th scope="col">Цена</th>
        <th scope="col">Кол-во на единицу</th>
        <th scope="col">Ед. измерения</th>
        <th scope="col">Удалить</th>
    </tr>
    </thead>
    <tbody>
    @foreach($prices as $price)
    <tr>
        <td>{{$price->price}} руб.</td>
        <td>{{$price->quantity}}</td>
        <td>{{$price->measure}}</td>
        <td>
            <form method="post" action="{{route('price.destroy',$price->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </td>

    </tr>
        @endforeach
    </tbody>
</table>
<div><span class="text-danger">Десятичные числы записываются через точку</span>
    <form method="post" action="{{ route('price.store') }} ">
        @csrf
        <div class="form-row">

            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Цена" required>
            </div>
            <div class="col">
                <input type="text" name="quantity" class="form-control" placeholder="Кол-во на ед." required>
            </div>
            <div class="col">
                <select class="custom-select" name="measure" id="inputGroupSelect01" required>
                    <option selected>Ед.измерения...</option>
                    <option value="кг">кг</option>
                    <option value="л">л</option>
                    <option value="гр">гр</option>
                    <option value="шт">шт</option>
                    <option value="мл">мл</option>
                    <option value="банка">банка</option>
                </select>
            </div>
        </div>
        <input type="hidden" name="product_id" value="{{ $product_id }}" >
        <button type="submit" class="mt-3 btn btn-primary float-left">+ Добавить цену</button>
    </form>
    <a href="{{route('store')}}" class="btn btn-success ml-5 mt-3">Назад</a>
</div>
@endsection
