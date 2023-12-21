<style>
    table{
        border: 1px solid black;
    }
    table tr td {
        padding: 4px
    ;
        border: 1px solid black;
    }
</style>

<h1>Заказ с сайта MEDOVIYOBEREG.RU</h1>
<hr>
<ul>
    <li style="font-size: 20px">Имя: {{ $name }}</li>
    <li style="font-size: 20px">Телефон: {{ $phone }}</li>
    <li style="font-size: 20px">Город: {{ $city }}</li>
</ul>
<hr>
<table>
    <thead>
        <th>Название</th>
        <th>Кол.</th>
        <th>Вес</th>
        <th>Цена</th>
        <th>Итого</th>

    </thead>
    @foreach($order as $item)
    <tr>
        <td>{{$item['product_name']}}</td>
        <td>{{$item['qwt']}}</td>
        <td>{{$item['quantity']}}{{$item['measure']}}</td>
        <td>{{$item['price']}} руб.</td>
        <td>{{$item['total']}} руб.</td>
    </tr>
        @endforeach
</table>
<hr>
