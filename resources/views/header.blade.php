<div class="wrapper col1">
    <div id="head">
        <h1><a href="{{ route('index') }}">My Company</a></h1>
        <p>Краща дизайн студія в Києві</p>
        <div id="topnav">
            <ul>
                <li><a href="{{ route('index') }}">Головна сторінка</a></li>
                <li><a href="{{ route('about') }}">Про компанію</a></li>
                <li><a href="{{ route('blog') }}">Блог</a></li>
                <li><a href="{{ route('blog') }}">Наші проєкти</a>
                    <ul>
                        <li><a href='{{ asset('room.html') }}'>Link 1</a></li>
                        <li><a href='{{ asset('house.html') }}'>Link 2</a></li>
                        <li><a href='{{ asset('outside.html') }}'>Link 3</a></li>
                    </ul>
                </li>
                <li class="last"><a href='{{ asset('contact.html') }}'>Контакти</a></li>
            </ul>
        </div>
        <div id="search">
                <fieldset>
                    @guest
                        @if (Route::has('register'))
                                <a type="button" class="btn btn-primary" href="{{ route('registration') }}">Реєстрація</a>
                        @endif
                            <a type="button" class="btn btn-primary" href="{{ route('entry') }}">Вхід</a>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="btn btn-primary" href="{{ route('index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" style="color: #0a0e14!important"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Вихід
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </fieldset>
        </div>
    </div>
</div>
