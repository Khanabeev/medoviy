@extends('layouts.layout',['title' => 'Отзывы о нас', 'description' => 'Отзывы о натуральных пчелопродуктах на пасеке Казанцева', 'keywords'=> 'Каталог продукции пчелопроизводства'])
@section('content')
    <!-- HERO
=================================================================-->
    <section class="fire_cta fire_cta4 pos_relative"
             style="background: url({{asset('/storage/images/carousel-bee2.jpg')}}) 50% 30% no-repeat; background-size: cover;">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h1 class="color_ff shadowtext-sm mb-0" style="font-size: 2em;">Отзывы о нас</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT
    =================================================================-->
    <section id="main-content" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-justify">
                    <h3>Ваш отзыв успешно отправлен</h3>
                </div>
                <!-- /.col-md-8 -->
                                @include('parts.side_menu')
            </div>
        </div>
    </section>
@endsection
