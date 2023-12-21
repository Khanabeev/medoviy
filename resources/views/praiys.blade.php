@extends('layouts.layout',['title' => 'прайс натуральных медов', 'description' => 'прайс кавказский мед и продукты пчеловодства', 'keywords'=> 'цены на мед и пчелопродукцию'])

@section('content')
    <!-- HERO
header image here (change style background in code)
=================================================================-->
    <section class="fire_cta fire_cta4 pos_relative" style="background: url({{asset('/storage/images/img-big-honey.jpg')}}) 50% 50% no-repeat; background-size: cover;">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h1 class="color_ff shadowtext-sm mb-0" style="font-size: 2em;">Цены на медовую продукцию</h1>
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
                <div class="col-md-8 text-left">

                    <div class="table-responsive-sm table-striped table-hover table-bordered">
                        <table class="table" id="myPrice">
                            <thead>
                            <tr>
                                <th colspan="4" class="text-center font-montserrat-alternates">Наши товары</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Акациевый мед</td>
                                <td>0.5кг/250р</td>
                                <td>0.8кг/400р</td>
                                <td>1.4кг/700р</td>
                            </tr>
                            <tr>
                                <td>Боярышниковый мед</td>
                                <td>0.5кг/300р </td>
                                <td>0.8кг/480р</td>
                                <td>1.4кг/840р</td>
                            </tr>

                            <tr>
                                <td>Плющевый мед</td>
                                <td>0.5кг/410р</td>
                                <td>0.8кг/650р</td>
                                <td>1.4кг/1100р</td>
                            </tr>
                            <tr>
                                <td>Донниковый мед</td>
                                <td>0.5кг/230р</td>
                                <td>0.8кг/360р</td>
                                <td>1.4кг/630р</td>
                            </tr>
                            <tr>
                                <td>Горный мед</td>
                                <td>0.5кг/350р</td>
                                <td>0.8кг/560р</td>
                                <td>1.4кг/950р</td>
                            </tr>
                            <tr>
                                <td>Гречишный мед</td>
                                <td>0.5кг/260р</td>
                                <td>0.8кг/410р</td>
                                <td>1.4кг/700р</td>
                            </tr>
                            <tr>
                                <td>Каштановый мед </td>
                                <td>0.5кг/500р</td>
                                <td>0.8кг/800р</td>
                                <td>1.4кг/1400р</td>
                            </tr>
                            <tr>
                                <td>Рапсовый мед</td>
                                <td>0.5кг/250р</td>
                                <td>0.8кг/400р</td>
                                <td>1.4кг/700р</td>
                            </tr>

                            <tr>
                                <td>Кориандровый мед</td>
                                <td>0.5кг/220р</td>
                                <td>0.8кг/350р</td>
                                <td>1.4кг/600р</td>
                            </tr>
                            <tr>
                                <td>Липовый мед</td>
                                <td>0.5кг/280р</td>
                                <td>0.8кг/440р</td>
                                <td>1.4кг/770р</td>
                            </tr>
                            <tr>
                                <td>Майский мед</td>
                                <td>0.5кг/250р</td>
                                <td>0.8кг/400р</td>
                                <td>1.4кг/700р</td>
                            </tr>
                            <tr>
                                <td>Подсолнечниковый мед</td>
                                <td>0.5кг/170р</td>
                                <td>0.8кг/280р</td>
                                <td>1.4кг/490р</td>
                            </tr>
                            <tr>
                                <td>Мед с прополисом</td>
                                <td>0.5кг/350р</td>
                                <td>0.8кг/560р</td>
                                <td>1.4кг/980р</td>
                            </tr>
                            <tr>
                                <td>Мед с пергой</td>
                                <td>0.5кг/500р</td>
                                <td>0.8кг/800р</td>
                                <td>1.4кг/1400р</td>
                            </tr>
                             <tr>
                                <td>Мед с орехами</td>
                                <td>0.25кг/250р с фундуком</td>
                                <td>0.25кг/250р с грецким</td>
                                <td>0.25кг/250р ореховое ассорти</td>
                            </tr>
                            <tr>
                                <td> Мед с ореховым ассорти VIP(кедровый орех, миндаль, кешью, фундук)</td>
                                <td colspan="3">0.25кг/300р </td>
                            </tr>
                            <tr>
                                <td>Мед в сотах (разнотравие)</td>
                                <td>1кг/400р</td>
                                <td colspan="2">рамка 4.2-4.5 кг/1500-1700р</td>
                            </tr>
                            <tr>
                                <td>Мед в сотах (акация)</td>
                                <td>1кг/500р</td>
                                <td colspan="2">рамка 4.2-4.5 кг/2000-2200р</td>
                            </tr>

                            <tr>
                                <td>Перга в сотах</td>
                                <td colspan="3">100гр/250р</td>
                            </tr>
                            <tr>
                                <td>Перга в гранулах</td>
                                <td colspan="3">100гр/350р</td>
                            </tr>

                            <tr>
                                <td>Пыльца</td>
                                <td colspan="3">100гр/150р</td>
                            </tr>
                            <tr>
                                <td>Уксус медово-перговый светлый(для похудения)</td>
                                <td>1&nbsp;фл.250мл/80р</td>
                                <td colspan="2">от 10 фл./60р </td>
                            </tr>
                            <tr>
                                <td>Уксус медово-перговый особый темный (для похудения)</td>
                                <td>1&nbsp;фл.250мл/90р</td>
                                <td colspan="2">от 10 фл./70р</td>
                            </tr>
                            <tr>
                                <td>Уксус медово-перговый с имбирем (для похудения)</td>
                                <td>1&nbsp;фл.250мл/90р</td>
                                <td colspan="2">от 10 фл./70р </td>
                            </tr>
                            <tr>
                                <td>Уксус медово-перговый с яблоками (для похудения)</td>
                                <td>1&nbsp;фл.250мл/90р</td>
                                <td colspan="2">от 10 фл./70р </td>
                            </tr>
                            <tr>
                                <td>Медовый напиток "Монастырский"</td>
                                <td>1&nbsp;бут.1л/250р</td>
                                <td colspan="2">от 10 бут./200р</td>

                            </tr>
                            <tr>
                                <td>Восковая моль</td>
                                <td>1&nbsp;фл.50мл/350р</td>
                                <td>от 2 до 10 фл./по 325р</td>
                                <td>от 10 фл./по 300р</td>
                            </tr>
                             <tr>
                                <td>Трутневое молочко</td>
                                <td>1 фл 100 мл./200р</td>
                                <td colspan="2">от 10 фл/150р</td>
                            </tr>
                            <tr>
                                <td>Енота жир</td>
                                <td>100гр/220р</td>
                                <td colspan="2">500гр/1000р</td>
                            </tr>
                            <tr>
                                <td>Козий жир</td>
                                <td>100гр/200р</td>
                                <td colspan="2">500гр/900р</td>
                            </tr>
                            <tr>
                                <td>Пугр (черешки лопуха марин.)</td>
                                <td colspan="3">банка стек. масса нетто 670гр/300р</td>
                            </tr>
                            <tr>
                                <td>Подмор пчел</td>
                                <td colspan="3">1бол.стакан 200 мл/200р</td>

                            </tr>
                            <tr>
                                <td>Прополис</td>
                                <td colspan="3">10гр/60р</td>

                            </tr>
                            <tr>
                                <td>Воск пчелиный</td>
                                <td colspan="3">100гр/50р</td>
                            </tr>
                            <tr>
                                <td>Крем-мазь "Золотая пчела"</td>
                                <td colspan="3">30гр/100р</td>
                            </tr>
                            <tr>
                                <td>Крем-бальзам "Волшебная пчела"</td>
                                <td colspan="3">30гр/150р</td>

                            </tr>
                            <tr>
                                <td>Адыгейский узвар Кужипсы</td>
                                <td>1 банка/150р</td>
                                <td colspan="2">от 10 банок/100р</td>
                            </tr>
                            <tr>
                                <td>Адыгейский узвар Кужипсы с медом</td>
                                <td>1 банка/170р</td>
                                <td colspan="2">от 10 банок/110р</td>
                            </tr>
                            <tr>
                                <td>Адыгейский узвар Кужипсы с черникой</td>
                                <td>1 банка/190р</td>
                                <td colspan="2">от 10 банок/130р</td>
                            </tr>
                            <tr>
                                <td>Адыгейский узвар Кужипсы с пыльцой</td>
                                <td>1 банка/190р</td>
                                <td colspan="2">от 10 банок/130р</td>
                            </tr>
                            <tr>
                                <td>Адыгейский узвар Кужипсы с имбирем</td>
                                <td>1 банка/180р</td>
                                <td colspan="2">от 10 банок/120р</td>
                             <tr>
                            <tr>
                                 <td>Адыгейский узвар Кужипсы с орехами</td>
                                <td>1 банка/190р</td>
                                <td colspan="2">от 10 банок/130р</td>
                            </tr>
                            </tr>

                                  </tbody>
                        </table>
                        <!-- /.table-->
                    </div>
                    <!-- /.table_style2 -->

                    <h2 class="text-center">Для оптовых покупателей цены договорные!</h2>



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
