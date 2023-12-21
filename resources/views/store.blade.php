@extends('layouts.layout',['title' => 'Каталог нашей продукции, сладкий подарок из Адыгеи, натуральные продукты из Адыгеи,| Мёд Адыгеи пасека Казанцева', 'description' => 'Каталог продукции, натуральные пчелопродукты  на пасеке Казанцева', 'keywords'=> 'Каталог продукции пчелопроизводства'])
@section('content')
    <div id="app">
        <section id="main-content" class="mt-3">
            <div class="container">
                <store-main-component></store-main-component>
            </div>
            <!-- /.container -->

        </section>
    </div>
    @endsection
@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
