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

<section class="section grey grey lighten-2 center-align">
    <div class="container">
        <h4>Arka Trans Psikologi</h4>
        <p>
            Arka Trans Psikologi merupakan lembaga independen yang bergerak di bidang layanan jasa training sumber daya manusia (SDM) dan layanan psikologi di bidang klinis, pendidikan maupun industri dan organisasi, serta lembaga pemberdayaan masyarakat yang didirikan sebagai sarana pemenuhan dan pemuasan kebutuhan masyarakat akan layanan jasa psikologi yang berkualitas.
        </p>
    </div>
</section>

<section class="section">
    <div class="container center-align">
        <h4>Visi</h4>
        <div class="row">
            <img class="col s12 m8 offset-m2 l6 offset-l3 responsive-img" width="10em" src="{{ asset('./frontend/assets/un10.svg') }}" alt="">
        </div>
        <p>Menjadi lembaga pengembangan sumber daya manusia dan penyedia layanan psikologi yang kompeten dan profesional.</p>
        <a class="waves-effect waves-light green darken-1 btn" href="https://atp.arkacorporation.com/">Selengkapnya</a>
    </div>
</section>

<section class="section">
    <div class="container center-align">
        <h4>Dimana Kami ?</h4>
        <div class="row">
            <div class="col m6">
                <img class="responsive-img" width="100%" src="{{ asset('./frontend/assets/un12.svg') }}" alt=""></div>
            <div class="col m6">
                <center>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15957.206747141268!2d100.38306759999999!3d-0.9220554999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x995d3c45635c1e97!2sArka%20Trans%20Psikologi!5e0!3m2!1sid!2sid!4v1608788232531!5m2!1sid!2sid" width="100%" class="responsive-img" height="316" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </center>
            </div>
        </div>
        <a class="waves-effect waves-light green darken-1 btn" href="https://atp.arkacorporation.com/">Selengkapnya</a>
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
