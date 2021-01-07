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
        </center>
        <p>
            Silahkan pilih ujian
        </p>
        <p>Tes hanya bisa di lakukan 3x, jika Anda gagal 3x <br> Anda bisa mengulang membayar kembali</p>
        <div class="row">
            <form action="{{ route('pilih-ujian') }}" method="GET">
                <div class="input-field col s12 m6 offset-m3">
                    <select required name="ujian_dipilih" id="pilih">
                        <option value="" disabled selected>Pilih</option>
                        @foreach($list as $row)
                        <option value="{{ base64_encode($row->kategori_id) }}">{{ $row->kategori_title }}</option>
                        @endforeach
                    </select>
                    <label>Silahkan pilih ujian </label>
                </div>

                <div class="input-field col s12 m6 offset-m3">
                    <button type="submit" class="waves-effect waves-dark btn next-step"><b>Lanjutkan</b></button>
                </div>
            </form>

        </div>
    </div>
</section>

@include ('layouts.footer')

@endsection
