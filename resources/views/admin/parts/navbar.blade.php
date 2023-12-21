<header class="bg_f8f fire_header1 header_common">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/"><img src="/storage/images/logo2.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="navbar1">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item nav-link"><a href="/admin">Заказы</a></li>
                            <li class="nav-item nav-link"><a href="{{route('product.index')}}">Продукты</a></li>
                            <li class="nav-item nav-link"><a href="{{ route('navigation') }}">Навигация</a></li>
                            <li class="nav-item nav-link"><a href="{{ route('store') }}">Магазин</a></li>
                            <li class="nav-item nav-link">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выход
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>
