@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">EDIT Soal</h1>
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

<div class="container">
    <div class="float-left py-2">
        <a href="{{route('soals')}}" class="btn btn-outline-danger btn-sm">BACK</a>
        <br>
        <hr style="border:1px solid black"/>
        <div class="card">
            <div class="card-body">
                <form action="{{route('updatesoal')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <div class="form-group">
                        <label for="">Sentence</label>
                        <textarea name="sentence" class="note" required>{{$data->sentence}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Subsentence</label>
                        <textarea name="subsentence" class="note" required>{{$data->subsentence}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Sentence</label>
                        <input type="file" class="form-control" name="file">
                        <p style="color:red;">{{$data->file}}</p>
                    </div>
                    <div class="float-right">
                        <button type="reset" style="width:80px" class="btn btn-outline-warning btn-sm">Reset</button>
                        <button type="submit" style="width:80px" class="btn btn-outline-success btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection