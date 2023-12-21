@extends('layouts.layout',['title' => 'Оформление заказа', 'description' => 'Каталог продукции, натуральные пчелопродукты  на пасеке Казанцева', 'keywords'=> 'Каталог продукции пчелопроизводства'])
@section('content')
    <div id="app">
        <section id="main-content" class="mt-5">
            <div class="container">
                <store-order-page></store-order-page>
            </div>
            <!-- /.container -->

        </section>
    </div>
    @endsection
@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
