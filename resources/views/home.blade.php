@extends('layouts.layout',['title' => ' Мед в Майкопе купить, Мед Адыгеи Пасека Казанцева, купить мед  в Адыгее - натуральный кавказский горный мед, пчелопродукция от пчеловода', 'description' => ' Купить мед в Майкопе, Медовый оберег, Адыгейский мед от пасечника, лечебные рецепты меда, восковая моль, Адыгейский узвар Кужипсы, интересные полезные блюда, напитки, эликсиры, медовые подарки', 'keywords' => 'Медовый оберег натуральный кавказский мед, медовый квас, медовый уксус, прополис, пчелиный подмор,перга, пыльца, пугр маринованный,жир енота, козий жир, Адыгейский узвар Кужипсы, мед с орехами '])

@section('content')
    <!-- CALL TO ACTION
to change image use class 'fire_cta4'
=================================================================-->

    <section class="fire_cta fire_cta4 pos_relative">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h2 class="color_ff shadowtext-sm font-montserrat-alternates mb-0">Пасека Казанцева</h2>
                        <p class="small fw_300 font-montserrat-alternates mb-5" style="color:white; ">Натуральная продукция из Адыгеи</p>
                        <a class="purchase radius_3" style="min-width:220px" href="catalog.html">Перейти в магазин</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!--END CALL TO ACTION-->

    <!-- 4 COLUMN GREED FEATURES
    ================================================================-->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md shadow m-3 p-3 link-feature"> <a href="catalog.html">
                        <div class="text-center"><img src="/storage/images/img-bee3.png" class="img-fluid" alt="Пчела">
                            <p>Более 10 сортов мёда, для удовлетворения вкуса самых требовательных покупателей.</p>
                        </div>
                    </a> </div>
                <div class="col-md shadow m-3 p-3 link-feature"> <a href="nashi-dostijeniy.html">
                        <div class="text-center"><img src="/storage/images/img-bee2.png" class="img-fluid" alt="Продукция">
                            <p>Продукция получила широкое признание и награды на выставках в России.</p>
                        </div>
                    </a> </div>
                <div class="col-md shadow m-3 p-3 link-feature"> <a href="dokumenti.html">
                        <div class="text-center"><img src="/storage/images/medal.png" class="img-fluid" alt="Медаль">
                            <p>Документы и сертификаты, которые подтверждают качество производимой продукции.</p>
                        </div>
                    </a> </div>
                <div class="col-md shadow m-3 p-3 link-feature"> <a href="dostavka.html">
                        <div class="text-center"><img src="/storage/images/delivery.png" class="img-fluid" alt="Медаль">
                            <p>Есть бесплатная доставка, а также доставка транспортной компанией, Почта России, самовывоз.</p>
                        </div>
                    </a> </div>
            </div>
        </div>
    </section>
    <!-- MAIN CONTENT
    ================================================================-->
    <section id="main-content" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center font-montserrat-alternates">Приветствую любителей меда и продуктов пчеловодства</h2>
                    <div class="img-fluid img-thumbnail float-left mr-4 border-0 d-block text-center w-100" > <img src="{{asset('/storage/images/lable-2.png')}}" alt="Товарный знак" width="300px"/>
                        <h4 class="text-center font-montserrat-alternates">Логотип продукции</h4>
                    </div>
                    <p>Представляю вам натуральную, полезную пчелопродукцию и необычные блюда собственного производства из кулинарного опыта моих близких.</p>
                    <p>Постараюсь довести до пытливого ума читателя, не безразличного к своему здоровью, интересную информацию, связанную с представленными здесь продуктами пчеловодства. </p>
                    <p>Ведь еще в древнейшем памятнике индийской медицины Аюр Веда (Книга жизни) и в законах Ману сказано: продлить человеческую жизнь до 500 лет и более можно при помощи эликсиров и диеты, в состав которых входит мед и молоко.</p>
                    <p>Так что будем стремиться вести здоровый образ жизни, неотъемлемой частью которого является употребление в пищу меда и пчелопродукции. </p>
                     </div>
                    <h4 class="text-center font-montserrat-alternates">Читайте наши самые свежие новости в социальных сетях. Подписывайтесь и будете в курсе событий.</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS
    ==================================================================-->
    <section class="fire_testimonial fire_testimonial4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2 class="text-center font-montserrat-alternates mb-3">Отзывы о продукции</h2>
                    <div class="testimonial_wrapper clearfix">
                        <div class="single_testimonial">
                            <div class="author align_row_left_top">
                                <div class="author_img pos_relative"><img alt="author img" src="/storage/images/author-img1.jpg"></div>
                                <div class="author_info pl_15">
                                    <p class="color_66 fw_300 pb_10">Потрясающий продукт, заказываю у этого производителя уже не первый год. Просматрела много сайтов, остановилась на этом. </p>
                                    <a href="#" class="fw_500">Наталья К.</a>
                                </div>
                            </div>
                        </div>

                        <div class="single_testimonial">
                            <div class="author align_row_left_top">
                                <div class="author_img pos_relative"><img alt="author img" src="/storage/images/author-img2.jpg"></div>
                                <div class="author_info pl_15">
                                    <p class="color_66 fw_300 pb_10">Первый раз начал целеноправленно покупать мёд, когда почувствовал, что стал улучшаться иммунитет. Раньше в сезон простуд болел по два раза, сейчас уже забыл, когда болел. </p>
                                    <a href="#" class="fw_500">Николай Л.</a>
                                </div>
                            </div>
                        </div>

                        <div class="single_testimonial">
                            <div class="author align_row_left_top">
                                <div class="author_img pos_relative"><img alt="author img" src="/storage/images/author-img3.jpg"></div>
                                <div class="author_info pl_15">
                                    <p class="color_66 fw_300 pb_10">Использую мед для приготовления потрясающих блюд. Вся семья в восторге. Кроме того, это еще и полезно.</p>
                                    <a href="#" class="fw_500">Ксения Д.</a>
                                </div>
                            </div>
                        </div>

                        <div class="single_testimonial">
                            <div class="author align_row_left_top">
                                <div class="author_img pos_relative"><img alt="author img" src="/storage/images/author-img4.jpg"></div>
                                <div class="author_info pl_15">
                                    <p class="color_66 fw_300 pb_10">Наткнулся случайно на этот сайт. Заказал и был удивлен быстрой доставкой, живу в Краснодаре.</p>
                                    <a href="#" class="fw_500">Евгений Ф.</a>
                                </div>
                            </div>
                        </div>
                        <!--/single testimonial-->
                    </div>
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- ABOUT
    ==================================================================-->
    <section id="about" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-montserrat-alternates text-center">Коротко о себе</h2>
                    <!-- IMAGE OF OWNER-->
                            <div class="img-fluid float-right img-thumbnail ml-4 border-0 d-block w-100 text-center"> <img src="/storage/images/owner.jpg" alt="Александр Казанцев"  >
                              <h4 class="text-center font-montserrat-alternates">Александр Казанцев</h4>
                            </div>

                    <p> Основательно занимаюсь пчеловодством с 2012 года. В моем пчелохозяйстве более пятидесяти семей на передвижном прицепе. Каждый год в начале медосбора крылатые труженицы под моим чутким контролем собирают нектар с благоухающих акаций на Кубанских равнинах. Затем пасека кочует по живописным горным районам Северного Кавказа, давая возможность насладиться ни с чем несравнимым вкусом колоритных горных медов, а на зимовье пчел перевожу в предгорье Адыгеи, богатое поздними медоносами, для создания кормового запаса им на зиму. </p>

                    <p> Теперь дело за мной. Откаченным медам необходимо создать условия для правильного хранения и дальнейшей реализации. Часть меда будет задействована в производстве медово-пергового уксуса, медового напитка и других продуктов, представленных вашему вниманию. Другая часть пойдет на реализацию. Ежегодно участвую во всероссийских ярмарках, изучаю спрос и пожелания любителей медовой продукции. Благодаря этому пытаюсь расширить ассортимент и порадовать вкус самого взыскательного покупателя. В этом мне помогают мои близкие.
                        Предлагаю Вам приобрести производимую нами продукцию и оценить ее качество. </p>
                    <hr>
                    <div class="text-right">С уважением,<br> Казанцев Александр</div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    @endsection
