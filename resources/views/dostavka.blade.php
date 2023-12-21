@extends('layouts.layout',['title' => 'Доставка меда из Адыгеи', 'description' => 'Заказ Адыгейского меда по интернету', 'keywords'=> 'доставка меда, уксуса медово-пергового, медово-имбирного, медово-яблочного, восковой моли, перги, пыльцы, прополиса,узвара Кужипсы, трутневого молочка'])

@section('content')
    <!-- HERO
=================================================================-->
    <section class="fire_cta fire_cta4 pos_relative" style="background: url({{asset('/storage/images/img-big-bee5.jpg')}}) 50% 40% no-repeat; background-size: cover;">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h1 class="color_ff shadowtext-sm mb-0" style="font-size: 2em;">Доставка меда и пчелопродукции</h1>
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
                    <p>После того, как вы с нами свяжетесь и укажете пункт назначения заказа, мы определим стоимость и способ доставки.</p>
                    <div class="fire_alert alert alert-success"><i class="fa fa-check-circle-o"></i><strong>Бесплатная доставка:</strong><br>
                        <ul>
                            <li>г.Майкоп</li>
                            <li>г.Белореченск</li>
                            <li>г.Краснодар</li>
                        </ul>
                        <br>
                        Оплата производится наличными средствами курьеру. </div>
                    <div class="fire_alert bg_none alert alert-success"><i class="fa fa-check-circle-o"></i><strong>В другие города:</strong><br>
                        <ul class="list-group">
                            <li class="list-group-item">при отправке "Почтой России" производится полная оплата заказа, включая стоимость пересылки;</li>
                            <li class="list-group-item">при отправке транспортной компанией стоимость пересылки оплачивается при получении.</li>
                        </ul>
                    </div>
                    <p>Оплату заказа можно будет произвести через оператора Сбербанка, через Сбербанк-онлайн, с помощью платежных терминалов на нашу карту. Реквизиты на оплату будут вам  высланы  после утверждения вашего заказа</p>
                    <div class="fire_alert alert alert-danger"><i class="fa fa-exclamation-triangle"></i><strong>Внимание!</strong><br>
                        Производите оплату только после окончательного расчета заказа,
                        так как он включает в себя стоимость товара, почтовые расходы и скидки. Сразу сообщите нам о произведённой оплате с указанием ФИО заказчика и суммы платежа. Это необходимо для более точной обработки заказа.</div>

                    <div class="fire_alert bg_none alert alert-success"><i class="fa fa-check-circle-o"></i><strong>Для самостоятельного расчета стоимости пересылки почтой воспользуйтесь ссылкой:</strong><br>
                        <ul class="list-group">
                            <a href="https://www.pochta.ru/PARCELS
" target="_blank">
                                <li class="list-group-item text-underline"><i class="fa fa-link"></i> Почта России</li>
                            </a>
                        </ul>
                    </div>

                    <div class="fire_alert bg_none alert alert-success"><i class="fa fa-check-circle-o"></i><strong>Для самостоятельного расчета стоимости посылки транспортными компаниями "Байкал-Сервис" или с помощью "ЦАП" воспользуйтесь ссылками:</strong><br>
                        <ul class="list-group">
                            <a href="http://www.baikalsr.ru/" target="_blank">
                                <li class="list-group-item text-underline"><i class="fa fa-link"></i>&nbsp;Байкал-Сервис</li>
                            </a> <a href="http://www.avtotransit.ru/" target="_blank">
                                <li class="list-group-item text-underline"><i class="fa fa-link"></i>&nbsp;ЦАП</li>
                            </a>
                        </ul>
                    </div>


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
