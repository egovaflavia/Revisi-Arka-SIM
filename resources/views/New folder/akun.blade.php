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
        <h4>Profil Akun</h4>
        <p>
            Pastikan data yang Anda masukan benar
        </p>
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <input placeholder="Nama" id="nama" name="nama" type="text" class="active validate" required />
                    <label for="name">Nama</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <select class="validate">
                        <option value="" disabled selected>Pilih</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    <label for="name">Jenis Kelamin</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <input placeholder="Tempat Lahir" id="nama" name="nama" type="text" class="active validate" required />
                    <label for="name">Tempat Lahir</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <input placeholder="Nama" id="tglahir" name="nama" type="date" class="active validate" required />
                    <script>
                        $('#tglahir').val(new Date());
                    </script>
                    <label for="name">Tanggal Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <select class="validate">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Suku Minang">Suku Minang</option>
                        <option value="Suku Jawa">Suku Jawa</option>
                        <option value="Suku Batak">Suku Batak</option>
                        <option value="Suku Dayak">Suku Dayak</option>
                        <option value="Suku Asmat">Suku Asmat</option>
                        <option value="Suku Minahasa">Suku Minahasa</option>
                        <option value="Suku Melayu">Suku Melayu</option>
                        <option value="Suku Sunda">Suku Sunda</option>
                        <option value="Suku Madura">Suku Madura</option>
                        <option value="Suku Betawi">Suku Betawi</option>
                        <option value="Suku Bugis">Suku Bugis</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <label for="name">Suku Bangsa</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <select class="validate">
                        <option value="" disabled selected>Pilih</option>
                        <option value="">Pilih</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="SD Sederajat ">SD Sederajat </option>
                        <option value="SMP Sederajat">SMP Sederajat</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
                        <option value="D3 Sederajat">D3 Sederajat</option>
                        <option value="S1 Sederajat">S1 Sederajat</option>
                        <option value="S2 Sederajat">S2 Sederajat</option>
                        <option value="S3 Sederajat">S3 Sederajat</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <label for="name">Pendidikan</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <select class="validate">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="Pegawai Negeri">Pegawai Negeri</option>
                        <option value="PNS">PNS</option>
                        <option value="Aparatur Sipil Negara">Aparatur Sipil Negara</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <label for="name">Pekerjaan</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <select class="validate">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <label for="name">Agama</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <input placeholder="Alamat" name="Alamat" type="text" class="validate" required />
                    <label for="name">Alamat</label>
                </div>
            </div>

            <div class="row" style="margin-top: 0px;">
                <div class="input-field col s12 m6 offset-m3">
                    <p class="red">Pastikan data yang Anda masukan benar</p>
                    <a class="waves-effect waves-light btn">Simpan</a>
                </div>
            </div>
        </form>
    </div>
</section>

@include ('layouts.footer')

@endsection
