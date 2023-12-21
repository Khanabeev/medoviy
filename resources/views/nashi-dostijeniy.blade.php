@extends('layouts.layout',['title' => 'Наши достижения', 'description' => 'наши успехи на ярмарках', 'keywords'=> 'Награды и грамоты на всесоюзных выставках'])

@section('content')

    <!-- HERO
=================================================================-->
    <section class="fire_cta fire_cta4 pos_relative" style="background: url({{asset('/storage/images/img-big-mountain.jpg')}}) 50% 50% no-repeat; background-size: cover;">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h1 class="color_ff shadowtext-sm mb-0" style="font-size: 2em;">Наши достижения</h1>
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
                        <h2 class="text-center mt-3 mb-3">Грамоты участника Всероссийских сельхозярмарок</h2>
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom8.jpg" data-fancybox="gallery"><img src="/storage/images/diplom8.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom7.jpg" data-fancybox="gallery"><img src="/storage/images/diplom7.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom6.jpg" data-fancybox="gallery"><img src="/storage/images/diplom6.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom5.jpg" data-fancybox="gallery"><img src="/storage/images/diplom5.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom4.jpg" data-fancybox="gallery"><img src="/storage/images/diplom4.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom3.jpg" data-fancybox="gallery"><img src="/storage/images/diplom3.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom2.jpg" data-fancybox="gallery"><img src="/storage/images/diplom2.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->
                        <div class="col-md-4 col-sm-6 thumb"><a href="/storage/images/diplom1.jpg" data-fancybox="gallery"><img src="/storage/images/diplom1.jpg" alt="" class="img-fluid"></a></div>
                        <!-- /.col-md-4 thumb -->


                    </div>
                    <!-- /.row -->
                    <!--		/.end FANCYBOX GALLERY-->




                    <!--        divider 		-->
                    <!--        <div class="d-block text-center"><img src="/storage/images/img-bee4.png" alt="Пчела" width="100px"></div>-->

                    <!--        divider 		-->
                    <!--        <div class="d-block text-center"><img src="/storage/images/img-bee1.png" alt="Пчела" width="100px"></div>-->

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
