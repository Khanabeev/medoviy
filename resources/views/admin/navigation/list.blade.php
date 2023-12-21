@extends('admin.layout.main')

@section('content')
    <div class="row mt-3">
        <div class="col-md-12">
            <h1 class="float-left">Навигация</h1>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('navigation.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Введите имя *</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="products">Выберите продукт *</label>
                            <select class="form-control" name="product_id" id="products" required>
                                @foreach($products as $product)
                                    <option value="{{$product['id']}}">{{$product['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="order">Порядковый номер</label>
                            <input type="number" id="order" class="form-control" name="order">
                        </div>
                        <button class="btn btn-success">Добавить пункт</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Название</th>
        <th>Порядковый номер</th>
        <th>URL</th>
        <th>Тип</th>
        <th>Удалить</th>
        </thead>
        @foreach($data as $nav)
            @if($nav['type'] == 'honey')
                <tr>
                    <td>{{$nav['id']}}</td>
                    <td>{{$nav['name']}}</td>
                    <td>{{$nav['order']}}</td>
                    <td>{{$nav['url']}}</td>
                    <td>{{$nav['type']}}</td>
                    <td>
                        <form action="{{route('navigation.destroy',$nav['id'])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form></td>
                </tr>
            @endif
        @endforeach

        @foreach($data as $nav)
            @if($nav['type'] == 'product')
                <tr>
                    <td>{{$nav['id']}}</td>
                    <td>{{$nav['name']}}</td>
                    <td>{{$nav['order']}}</td>
                    <td>{{$nav['url']}}</td>
                    <td>{{$nav['type']}}</td>
                    <td>
                        <form action="{{route('navigation.destroy',$nav['id'])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form></td>
                </tr>
            @endif
        @endforeach
    </table>

    @endsection
