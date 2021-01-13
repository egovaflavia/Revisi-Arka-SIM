@extends('layoutsfrontend.app')

@section('content')
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

@include('layoutsfrontend.menu')

<section class="section  center-align">
    <div class="container">
        <h4>Ujian SIM Online</h4>
        <p>
            Anda telah menyelesaikan Ujian<br>
            <b>Jawaban anda : </b> <br>
            Benar : {{ $benar }} <br>
            Salah : {{ $salah }} <br>
            <b>Selamat Anda lulus</b> <br>
            <a href="">Klik</a> di sini untuk mencetak blanko <br>
            <a href="">Klik</a> di sini untuk ulang Ujian <br>
        </p>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <img src="{{ asset('./frontend/assets/un14.svg') }}" class="responsive-img" alt="">
            </div>
        </div>
    </div>
</section>

@include ('layoutsfrontend.footer')

@endsection
