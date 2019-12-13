<header>
    <!-- Fixed navbar -->
    
    <div class="navcontainer">
        <div class="row">
            <input type="checkbox" id="hamburg">
            <label for="hamburg" class="hamburg" id="hamburglabel">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </label>
            <nav class="topmenu">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--   <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>-->
                            <div class="nav-linkdiv">
                                <a class="nav-link home-link" href="/">Home</span></a>
                            </div>
                            <div class="nav-linkdiv" id="galerydiv">
                                    <label for="galerycheck" class="galerychecklabel">
                                    <a class="nav-link gal-link" href="/galerie/">Galerie</a>
                                        <svg height="10" width="20">
                                            <polygon id="eins" points="0,0 20,0 10,10" style="fill:white;stroke:white;stroke-width:1" />
                                        </svg>
                                    </label>
                                <div class="nav-item galeryhidden" id="galerysubnav">
                                    <div class="dropdown-content">
                                        <input type="checkbox" id="galerycheck">
                                        <ul class="subgalery">
                                            <li class="nav-item galeryoption-item">
                                                <a class="galerylink" href="/galerie/heresy-40K">Warhammer 40.000 / Horus Heresy</a>
                                            </li>
                                            <li class="nav-item galeryoption-item">
                                                <a class="galerylink" href="#">Age of Sigmar</a>
                                            </li>
                                            <li class="nav-item galeryoption-item">
                                                <a class="galerylink" href="#">Bloodbowl</a>
                                            </li>
                                            <li class="nav-item galeryoption-item">
                                                <a class="galerylink" href="#">Infinity the Game</a>
                                            </li>
                                            <li class="nav-item galeryoption-item">
                                                <a class="galerylink" href="#">Wyrd Games</a>
                                            </li>
                                            <li class="nav-item galeryoption-item">
                                                <a class="galerylink" href="#">Brettspiele</a>
                                            </li>
                                            <li class="nav-item galeryoption-item">
                                                <a class="galerylink" href="#">Andere</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-linkdiv">
                                <a class="nav-link kontak-link" href="/bemalservice">Bemalservice</a>
                            </div>
                            <div class="nav-linkdiv">
                                <a class="nav-link kontak-link" href="/bemalservice/systemauswahl">Bemalservicesystemauswahl</a>
                            </div>
                            <div class="nav-linkdiv">
                                <a class="nav-link kontak-link" href="/kontakt">Kontakt</a>
                            </div>
                        <div class="otherlinks">
                                <div class="nav-linkdiv">
                                    <a class="nav-link disabled" href="https://www.facebook.com/paintomancy/?notify_field=blurb&modal=profile_completion&notif_id=1567072868946655&notif_t=page_profile_blurb">Facebook</a>
                                </div>
                                <div class="nav-linkdiv">
                                    <a class="nav-link disabled" href="https://www.instagram.com/paintomancy/?hl=de">Instagram</a>
                                </div>
                        </div>
                        @auth
                            <a class="nav-link disabled" href="/galerie/create">Foto erstellen</a>
                        @endauth
                     <!--   @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest-->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
      