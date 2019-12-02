<header>
    <!-- Fixed navbar -->
    
    <div class="navcontainer">
        <div class="row">
            <input type="checkbox" id="hamburg">
            <label for="hamburg" class="hamburg">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </label>
            <nav class="topmenu">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <!--   <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>-->
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galerie/">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="/kontakt">Kontakt</a>
                        </li>
                        <div class="otherlinks">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="https://www.facebook.com/paintomancy/?notify_field=blurb&modal=profile_completion&notif_id=1567072868946655&notif_t=page_profile_blurb">Facebook</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="https://www.instagram.com/paintomancy/?hl=de">Instagram</a>
                            </li>
                        </div>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link disabled" href="/galerie/create">Foto erstellen</a>
                        </li>
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
      