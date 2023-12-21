@extends('admin.layout.main')

@section('content')
    <h1>Магазин</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{route('store.store')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="product_id">Какой продукт добавить в магазин?</label>
                            <select class="form-control" id="product_id" name="product_id">
                                @foreach($products_list as $product)
                                    <option value="{{$product['id']}}">{{$product['name']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Загрузить изоброжение для карточки товара</span>
                            </div> <div class="custom-file">
                                <input type="file" id="image" name="image" accept="image/jpeg" class="custom-file-input" required>
                                <label for="image" class="custom-file-label">Выберите файл (250х140 пикселей)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="order">Порядковый номер</label>
                            <input type="number" class="form-control" name="order" id="order" style="width: 70px" min="0" max="999">
                        </div>
                        <button class="btn btn-success">+ Добавить в магазин</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Опубликован</th>
            <th scope="col">Название</th>
            <th scope="col">Номер</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Цена</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>
                    @if($product->is_available)
                        <div class="text-success">
                            Да
                        </div>
                @else
                        <div class="text-danger">
                            Нет
                        </div>
                    @endif
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->order}}</td>
                <td>
                    <a href="{{route('store.show',$product->product_id)}}" class="btn btn-warning">Редактировать</a>
                </td>
                <td>
                    <a href="/admin/product/{{$product->product_id}}/edit-price" class="btn btn-info">Цены</a>
                </td>
                <td>
                    <a href="{{route('store.destroy',$product->product_id)}}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    @endsection
