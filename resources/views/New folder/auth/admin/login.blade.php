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
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; width: 350px; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <div class="col s12 "></div>
            <a href="{{ route('home') }}" class="btn green darken-1">Kembali</a>
            <!-- <form class="col s12 m12" action="" method="post">
                @csrf
                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s12'>

                        <input class='validate @error(' email') is-invalid @enderror' type='email' value="{{ old('email') }}" name='email' id='email' required autocomplete="email" autofocus />
                        <label for='email'>Email Admin</label>
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

                <br />
                <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green darken-1'>Login</button>
                    </div>
                </center>
            </form> -->
            <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>

@endsection


