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

<section class="section  center-align">
    <div class="container">
        <center>
            <h4>Ujian SIM Online</h4>
            <h4>{{$hafalan->hafalan_title}}</h4>
        </center>
        <p>
            Silahkan hafalkan gambar di bawah ini <br> <span style="background-color: red;">dalam waktu 1 menit</span> <br>
            Sistem akan otomatis berpindah halaman <br>
        </p>
        <img src="{{ asset('img/'.$hafalan->hafalan_file) }}" class="responsive-img" alt="">
        <form action="{{ route('mulai-ujian') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $hafalan->hafalan_id }}" name="idHafalan">
            <div class="input-field col s12 m6 offset-m3">
                <button type="submit" class="waves-effect waves-dark btn next-step"><b>Mulai Ujian</b></button>
            </div>
        </form>
    </div>
</section>

@include ('layouts.footer')

@endsection
