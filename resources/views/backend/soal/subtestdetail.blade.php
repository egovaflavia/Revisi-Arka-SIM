@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">Soal Detail Subtest</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Soal</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Dashboard</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<section>
    <div class="container">
        <div class="row py-3">
            @foreach($data as $subtest)
            <div class="col-md-3 py-3">
                <div class="card">
                    <div class="card-body">
                        <div style="height:100px">{{$subtest->sentence2}}</div>
                        <div class="float-right">
                            <a href="{{route('detailsoal',[encrypt($subtest->subtest_id),encrypt($subtest->kategori_id)])}}" class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection