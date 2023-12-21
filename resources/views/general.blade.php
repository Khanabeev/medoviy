@extends('layouts.layout',[
    'title' => $product->title,
    'description' => $product->description,
    'keywords'=>$product->keywords
    ])

@section('content')
    <!-- HERO
=================================================================-->
    <section class="fire_cta fire_cta4 pos_relative" style="background: url('storage/{{$product->image}}') {{$product->image_position}} no-repeat; background-size: cover;">
        <div class="overlay opacity3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta_content text-center">
                        <h1 class="color_ff shadowtext-sm mb-0" style="font-size: 2em;">{{$product->name}}</h1>
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
                    {!! $product->content !!}
                    <a class="btn btn-success" href="/catalog.html">В магазин</a>
                </div>
                <!-- /.col-md-8 -->
                @include('parts.side_menu')
            </div>
        </div>
    </section>



@endsection
