<section>
    <nav>
        <div class="nav-wrapper container">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <a href="{{ route('/') }}" class="brand-logo"><img class="responsive-img" width="130" src="{{ asset('./frontend/assets/logo.png') }}"></a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <!-- Authentication Links -->
                    <li><a href="{{ route('home') }}">Home</a></li>
                    @guest
                    <li><a href="{{ route('profil') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Daftar</a></li>
                    @endif
                    @else
                    @if(DB::table('data_user')->where('user_id', auth()->user()->id)->first() == null)
                    <li><a href="{{ route('akun', encrypt(auth()->user()->id)) }}" style="color: #F50057;">Mohon isi data diri Anda</a></li>
                    @else
                    @if(auth()->user()->status > 1 )
                    <li><a href="{{ route('ujian') }}">Ujian SIM Online</a></li>
                    @else
                    <li li><a href="{{ route('pay') }}" style="color: #F50057;">Mohon Lakukan Pembayaran</a></li>
                    @endif
                    @endif

                    <li><a href="{{ route('profil') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('akun', encrypt(auth()->user()->id)) }}">{{ Auth::user()->name }}</a></li>

                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </ul>
        </div>
    </nav>

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="container">
                    <img class="responsive-img" src="{{ asset('./frontend/assets/logo.png') }}">
                </div>
            </div>
        </li>
        <!-- Authentication Links -->
        <li><a href="{{ route('home') }}">Home</a></li>
        @guest
        <li><a href="{{ route('profil') }}">Tentang Kami</a></li>
        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}">Daftar</a></li>
        @endif

        @else
        @if(auth()->user()->status > 0 )
        <li><a href="{{ route('ujian') }}">Ujian SIM Online</a></li>
        @else
        <li><a href="{{ route('pay') }}" style="color: #F50057;">Mohon Lakukan Pembayaran</a></li>
        @endif
        <li><a href="{{ route('profil') }}">Tentang Kami</a></li>
        <li><a href="#">{{ Auth::user()->name }}</a></li>

        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </li>
        @endguest
    </ul>
</section>
