@extends('admin.layout.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header">{{$data['product_name']}}</div>
            <img src="{{$data['image']}}" alt="">
            <form method="post" action="{{route('store.edit',$data['product_id'])}}" enctype="multipart/form-data" >
                @csrf
                <div class="img-thumbnail">
                    <img src="/storage/{{$data['image']}}" width="400" alt="">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Загрузить новое изоброжение</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/jpeg">
                        <label class="custom-file-label" for="inputGroupFile01">Выберите файл (250x140)</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="order">Порядковый номер</label>
                    <input type="number" class="form-control"
                           name="order" id="order"
                           value="{{$data['order']}}"
                           style="width: 70px" min="0" max="999">
                </div>

                <button class="btn btn-warning float-left">Сохранить изменения</button>
            </form>
            <a href="{{route('store')}}" class="btn btn-success ml-4">Назад</a>
        </div>
    </div>

@endsection
