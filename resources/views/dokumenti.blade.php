@extends('layouts.layout',['title' => 'Документы на мед', 'description' => 'Ветеринарное свидетельство,паспорт пасеки', 'keywords'=> 'Лабораторный анализ меда'])

@section('content')
    <!-- HERO
=================================================================-->
    <section class="fire_cta fire_cta4 pos_relative" style="background: url({{asset('/storage/images/img-big-bee2.jpg')}}) 50% 30% no-repeat; background-size: cover;">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h1 class="color_ff shadowtext-sm mb-0" style="font-size: 2em;">Документы на пасеку и пчелопродукцию </h1>
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



                    <!--		 FANCYBOX GALLERY
            ------------------------------------>
                    <div class="row text-center">
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/sertifikat.jpg" data-fancybox="gallery"><span>Сертификат соответствия</span><img src="/storage/images/sertifikat.jpg" alt="" class="img-fluid align-bottom"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/spravka1.jpg" data-fancybox="gallery"><span>Вет. свидетельство</span><img src="/storage/images/spravka1.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/spravka2.jpg" data-fancybox="gallery"><span>Протокол испытаний</span><img src="/storage/images/spravka2.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/spravka3.jpg" data-fancybox="gallery"><span>Вет. свидетельство</span><img src="/storage/images/spravka3.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-6 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/spravka4.jpg" data-fancybox="gallery"><span>Ветеринарный паспорт</span><img src="/storage/images/spravka4.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-6 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/spravka5.jpg" data-fancybox="gallery"><span>Ветеринарный паспорт</span><img src="/storage/images/spravka5.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-6 thumb -->
                    </div>
                    <!-- /.row -->
                    <!--		/.end FANCYBOX GALLERY-->



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
