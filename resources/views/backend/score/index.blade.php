@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">Score</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Score</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Dashboard</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:5%">No</th>
                <th style="width:30%">Nama</th>
                <th style="width:30%">Kategori</th>
                <th style="width:20%">Soal</th>
                <th style="width:5%">Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $i => $score)
            <tr>
                <td>{{$i+1}}</td>
                <td><?= $score['nama'] ?></td>
                <td><?= $score['kategori'] ?></td>
                <td><?= $score['soal'] ?></td>
                <td style="text-align:center"><?= $score['score'] ?></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection