<header class="site-header | focus-links" role="banner">

    <!-- Logo -->
    <site_menu class="site-header__menu">
        <!-- Logo -->
        <template slot="logo">
            <div class="logo-box">
                <img class="logo" src="{{asset('./assets/logo.png')}}" alt="">
                <div class="textElat">La Flamme de l'Espoir</div>
            </div>
        </template>

        <!-- Menu Bar -->
        <template slot="menu">
            <ul class="menu-bar" role="menubar">
                <li class="menu-bar__item">
                    <a role="menuitem" aria-haspopup="false" href="/" class="menu-bar__link"
                       tabindex="0">Accueil</a>
                </li>
                <li class="menu-bar__item">
                    <a role="menuitem" aria-haspopup="false" href="{{route('blog')}}" class="menu-bar__link"
                       tabindex="0">Blog</a>
                </li>

                <li class="menu-bar__item">
                    <a role="menuitem" aria-haspopup="false" href="{{route('about')}}" class="menu-bar__link"
                       tabindex="0">A propos</a>
                </li>

                <li class="menu-bar__item">
                    <a role="menuitem" aria-haspopup="false" href="{{route('contact')}}" class="menu-bar__link "
                       tabindex="0">Contact</a>
                </li>
{{--                @auth()--}}
{{--                    <li class="menu-bar__item">--}}
{{--                        <a role="menuitem" aria-haspopup="false" onclick="event.preventDefault();--}}
{{--                                                 document.getElementById('logout-form').submit();" class="menu-bar__link connexion " tabindex="0"--}}
{{--                           href="{{route('logout')}}">Deconnexion</a>--}}
{{--                    </li>--}}
{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--                          style="display: none;">--}}
{{--                        {{ csrf_field() }}--}}
{{--                @else--}}
{{--                    <li class="menu-bar__item">--}}
{{--                        <a role="menuitem" aria-haspopup="false" class="menu-bar__link connexion " tabindex="0"--}}
{{--                           href="{{route('login')}}">Connexion</a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-bar__item">--}}
{{--                        <a role="menuitem" aria-haspopup="false" class="menu-bar__link tiliban" tabindex="0"--}}
{{--                           href="{{route('register')}}">S'inscrire</a>--}}
{{--                    </li>--}}
{{--                @endauth--}}
            </ul>
        </template>

    </site_menu>
</header>
