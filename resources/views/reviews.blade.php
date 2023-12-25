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
                <div class="col-md-12 text-justify">
                    <form action="{{ route('review.store') }}" method="POST">
                        @csrf

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Ваше имя:</label>
                            <input type="name" class="form-control" id="name" name="name" required>
                        </div>

                        <!-- Testimonial Text Field -->
                        <div class="form-group">
                            <label for="review">Ваш отзыв:</label>
                            <textarea class="form-control" id="review" name="review"
                                      rows="4" minlength="10" maxlength="500" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
                <!-- /.col-md-8 -->
                {{--                @include('parts.side_menu')--}}
            </div>
        </div>
    </section>
@endsection
