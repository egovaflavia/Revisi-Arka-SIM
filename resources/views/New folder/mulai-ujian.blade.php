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
            Silahkan hafalkan gambar di bawah ini <br> <span style="background-color: red;">dalam waktu 1 menit</span> <br>
            Sistem akan otomatis berpindah halaman <br>
        </p>
        <form id="form" action="youraction" method="yourmethod">
            <ul class="stepper horizontal">
                <li class="step active">
                    <div class="step-title waves-effect">Subtest 1</div>
                    <div class="step-content">
                        <!-- Awal per Soal -->
                        <div class="perSoal">
                            <div class="left">1. Kata yang mempunyai huruf permulaan - Y – adalah suatu…</div>
                            <div class="clearfix"></div>
                            <div class="left">
                                <p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" checked />
                                        <span>BUNGA</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>BINATANG</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>PERKAKAS</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Akhir per Soal -->
                        <!-- Awal per Soal -->
                        <div class="perSoal">
                            <div class="left">1. Kata yang mempunyai huruf permulaan - Y – adalah suatu…</div>
                            <div class="clearfix"></div>
                            <div class="left">
                                <p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" checked />
                                        <span>BUNGA</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>BINATANG</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>PERKAKAS</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Akhir per Soal -->
                        <!-- Awal per Soal -->
                        <div class="perSoal">
                            <div class="left">1. Kata yang mempunyai huruf permulaan - Y – adalah suatu…</div>
                            <div class="clearfix"></div>
                            <div class="left">
                                <p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" checked />
                                        <span>BUNGA</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>BINATANG</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>PERKAKAS</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Akhir per Soal -->
                        <!-- Awal per Soal -->
                        <div class="perSoal">
                            <div class="left">1. Kata yang mempunyai huruf permulaan - Y – adalah suatu…</div>
                            <div class="clearfix"></div>
                            <div class="left">
                                <p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" checked />
                                        <span>BUNGA</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>BINATANG</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>PERKAKAS</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Akhir per Soal -->
                        <!-- Awal per Soal -->
                        <div class="perSoal">
                            <div class="left">1. Kata yang mempunyai huruf permulaan - Y – adalah suatu…</div>
                            <div class="clearfix"></div>
                            <div class="left">
                                <p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" checked />
                                        <span>BUNGA</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>BINATANG</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>PERKAKAS</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Akhir per Soal -->
                        <!-- Awal per Soal -->
                        <div class="perSoal">
                            <div class="left">1. Kata yang mempunyai huruf permulaan - Y – adalah suatu…</div>
                            <div class="clearfix"></div>
                            <div class="left">
                                <p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" checked />
                                        <span>BUNGA</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>BINATANG</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>PERKAKAS</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Akhir per Soal -->


                        <div class="">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                        </div>
                    </div>
                </li>
                <li class="step ">
                    <div class="step-title waves-effect">Subtest 2</div>
                    <div class="step-content">
                        <input placeholder="Insert email " id="email" name="email" type="email" class="validate" required />
                        <div class="">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                        </div>
                    </div>
                </li>
                <li class="step ">
                    <div class="step-title waves-effect">Subtest 3</div>
                    <div class="step-content">
                        <input placeholder="Insert email " id="email" name="email" type="email" class="validate" required />
                        <div class="">
                            <!-- Here goes your actions buttons -->
                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                        </div>
                    </div>
                </li>
            </ul>
        </form>
    </div>
</section>

<script>
    var stepper = document.querySelector('.stepper');
    var stepperInstace = new MStepper(stepper, {
        // options
        firstActive: 0 // this is the default
    })
</script>
@include ('layouts.footer')

@endsection
