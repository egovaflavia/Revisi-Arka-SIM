@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">Subtest</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Subtest</li>
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
        <a href="{{route('addsubtest')}}" class="btn btn-outline-success btn-sm">ADD</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:5%">No</th>
                <th style="width:85%">Sentence</th>
                <th style="width:10%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $subtest)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$subtest->sentence}}</td>
                <td>
                    <a href="{{route('editsubtest',encrypt($subtest->id))}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{route('deletesubtest',encrypt($subtest->id))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection