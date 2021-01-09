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
        <form id="form" action="{{ route('submit-ujian') }}" method="post">
            @csrf
            <input type="hidden" name="id_kategori" value="{{ $id_kategori }}">
            <input type="hidden" name="id_ujian" value="{{ $id_ujian }}">
            <ul class="stepper linear">
                <li class="step active">
                    <div class="step-title waves-effect">Subtest 1</div>
                    <div class="step-content">
                        @foreach($soal as $no => $row)
                        <!-- Awal per Soal -->
                        <div class="perSoal">
                            <input type="hidden" name="soal_id[]" value="{{ $row->id }}">
                            <div class="left">{{ ++$no }}. {{ $row->pertanyaan }}</div>
                            <div class="clearfix"></div>
                            <div class="left">
                                <p>
                                    <label>
                                        <input required class="validate with-gap" value="A" name="jawaban[{{ $row->id }}]" type="radio" />
                                        <span>{{ $row->pilihan_a }}</span>
                                    </label>
                                    <label>
                                        <input class=" with-gap" value="B" name="jawaban[{{ $row->id }}]" type="radio" />
                                        <span>{{ $row->pilihan_b }}</span>
                                    </label>
                                    <label>
                                        <input class=" with-gap" value="C" name="jawaban[{{ $row->id }}]" type="radio" />
                                        <span>{{ $row->pilihan_c }}</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Akhir per Soal -->
                        @endforeach

                        <div class="">
                            <!-- Here goes your actions buttons -->
                            <button type="submit" class="waves-effect waves-dark btn ">CONTINUE</button>
                        </div>
                    </div>
                </li>
                <!-- <li class="step ">
                    <div class="step-title waves-effect">Subtest 2</div>
                    <div class="step-content">
                        <input placeholder="Insert email " id="email" name="email" type="email" class="validate" required />
                        <div class="">
                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                        </div>
                    </div>
                </li>
                <li class="step ">
                    <div class="step-title waves-effect">Subtest 3</div>
                    <div class="step-content">
                        <input placeholder="Insert email " id="email" name="email" type="email" class="validate" required />
                        <div class="">
                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                        </div>
                    </div>
                </li> -->
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
@include ('layoutsfrontend.footer')

@endsection
