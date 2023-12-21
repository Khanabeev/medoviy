@extends('layouts.layout',['title' => 'Контакты производителя', 'description' => 'Обратная связь с пчеловодом', 'keywords'=> 'контакты,номера телефонов производителя натурального  кавказского меда'])

@section('content')
    <!-- HERO
header image here (change style background in code)
=================================================================-->
    <section class="fire_cta fire_cta4 pos_relative" style="background: url({{asset('/storage/images/img-big-flover1.jpg')}}) 50% 30% no-repeat; background-size: cover;">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h1 class="color_ff shadowtext-sm mb-0" style="font-size: 2em;">Контакты</h1>
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
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!--			  первая карточка здесь -->
                            <div class="card mb-3">
                                <div class="card-body">
				    <p style="font-size: 1.1em" class="text-left">
				    	<a href="tel:+79284619163" class="mt-3"><i class="fa fa-phone"></i>&nbsp;+7 (928) 461 91 63 Лариса</a><br>
				    	<a href="tel:+79284619164" class="mt-3"><i class="fa fa-phone"></i>&nbsp;+7 (928) 461 91 64 Александр</a>
				    </p>
                                    <p>Республика Адыгея г.Майкоп<br>
                                    </p>
                                    <p>Email: <a href="mailto:medoviyobereg@mail.ru">medoviyobereg @ mail.ru</a></p>
                                    <p>www.medoviyobereg.ru</p>
                                    <p>Звоните пожалуйста с 8.00 до 21.00 по московскому времени. Рады будем ответить.</p>
                                </div>
                                <!-- /.card-->
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <hr>
                    <h3 class="font-montserrat-alternates mb-3 mt-3 text-center">Нашу медовую продукцию можно приобрести по следующим адресам:</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Карточка с card-img-bottom -->
                            <div class="card mb-3">

                                <!-- Текстовый контент -->
                                <div class="card-body">
                                    <h5 class="card-title text-left font-montserrat-alternates">г.Майкоп Магазин "Galaxy" ул.Краснооктябрьская&nbsp;34</h5>
                                </div>

                                <!-- Изображение -->
                                <img class="card-img-bottom" src="/storage/images/mag.jpg" alt="Магазин продукции"> </div>
                            <!-- Конец карточки -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <!-- Карточка с card-img-bottom -->
                            <div class="card mb-3">

                                <!-- Текстовый контент -->
                                <div class="card-body">
                                    <h5 class="card-title text-left font-montserrat-alternates">г.Майкоп Магазин "Стрелец" ул.Советская&nbsp;124</h5>
                                    <h6 class="card-subtitle text-left font-montserrat-alternates" style="font-size: 1em;">(угол Советской и Шовгенова)</h6>
                                </div>

                                <!-- Изображение -->
                                <img class="card-img-bottom" src="/storage/images/mag2.jpg" alt="Магазин продукции"> </div>
                            <!-- Конец карточки -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <!-- Карточка с card-img-bottom -->
                            <div class="card mb-3">

                                <!-- Текстовый контент -->
                                <div class="card-body">
                                    <h5 class="card-title text-left font-montserrat-alternates">г.Майкоп "Центр образования и развития личности IQ" ул.Пионерская 374</h5>
                                    <h6 class="card-subtitle text-left font-montserrat-alternates" style="font-size: 1em;">(Район гипермаркета "Магнит")</h6>
                                </div>

                                <!-- Изображение -->
                                <img class="card-img-bottom" src="/storage/images/mag3.jpg" alt="Магазин продукции"> </div>
                            <!-- Конец карточки -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <!-- Карточка с card-img-bottom -->
                            <div class="card mb-3">

                                <!-- Текстовый контент -->
                                <div class="card-body">
                                    <h5 class="card-title text-left font-montserrat-alternates">г.Краснодар "Черкесские сады" ул.Восточнокругликовская 18</h5>
                                    <h6 class="card-subtitle text-left font-montserrat-alternates" style="font-size: 1em;">(Район стадиона "Краснодар")</h6>
                                </div>

                                <!-- Изображение -->
                                <img class="card-img-bottom" src="/storage/images/mag4.jpg" alt="Магазин продукции"> </div>
                            <!-- Конец карточки -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <!-- Карточка с card-img-bottom -->
                            <div class="card mb-3">

                                <!-- Текстовый контент -->
                                <div class="card-body">
                                    <h5 class="card-title text-left font-montserrat-alternates">г.Краснодар "Черкесские сады" ул.Чекистов 4/3</h5>
                                    <h6 class="card-subtitle text-left font-montserrat-alternates" style="font-size: 1em;">(возле гипермаркета Табрис)</h6>
                                </div>

                                <!-- Изображение -->
                                <img class="card-img-bottom" src="/storage/images/mag5.jpg" alt="Магазин продукции"> </div>
                            <!-- Конец карточки -->
                        </div>


                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->



                    <!--        divider 		-->
                    <!--        <div class="d-block text-center"><img src="/storage/images/img-bee4.png" alt="Пчела" width="100px"></div>-->

                    <!-- CAROUSEL
            =========================================================================-->
                    <!--
            <div class="owl-carousel">
              <div> <img src="/storage/images/img-big-flover1.jpg" alt=""> </div>
              <div> <img src="/storage/images/img-big-bee1.jpg" alt=""> </div>
              <div> <img src="/storage/images/img-big-bee2.jpg" alt=""> </div>
            </div>
            -->

                    <br />
                </div>
                <!-- /.col-md-8 -->

@include('parts.side_menu')
</div>
</div>
</section>
@endsection
