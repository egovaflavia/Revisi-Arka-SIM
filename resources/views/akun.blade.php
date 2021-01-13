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
        <form method="POST" action="{{ route('akunUpdate') }}" class="col s12">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input id="user_id" name="user_id" type="hidden" value="{{ auth()->user()->id }}">
                    <input required id="nik" name="nik" type="number" class="validate">
                    <label for="nik">NIK</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input required id="nama" name="nama" type="text" class="validate">
                    <label for="nama">Nama</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input required id="tempat_lahir" name="tempat_lahir" type="text" class="validate">
                    <label for="tempat_lahir">Tempat Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input required id="tgl_lahir" name="tgl_lahir" type="date" class="validate">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select required name="suku" id="suku">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Minangkabau">Minangkabau</option>
                        <option value="Jawa">Jawa</option>
                        <option value="Batak">Batak</option>
                        <option value="Dayak">Dayak</option>
                        <option value="Asmat">Asmat</option>
                        <option value="Minahasa">Minahasa</option>
                        <option value="Melayu">Melayu</option>
                        <option value="Sunda">Sunda</option>
                        <option value="Madura">Madura</option>
                        <option value="Betawi">Betawi</option>
                        <option value="Bugis">Bugis</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <label>Suku</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select required name="pendidikan" id="pendidikan">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="SD / Sederajat">SD / Sederajat</option>
                        <option value="SLTP / Sederajat">SLTP / Sederajat</option>
                        <option value="D3 / Sederajat">D3 / Sederajat</option>
                        <option value="S1 /Sederajat">S1 /Sederajat</option>
                        <option value="S2 / Sederaja">S2 / Sederaja</option>
                        <option value="S3 / Sederajat">S3 / Sederajat</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <label>Pendidikan</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input required id="pekerjaan" name="pekerjaan" type="text" class="validate">
                    <label for="pekerjaan">Pekerjaan</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select required name="agama" id="agama">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <label>Agama</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input required id="alamat" name="alamat" type="text" class="validate">
                    <label for="alamat">Alamat</label>
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn">Simpan</button>
        </form>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>
@include ('layoutsfrontend.footer')

@endsection
