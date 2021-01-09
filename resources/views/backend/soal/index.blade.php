@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">Soal</h1>
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
        <div class="float-right py-2">
            <a href="{{route('addsoal')}}" class="btn btn-outline-success btn-sm">ADD</a>
        </div>
        <br>
        <div class="row py-3">
            @foreach($data as $kategori)
            <div class="col-md-3 py-3">
                <div class="card">
                    <div class="card-body">
                        <div style="height:100px">{{$kategori->sentence}}</div>
                        <div class="float-right">
                            <a href="{{route('subtestdetail',encrypt($kategori->id))}}" class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection