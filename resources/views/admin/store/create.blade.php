@extends('admin.layout.main')

@section('content')
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
                        @foreach($products as $product)
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

                <button class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
