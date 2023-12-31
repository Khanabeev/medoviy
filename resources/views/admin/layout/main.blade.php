<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/navbar.css')}}">

    <title>Admin Dashboard</title>
</head>
<body>
<div id="app">
    <div class="container mb-5">

        @include('admin.parts.navbar')
        @yield('content')
    </div>

</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
