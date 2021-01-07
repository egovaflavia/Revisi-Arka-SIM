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

@if ($message = Session::get('message'))
<script>
    swal({
        title: "Perhatian !",
        text: "Mohon lakukan pembayaran",
        icon: "error",
    });
</script>
@endif
<section>
    <div class="row" style="margin-top: 40px;">
        <div class="col m6">
            <div class="container">
                <h3>Ujian SIM Online Arka</h3>
                <h5>
                    Galau tes psikologi pembuatan atau perpanjangan SIM ? <br>
                    Pengen lebih mudah ? <br>
                    Bisa di kerjakan dimanapun dan kapanpun <br><br>
                    Ikuti Program SIM Online Arka Trans
                </h5>
                <h4>#SIMOnlineArka</h4>
                <a class="waves-effect waves-light green darken-1 btn" href="{{ route('register') }}">Daftar</a>
                <a class="waves-effect waves-light green darken-1 btn">Hubungi Kami</a>
            </div>
        </div>
        <div class="col m6">
            <img class="responsive-img" src="{{ asset('./frontend/assets/un1.svg') }}" alt="">
        </div>
    </div>
</section>

<section class="section grey grey lighten-2 center-align">
    <div class="container">
        <h4>Apa itu SIM Online Arka ?</h4>
        <p>
            SIM Online Arka adalah <b>program pengembangan ujian pembuatan dan perpanjang SIM</b> yang bertujuan
            untuk
            mempermudah para pembuatan maupun perpanjangan SIM, diamana sekarang sudah bisa dilakukan secara online.
        </p>
    </div>
</section>

<section class="section">
    <div class="container center-align">
        <h4>Tahap Ujian Online SIM Arka</h4>
        <div class="row">
            <img class="col s12 m8 offset-m2 l6 offset-l3 responsive-img" width="10em" src="{{ asset('./frontend/assets/un2.svg') }}" alt="">
        </div>
        <p>Rincian tahapan ujian online SIM Arka Trans Psikologi</p>
        <a class="waves-effect waves-light green darken-1 btn" href="{{ route('register') }}">Daftar</a>
        <a class="waves-effect waves-light green darken-1 btn">Hubungi Kami</a>
    </div>
</section>

<section style="margin-top: 10px !important;" class="section grey grey lighten-2 left-align">
    <div class="container">
        <div class="row">
            <div class="col m6">
                <img src="{{ asset('./frontend/assets/un3.svg') }}" class="responsive-img" alt="">
            </div>
            <div class="col m6">
                <h4>Kemudahan Ujian SIM Online</h4>
                <p>
                    SIM Online Arka adalah <b>program pengembangan ujian pembuatan dan perpanjang SIM</b> yang
                    bertujuan untuk mempermudah para pembuatan maupun perpanjangan SIM, diamana sekarang sudah bisa
                    dilakukan secara online.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section center-align">
    <h4>Cara Daftar</h4>
    <p>Pelajari dan ikuti panduan di bawah ini untuk mengikuti program</p>
    <div class="row">
        <div class="col m6 right-align ">
            <img src="{{ asset('./frontend/assets/un5.svg') }}" class="responsive-img" style="width: 200px !important;" alt="">
        </div>
        <div class="col m6 left-align">
            <h5>Langkah 1</h5>
            <p>
                Daftarkan Dirimu <br>
                Sebelum daftar, pastikan kamu: <br>
                <i class="material-icons">check_circle</i>Memiliki koneksi internet yang baik <br>
                <i class="material-icons">check_circle</i>Menyiapkan uang pendaftaran Rp. 50.000 <br>
                <i class="material-icons">check_circle</i>Menyiapkan data-data yang di perlukan <br>
                <img src="{{ asset('./frontend/assets/un6.svg') }}" style="width: 150px;" alt="">
            </p>
        </div>
    </div>
    <p>
        Setelah daftar kami akan verifikasi data kamu, dan kamu harus melakukan <br> pembayaran untuk bisa melakukan
        proses selanjutnya
    </p>
    <div class="row">
        <div class="col m6 right-align">
            <img src="{{ asset('./frontend/assets/un7.svg') }}" class="responsive-img" style="width: 300px !important;" alt="">
        </div>
        <div class="col m6 left-align">
            <h5>Langkah 2</h5>
            <p>
                Kami akan menyajikan soal untuk tes, lalu <br>
                kamu akan mengisinya <br>
                Kamu di harapkan untuk dengan serius <br>
                mengerjakan soalnya, karena kamu hanya <br>
                bisa melakukan tes 3x <br>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col m6 right-align">
            <h5>Langkah 3</h5>
            <p>
                Jika kamu menjawab soal dengan benar <br>
                kamu akan lulus dan langsung mendapat <br>
                sertifikat, dimana setifikat ini bisa digunakan <br>
                untuk pendaftaran pembuata atau <br>
                perpanjang SIM di POLRESTA <br>
            </p>
        </div>
        <div class="col m6 left-align">
            <img src="{{ asset('./frontend/assets/un8.svg') }}" class="responsive-img" style="width: 300px !important;" alt="">
        </div>
    </div>
</section>

<section class="section center-align">
    <h4>Mitra Kerja</h4>
    <div class="row container">
        <div class="col s12 m4 offset-m4 ">
            <img class="responsive-img" src="{{ asset('./img/mediatama.png') }}" alt="">
        </div>
    </div>
</section>

<section class="section center-align">
    <h4>Mitra Pembayaran</h4>
    <div class="row container">
        <div class="col s12 m4 offset-m4 ">
            <img class="responsive-img" src="{{ asset('./img/bnu.png') }}" alt="">
        </div>
    </div>
</section>

@include ('layouts.footer')

@endsection
