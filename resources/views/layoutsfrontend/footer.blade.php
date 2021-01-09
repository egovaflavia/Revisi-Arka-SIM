<footer class="green page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <img class="responsive-img white" src="{{ asset('./frontend/assets/logo.png') }}">
                <h5 class="white-text">Arka Trans Psikologi Padang</h5>
                <p class="grey-text text-lighten-4">
                    Layanan Contact Center Manajemen Pelaksana Program SIM Online Arka</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Navigation</h5>
                <ul>
                    @guest
                    <li><a class="grey-text text-lighten-3" href="{{ route('profil') }}">Tentang Kami</a></li>
                    <li><a class="grey-text text-lighten-3" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                    <li><a class="grey-text text-lighten-3" href="{{ route('register') }}">Daftar</a></li>
                    @endif

                    @else
                    @if(auth()->user()->status > 0 )
                    <li><a class="grey-text text-lighten-3" href="{{ route('ujian') }}">Ujian SIM Online</a></li>
                    @else
                    <li><a class="grey-text text-lighten-3" href="{{ route('pay') }}" style="color: #F50057;">Mohon Lakukan Pembayaran</a></li>
                    @endif
                    <li><a class="grey-text text-lighten-3" href="{{ route('profil') }}">Tentang Kami</a></li>
                    <li><a class="grey-text text-lighten-3" href="">{{ Auth::user()->name }}</a></li>

                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2020 Copyright <a class="credit" href="">Mediatama Web Indonesia</a> by <a class="credit" href="">Egova</a>
            <a class="grey-text text-lighten-4 right" href="#!">Made with Materialize</a>
        </div>
    </div>
</footer>
