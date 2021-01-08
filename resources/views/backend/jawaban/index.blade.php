@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">Jawaban</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Jawaban</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Dashboard</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>

<div class="container">
    <div class="float-right py-2">
        <a href="{{route('addkategori')}}" class="btn btn-outline-success btn-sm">ADD</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:5%">No</th>
                <th style="width:30%">Sentence</th>
                <th style="width:30%">Subsentence</th>
                <th style="width:25%">File</th>
                <th style="width:10%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $kategori)
            <tr>
                <td>{{$i+1}}</td>
                <td><?= $kategori->sentence ?></td>
                <td><?= $kategori->subsentence ?></td>
                <td><img src="{{asset('/kategori/'.$kategori->file)}}" class="img-responsive" style="width:30%;" alt=""></td>
                <td>
                    <a href="{{route('editkategori',encrypt($kategori->id))}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{route('deletekategori',encrypt($kategori->id))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection