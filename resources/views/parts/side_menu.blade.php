<div class="col-md-4">
    <h3 class="font-montserrat-alternates text-center">Меню</h3>
    <ul class="aside-menu mb-3 shadow p-3">
        <li><a class="aside-link" href="catalog.html">Интернет-магазин</a></li>
        <li><a class="aside-link" href="nashi-dostijeniy.html">Наши достижения</a></li>
        <li><a class="aside-link" href="narodnie-resepti.html">Народные рецепты</a></li>
        <li><a class="aside-link" href="dokumenti.html">Документы</a></li>
{{--        <li><a class="aside-link" href="praiys.html">Цены (таблица)</a></li>--}}       
	<li><a class="aside-link" href="dostavka.html">Доставка</a></li>
    </ul>
    <h3 class="font-montserrat-alternates text-center">Продукция</h3>
    {{--МЕД--}}
    <ul class="aside-menu mb-3 shadow p-3">
        <li><a class="aside-link" href="med.html">Общие характеристики</a></li>
        @foreach(\App\Navigation::orderBy('order')->get() as $item)
            @if($item->product->type == 'honey')
                <li><a class="aside-link" href="{{$item->product->url}}">{{$item['name']}}</a></li>
            @endif
        @endforeach


        {{--Продукция--}}
         <li class="dropdown-divider"></li>
        @foreach(\App\Navigation::orderBy('order')->get() as $item)
            @if($item->product->type == 'product')
                <li><a class="aside-link" href="{{$item->product->url}}">{{$item['name']}}</a></li>
            @endif
        @endforeach
    </ul>
</div>
{{--/col-md-4--}}
