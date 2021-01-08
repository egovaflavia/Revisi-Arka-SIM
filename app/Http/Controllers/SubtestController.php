<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SubtestController extends Controller
{
    public function index()
    {
        $data = DB::table('subtest')->get();
        return view('backend.subtest.index',compact('data'));
    }

    public function add()
    {
        return view('backend.subtest.add');
    }

    public function create(Request $r)
    {
        $simpan = DB::table('subtest')->insert([
            'sentence' => $r->sentence
        ]);
        return redirect('kategoris')->with('pesan','Input Data Success');
    }

    public function edit($ids)
    {
        $id = decrypt($ids);
        $data = DB::table('subtest')->where('id',$id)->first();
        return view('backend.subtest.edit',compact('data'));
    }

    public function update(Request $r)
    {
        $id = $r->id;
        $edit = DB::table('subtest')->where('id',$id)->update([
            'sentence' => $r->sentence
        ]);

        if($edit == TRUE)
        {
            return redirect('subtest')->with('pesan','Edit Data Success');
        }else{
            return redirect('subtest')->with('error','Edit Data Gagal');
        }
    }

    public function delete($ids)
    {
        $id = decrypt($ids);
        $delete = DB::table('subtest')->where('id',$id)->delete();
        if($delete == TRUE)
        {
            return back()->with('pesan','Hapus Data Berhasil');
        }else{
            return back()->with('pesan','Hapus Data Gagal');
        }
    }
}
