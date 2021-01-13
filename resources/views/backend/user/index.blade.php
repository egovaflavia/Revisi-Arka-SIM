@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">User</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Dashboard</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>

<div class="container">
    <table class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th style="width:5%">No</th>
                <th style="width:30%">Name</th>
                <th style="width:30%">Email</th>
                <th style="width:25%">Status</th>
                <th style="width:10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($user as $i => $user)
            @if($user->name != 'Admin')
            <tr>
                <td>{{$no++}}</td>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
                <td>
                    @if($user->status == 1)
                    <strong style="color:red">Belum Bayar</strong>
                    @elseif($user->status == 2)
                    <strong style="color:green">Sudah Bayar</strong>
                    @endif
                </td>
                <td style="text-align:center">
                    @if($user->status == 1)
                        <a href="{{route('updateuser',[encrypt($user->id),encrypt(2)])}}" class="fas fa-times-circle" style="color:red"></a>
                    @elseif($user->status == 2)
                        <a href="{{route('updateuser',[encrypt($user->id),encrypt(1)])}}" class="fas fa-check-square" style="color:green"></a>
                    @endif
                    {{-- <a href="{{route('edituser',encrypt($user->id))}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{route('deleteuser',encrypt($user->id))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection