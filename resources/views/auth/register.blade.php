@extends('layoutsfrontend.app')

@section('content')

<style>
    html,
    body {
        height: 100%;
    }

    html {
        display: table;
        margin: auto;
    }

    body {
        display: table-cell;
        vertical-align: middle;
    }

    *,
    a {
        font-family: 'Quicksand', sans-serif;
    }
</style>



<!-- Form Section -->

<div class="center-align">
    <div class="row">
        <center>
            <img class="responsive-img" style="width: 250px;" src="{{ asset('./frontend/assets/logo.png') }}" />
        </center>
    </div>
    <div class="section"></div>

    <div class="container" style="margin-bottom: 100px;">
        <p>Silahkan login, jika Anda lupa password bisa hubungi Admin klik <a href="">disini</a> </p>
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <a href="{{ route('login') }}" class="btn green darken-1">Sudah Punya Akun ?</a>
            <div class="col s12 "> <br></div>
            <a href="{{ route('home') }}" class="btn green darken-1">Kembali</a>
            <form class="col s12 m12" action="{{ route('register') }}" method="post">
                @csrf
                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif

                        <label for='name'>Nama</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                        <label for='email'>Email</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif

                        <label for='password'>Password</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label for='password'>Ulangi Password</label>
                    </div>
                </div>

                <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='btn green darken-1'><b>Daftar</b></button>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
@endsection
