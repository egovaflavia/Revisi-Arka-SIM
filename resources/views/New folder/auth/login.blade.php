@extends('layouts.app')

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
            <a href="{{ route('register')  }}" class="btn green darken-1">Belum Punya Akun ?</a>
            <div class="col s12 "> <br></div>
            <a href="{{ route('home') }}" class="btn green darken-1">Kembali</a>
            <form class="col s12 m12" action="{{ route('login') }}" method="post">
                @csrf
                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s12'>

                        <input class='validate @error(' email') is-invalid @enderror' type='email' value="{{ old('email') }}" name='email' id='email' required autocomplete="email" autofocus />
                        <label for='email'>Masukan Email Anda</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>

                        <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label for='email'>Masukan Password </label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for='password'>Masukan Password Anda</label>
                    </div>
                    <label style='float: right;'>
                        <a class='pink-text' href='#!'><b>Lupa Password ?</b></a>
                    </label>
                </div>

                <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='btn green darken-1'><b>Login</b></button>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>

@endsection
