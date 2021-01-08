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

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:5%">No</th>
                <th style="width:10%">Kategori</th>
                <th style="width:10%">Subtest</th>
                <th style="width:25%">Pertanyaan</th>
                <th style="width:10%">A</th>
                <th style="width:10%">B</th>
                <th style="width:10%">C</th>
                <th style="width:10%">Kunci</th>
                <th style="width:10%">ACtion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $soal)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$soal->sentence1}}</td>
                <td>{{$soal->sentence2}}</td>
                <td><?= $soal->pertanyaan ?></td>
                <td><?= $soal->pilihan_a ?></td>
                <td><?= $soal->pilihan_b ?></td>
                <td><?= $soal->pilihan_c ?></td>
                <td><?= $soal->kunci ?></td>
                <td>
                    <button type="button" onclick="edit('<?= $soal->id ?>','<?= $soal->pertanyaan ?>','<?= $soal->pilihan_a ?>','<?= $soal->pilihan_b ?>','<?= $soal->pilihan_c ?>','<?= $soal->kunci ?>')" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></button>
                    <a href="{{route('deletesoal',encrypt($soal->id))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="editdata" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
  
      <div class="modal-content">
        <div class="modal-header">
            <h3>Edit Soal</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{route('updatesoal')}}" method="POST">
              @csrf
              <input type="hidden" id="id" name="id">
                <div class="form-group">
                    <label for="">Pertanyaan</label>
                    <textarea name="pertanyaan" id="pertanyaan" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">A</label>
                    <textarea name="a" id="a" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">B</label>
                    <textarea name="b" id="b" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">C</label>
                    <textarea name="c" id="c" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Kunci</label>
                    <input name="kunci" id="kunci" class="form-control" required>
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
    function edit(id,soal,a,b,c,kunci)
    {
        $('#id').val(id);
        $('#pertanyaan').val(soal);
        $('#a').val(a);
        $('#b').val(b);
        $('#c').val(c);
        $('#kunci').val(kunci);
        $('#editdata').modal()
    }
</script>
@endsection