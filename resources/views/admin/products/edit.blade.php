@extends('admin.layout.main')

@section('content')
    <h1>Редактировать продукт</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <form method="post" enctype="multipart/form-data" action="{{route('product.update', $product->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="productName">Название</label>
            <input type="text" class="form-control" name="name" id="productName"
                   aria-describedby="nameProductHelp"
                   placeholder="Введите название здесь" value="{{ $product->name }}">
            <small id="nameProductHelp" class="form-text text-muted">Данное название будет отображаться в меню, на главной странице продукта, а также в магазине.</small>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" @change="isForStore()" value="true" name="is_for_store" id="is_for_store">
            <label class="form-check-label" for="is_for_store">
                Этот продукт только для магазина
            </label>
        </div>

        <div class="form-group" v-if="isTitleShow">
            <label for="productTitle">Заголовок для вкладки</label>
            <input type="text" class="form-control" name="title" id="productTitle" aria-describedby="titleHelp"
                   placeholder="Введите заголовоко здесь" value="{{$product->title}}">
            <small id="titleHelp" class="form-text text-muted">
                Данное название будет отображаться во вкладке браузера и в Поисковых Системах
            </small>
        </div>
        <div class="form-group" v-if="isUrlShow">
            <label for="productUrl">URL страницы</label>
            <input type="text" class="form-control" name="url" id="productUrl" aria-describedby="urlHelp"
                   placeholder="Введите URL здесь" value="{{$product->url}}">
            <small id="urlHelp" class="form-text text-muted">
                По этому URL будет доступна страница продукта
            </small>
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Тип</label>
            </div>
            <select class="custom-select" name="type" id="inputGroupSelect01" required>
                <option>Выберите...</option>
                <option @if($product->type == 'honey') selected @endif value="honey">Мёд</option>
                <option @if($product->type == 'product') selected @endif value="product">Продукт</option>
            </select>
        </div>
        <div class="img-thumbnail" v-if="isImageShow">
            <img src="/storage/{{$product->image}}" width="400" alt="">
        </div>

        <div class="input-group mb-3" v-if="isImageShow">
            <div class="input-group-prepend">
                <span class="input-group-text">Загрузить новое изоброжение</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image" accept="image/jpeg">
                <label class="custom-file-label" for="inputGroupFile01">Выберите файл (1920х1080)</label>
            </div>
        </div>

        <div class="form-group" v-if="isDescriptionShow">
            <label for="productDescription">Описание продукта</label>
            <input type="text" class="form-control" name="description" id="productDescription"
                   aria-describedby="descriptionHelp"
                   placeholder="Введите описание продукта (255 символов)"
                   value="{{$product->description}}" required>
            <small id="descriptionHelp" class="form-text text-muted">
                Это описание попадет в мета-данные страницы. Оно важно для Поисковых систем
            </small>
        </div>

        <div class="form-group" v-if="isKeyWordsShow">
            <label for="productKeywords">Ключевые слова</label>
            <input type="text" class="form-control" name="keywords" id="productKeywords"
                   aria-describedby="keywordsHelp"
                   placeholder="Введите ключевые слова (255 символов)"
                   value="{{$product->keywords}}" required>
            <small id="keywordsHelp" class="form-text text-muted">
                Эти ключевые слова попадут вмета-данные страницы. Они важны для Поисковых систем
            </small>
        </div>

        <div class="form-group">
            <label for="productProposal">Уникальное торговое предложение для продукта</label>
            <input type="text" class="form-control" name="proposal" id="productProposal"
                   aria-describedby="proposalHelp"
                   placeholder="Предложение"
                   value="{{$product->proposal}}">
            <small id="proposalHelp" class="form-text text-muted">
                Отображается в магазине внизу карточки продукта. Пример: при покупке от 10 литров скидка 15%.
            </small>
        </div>

        <div class="form-group" v-if="isImageShow">
            <label for="imagePosition">Позиция изображения</label>
            <input type="text" class="form-control" name="image_position" id="imagePosition"
                   aria-describedby="positionHelp"
                   placeholder="50% 50%"
                   value="{{$product->image_position}}">
            <small id="positionHelp" class="form-text text-muted">
                Позиция изображения в хедере. Пример: 50% 50%.
            </small>
        </div>

        <div class="form-group" v-if="isImageShow">
            <label for="productContent">Основной контент страницы</label>
            <textarea class="form-control" name="content" id="productContent" rows="20">
                {{ htmlspecialchars_decode($product->content) }}
            </textarea>
        </div>


        <button type="submit" class="btn btn-warning float-left">Обновить</button>
    </form>
    <a href="{{route('product.index')}}" class="btn btn-success ml-5">Назад</a>
@endsection
