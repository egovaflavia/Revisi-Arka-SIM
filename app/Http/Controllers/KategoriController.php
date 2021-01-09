<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;
use DB;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->rules = array(
            'file' => 'mimes:jpeg,jpg,png|max:10000',
        );
    }

    public function index()
    {
        $data = DB::table('kategori')->get();
        return view('backend.kategori.index',compact('data'));
    }

    public function add()
    {
        return view('backend.kategori.add');
    }

    public function create(Request $r)
    {
        $validator = Validator::make($r->all(),$this->rules);
        if($validator->fails()){
            return back()->with('validasi','Pastikan Format Dengan Benar.');
        }else{
            $filename = $r->file->getClientOriginalName();
            $r->file('file')->move('kategori',$r->file->getClientOriginalName());
            // simpan
            DB::table('kategori')->insert([
                'sentence' => $r->sentence,
                'subsentence' => $r->subsentence,
                'file' => $filename
            ]);

            return redirect('kategoris')->with('pesan','Input Data Success');
        }
    }

    public function edit($ids)
    {
        $id = decrypt($ids);
        $data = DB::table('kategori')->where('id', $id)->first();
        return view('backend.kategori.edit',compact('data'));
    }

    public function update(Request $r)
    {
        if($r->file('file') == NULL)
        {
            DB::table('kategori')->where('id',$r->id)->update([
                'sentence' => $r->sentence,
                'subsentence' => $r->subsentence
            ]);
            return redirect('kategoris')->with('pesan','Edit Data Success');
        }else{
            $validator = Validator::make($r->all(),$this->rules);
            if($validator->fails()){
                return back()->with('validasi','Pastikan Format Dengan Benar.');
            }else{
                $filename = $r->file->getClientOriginalName();
                $r->file('file')->move('kategori',$r->file->getClientOriginalName());
                // simpan
                DB::table('kategori')->where('id',$r->id)->update([
                    'sentence' => $r->sentence,
                    'subsentence' => $r->subsentence,
                    'file' => $filename
                ]);
    
                return redirect('kategoris')->with('pesan','Edit Data Success');
            }
        }
    }

    public function delete($ids)
    {
        $id = decrypt($ids);
        $delete = DB::table('kategori')->where('id',$id)->delete();
        if($delete == TRUE)
        {
            return back()->with('pesan','Hapus Data Berhasil');
        }else{
            return back()->with('pesan','Hapus Data Gagal');
        }
    }
}
