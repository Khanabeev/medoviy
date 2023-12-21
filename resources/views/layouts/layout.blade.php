<!doctype html>
<html lang="ru">
<head>
    <!--	We use http://fire.uxtheme.net/ -->
    <!--meta:utf-->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <!--meta:vp-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="Description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('/storage/images/favicon.png')}}" type="image/png">

    <meta property="og:title" content="{{$title}}"/>
    <meta property="og:description" content="{{$description}}"/>
    <meta property="og:image" content="http://medoviyobereg.ru/storage/images/lable.jpg">
    <title>{{$title}}</title>
    <!--google font-->
    <!--

    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700&amp;subset=cyrillic" rel="stylesheet">
    -->

    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- global style css -->
    <link rel="stylesheet" href="{{asset('css/global-style.css')}}">

    <!-- custom css	-->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">

    <!-- testimonial css-->
    <link rel="stylesheet" href="{{asset('css/assets/testimonial.css')}}">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{--Yandex Verification--}}
    <meta name="yandex-verification" content="39d4eca5ab8edcb1" />
@yield('style')
</head>
<body>

@include('parts.yandex_metrika')

@include('parts.navigation')

@yield('content')

@include('parts.footer')

@yield('script')

<!--MODAL
===================================================-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-envelope"></i> Оставьте заявку</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <p class=".statusMsg">Оставьте ваши контактные данные и мы свяжемся с Вами, как только полчим заявку.</p>
            </div>


            <form method="post" action="order.php" class="form container" role="form" id="form">
                <div class="form-group">
                    <label class="sr-only" for="inputName"> Ваше имя</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Ваше имя">
                </div>
                <!--form-group-->
                <div class="form-group">
                    <label class="sr-only" for="inputPhone"> Ваш телефон</label>
                    <input type="tel" id="inputPhone" class="form-control" placeholder="Ваш телефон">
                </div>
                <!--form-group-->

                <input type="submit" class="btn btn-danger p-2" value="Отправить">
            </form>


            <div class="modal-footer"> <a href="tel:+79284619164"><i class="fa fa-whatsapp fa-lg"></i>&nbsp;&nbsp;+7&nbsp;(928)&nbsp;461-91-63</a>
                <!--
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
        -->
            </div>
        </div>
    </div>
</div>

<!-- jQuary library -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<!--bootstrap js-->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- API RECAPCHA FROM GOOGLE-->
<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->

<!-- all jQuary activation code here and always it will be bottom of all script tag -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script>
    $(document).ready(function() {

        $('body').append('<div class="button-up" style="display: none;opacity: 0.7;width: 50px;height:13%;position: fixed;left: 0px;top: 0px;cursor: pointer;text-align: center;line-height: 100px;color: #45688E;"><i class="fa fa-arrow-circle-o-up fa-2x"></i></div>');

        $ (window).scroll (function () {
            if ($ (this).scrollTop () > 300) {
                $ ('.button-up').fadeIn();
            } else {
                $ ('.button-up').fadeOut();
            }
        });

        $('.button-up').click(function(){
            $('body,html').animate({
                scrollTop: 0
            }, 100);
            return false;
        });

        $('.button-up').hover(function() {
            $(this).animate({
                'opacity':'0.3',
            }).css({'background-color':'#E1E7ED','color':'#45688E'});
        }, function(){
            $(this).animate({
                'opacity':'0.7'
            }).css({'background':'none','color':'#45688E'});;
        });

    });
</script>
</body>
</html>
