<header>
    <div class="header-container">
        <div class="drop">
            <button class="burger-btn">&#9776</button>
            <div class="menu-list">
                <ul>
                @if(!session()->has('name'))
                    <li>
                        <a href="{{ route('regForm') }}">Регистрация</a>
                    </li>
                    <li>
                        <a href="{{ route('logForm') }}">Вход</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('profile.index') }}">Профиль</a>
                    </li>
                    <li>
                        <a href="{{ route('cart.index') }}">Корзина</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('main')}}">Главная</a>
                    </li>
                    <li>
                        <a href="#">Форум</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="left-panel">
            <a href="{{ route('main')}}">Главная</a>
            <a href="#">Форум</a>
            <a href="#">О нас</a>
            <a href="{{ route('product.home')}}">Товар</a>
        </div>
        <div class="right-panel">
            @if(!session()->has('name'))
            <a href="{{ route('regForm') }}">Регистрация</a>
            <a href="{{ route('logForm') }}">Войти</a>
            @else
            <a href="{{ route('cart.index') }}">Корзина</a>
            <a href="{{ route('profile.index') }}">Профиль</a>
            @endif
        </div>
    </div>
</header>