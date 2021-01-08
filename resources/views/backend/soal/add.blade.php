@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">ADD Kategori</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Kategori</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Dashboard</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>

<div class="container content content-full">
    <div class="float-left py-2">
        <a href="{{route('soals')}}" class="btn btn-outline-danger btn-sm">BACK</a>
        <button type="button" onclick="add()" class="btn btn-outline-success btn-sm">ADD ROW</button>
        <br>
        <hr style="border:1px solid black"/>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('createsoal')}}" method="POST" style="width:1100px;">
                    @csrf
                    <div class="float-center">
                        <div class="row">
                            <div class="col-md-4">
                                <select name="kategori" class="form-control" id="">
                                    <option value="">-KATEGORI-</option>
                                    @foreach($kategori as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->sentence}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="subtest" class="form-control" id="">
                                    <option value="">-SUBTEST-</option>
                                    @foreach($subtest as $subtest)
                                    <option value="{{$subtest->id}}">{{$subtest->sentence}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="addrow">
                        <div class="col-md-6 py-1">
                            <div class="card" style="width:550px">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Pertanyaan</label>
                                        <textarea name="pertanyaan[]" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">A</label>
                                        <textarea name="a[]" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">B</label>
                                        <textarea name="b[]" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">C</label>
                                        <textarea name="c[]" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kunci</label>
                                        <input name="kunci[]" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-right py-3">
                        <button type="reset" style="width:80px" class="btn btn-outline-warning btn-sm">Reset</button>
                        <button type="submit" style="width:80px" class="btn btn-outline-success btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function add()
    {
        body = '<div class="col-md-6 py-1">'+
                           ' <div class="card" style="width:550px">'+
                               ' <div class="card-body">'+
                                   ' <div class="form-group">'+
                                        '<label for="">Pertanyaan</label>'+
                                        '<textarea name="pertanyaan[]" class="form-control" required></textarea>'+
                                    '</div>'+
                                   ' <div class="form-group">'+
                                        '<label for="">A</label>'+
                                        '<textarea name="a[]" class="form-control" required></textarea>'+
                                    '</div>'+
                                   ' <div class="form-group">'+
                                        '<label for="">B</label>'+
                                        '<textarea name="b[]" class="form-control" required></textarea>'+
                                    '</div>'+
                                   ' <div class="form-group">'+
                                        '<label for="">C</label>'+
                                        '<textarea name="c[]" class="form-control" required></textarea>'+
                                    '</div>'+
                                   ' <div class="form-group">'+
                                        '<label for="">Kunci</label>'+
                                        '<input name="kunci[]" class="form-control" required>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                        $('#addrow').append(body);
    }
</script>
@endsection