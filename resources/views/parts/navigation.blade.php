<!-- HEADER
==========================================================-->

<header class="bg_f8f fire_header5 header_common myborder-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand order-1 order-lg-1" href="/"><img src="/storage/images/logo2.png" alt="logo"></a>
                    <button class="navbar-toggler order-3" type="button" data-toggle="collapse" data-target="#navbar5" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse order-4 order-lg-2" id="navbar5">
                        <ul class="navbar-nav">
                            <li class="active"><a href="/">Главная</a></li>
                            <li class="active text-underline"><a href="/catalog.html">Магазин</a></li>
                            <li class="dropdown"><a href="javascript:void(0)">Мед <i class="fa fa-angle-down"></i></a>
                                <ul class="custom_dropdown">
                                    @foreach(\App\Navigation::orderBy('order')->get() as $item)
                                        @if($item->product->type == 'honey')
                                        <li><a class="dropdown-item" href="{{$item->product->url}}">{{$item['name']}}</a></li>
                                        @endif
                                            @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)">Продукты <i class="fa fa-angle-down"></i></a>
                                <ul class="custom_dropdown">
                                    @foreach(\App\Navigation::orderBy('order')->get() as $item)
                                        @if($item->product->type == 'product')
                                            <li><a class="dropdown-item" href="{{$item->product->url}}">{{$item['name']}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="/kontakti.html">Контакты</a></li>
                        </ul>
                    </div>
                    <ul class="call order-2 order-lg-3">
                        <li><a href="tel:+79284619163"><i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;+7&nbsp;(928)&nbsp;461-91-63</a></li>
                    </ul>
                    {{--Ссылки на соцсети--}}
                    <ul class="social_contact d_inline pos_relative order-2 order-lg-3 pl-3">
		       {{-- <li class="pl-2"><a href="https://www.instagram.com/med_adygei/"><i class="fa fa-instagram fa-2x"></i></a></li>--}}
		       {{-- <li class="pl-2"><a href="https://www.facebook.com/profile.php?id=100022880890434"><i class="fa fa-facebook-official fa-2x"></i></a></li> --}}
		        <li class="pl-2"><a href="https://vk.com/med_adygei"><i class="fa fa-vk fa-2x"></i></a></li>
                        <li class="pl-2"><a href="https://ok.ru/profile/575016277661"><i class="fa fa-odnoklassniki fa-2x"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
