@extends('layouts.app')

@section('content')
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

@include('layouts.menu')

<section class="section  center-align">
    <div class="container">
        <h4>Ujian SIM Online</h4>
        <p>
            Silahkan melakukan pembayaran<br>
            <b>BNI 723819203 a/n Arka Trans Psikologi</b> <br>
            Jika sudah melakukan pembayaran, <br>
            Mohon Hubungi Admin melalui WhatsApp <br>
            Dan mengirimkan bukti pembayaran <br>
            <a href="">Klik disini</a>
        </p>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <img src="{{ asset('./frontend/assets/un99.svg') }}" class="responsive-img" alt="">
            </div>
        </div>
    </div>
</section>

@include ('layouts.footer')

@endsection
