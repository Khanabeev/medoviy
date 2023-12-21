@extends('admin.layout.main')

@section('content')
    <h1>Добавить продукт</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <form method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
        @csrf
        <div class="form-group">
            <label for="productName">Название *</label>
            <input type="text" class="form-control" name="name" id="productName" aria-describedby="nameProductHelp" placeholder="Введите название здесь" value="{{old('name')}}" required>
            <small id="nameProductHelp" class="form-text text-muted">Данное название будет отображаться в меню, на главной странице продукта, а также в магазине.</small>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" @change="isForStore()" value="true" name="is_for_store" id="is_for_store">
            <label class="form-check-label" for="is_for_store">
                Этот продукт только для магазина
            </label>
        </div>
        <div class="form-group"  v-if="isTitleShow">
            <label for="productTitle">Заголовок для вкладки *</label>
            <input type="text" class="form-control" name="title" id="productTitle" aria-describedby="titleHelp" placeholder="Введите заголовоко здесь" value="{{old('title')}}" required>
            <small id="titleHelp" class="form-text text-muted">Данное название будет отображаться во вкладке браузера и в Поисковых Системах</small>
        </div>
        <div class="form-group" v-if="isUrlShow">
            <label for="productUrl">URL страницы</label>
            <input type="text" class="form-control" name="url" id="productUrl" aria-describedby="urlHelp" placeholder="Введите URL здесь" value="{{old('url')}}">
            <small id="urlHelp" class="form-text text-muted">По этому URL будет доступна страница продукта</small>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Тип *</label>
            </div>
            <select class="custom-select" name="type" id="inputGroupSelect01" required>
                <option selected>Выберите...</option>
                <option value="honey">Мёд</option>
                <option value="product">Продукт</option>
            </select>
        </div>

        <div class="input-group mb-3" v-if="isImageShow">
            <div class="input-group-prepend">
                <span class="input-group-text">Загрузить изоброжение *</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image" accept="image/jpeg" required>
                <label class="custom-file-label" for="inputGroupFile01">Выберите файл (1920х1080)</label>
            </div>
        </div>

        <div class="form-group" v-if="isDescriptionShow">
            <label for="productDescription">Описание продукта</label>
            <input type="text" class="form-control" name="description" id="productDescription"
                   aria-describedby="descriptionHelp"
                   placeholder="Введите описание продукта (255 символов)"
                   value="{{old('description')}}">
            <small id="descriptionHelp" class="form-text text-muted">
                Это описание попадет в мета-данные страницы. Оно важно для Поисковых систем
            </small>
        </div>

        <div class="form-group" v-if="isKeyWordsShow">
            <label for="productKeywords">Ключевые слова</label>
            <input type="text" class="form-control" name="keywords" id="productKeywords"
                   aria-describedby="keywordsHelp"
                   placeholder="Введите ключевые слова (255 символов)"
                   value="{{old('keywords')}}">
            <small id="keywordsHelp" class="form-text text-muted">
                Эти ключевые слова попадут вмета-данные страницы. Они важны для Поисковых систем
            </small>
        </div>

        <div class="form-group">
            <label for="productProposal">Уникальное торговое предложение для продукта</label>
            <input type="text" class="form-control" name="proposal" id="productProposal"
                   aria-describedby="proposalHelp"
                   placeholder="Предложение"
                   value="{{old('proposal')}}">
            <small id="proposalHelp" class="form-text text-muted">
                Отображается в магазине внизу карточки продукта. Пример: при покупке от 10 литров скидка 15%.
            </small>
        </div>


        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
