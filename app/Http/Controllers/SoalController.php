<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SoalController extends Controller
{
    
    public function index()
    {
        $data = DB::table('kategori')->get();
        return view('backend.soal.index',compact('data'));
    }

    public function subtest($ids)
    {
        $id = decrypt($ids);
        $data = DB::table('soal')
        ->leftjoin('kategori','soal.kategori_id','kategori.id')
        ->leftjoin('subtest','soal.subtest_id','subtest.id')
        ->where('soal.kategori_id',$id)
        ->select('kategori.sentence as sentence1', 'subtest.sentence as sentence2', 'soal.id','soal.kategori_id','soal.subtest_id')
        ->groupBy('soal.subtest_id')
        ->get();
        
        return view('backend.soal.subtestdetail',compact('data'));
    }

    public function detail($ids,$idd)
    {
        $id = decrypt($ids);
        $id_kategori = decrypt($idd);
        $data = DB::table('soal')
        ->leftjoin('kategori','soal.kategori_id','kategori.id')
        ->leftjoin('subtest','soal.subtest_id','subtest.id')
        ->where('soal.subtest_id',$id)
        ->where('soal.kategori_id',$id_kategori)
        ->select('kategori.sentence as sentence1', 'subtest.sentence as sentence2', 'soal.*')
        ->get();

        return view('backend.soal.detail',compact('data'));
    }

    public function add()
    {
        $data['kategori'] = DB::table('kategori')->get();
        $data['subtest'] = DB::table('subtest')->get();
        return view('backend.soal.add',$data);
    }

    public function create(Request $r)
    {
        $jumlah = $r->pertanyaan;
        foreach($jumlah as $i => $isi)
        {
            DB::table('soal')->insert([
                'kategori_id' => $r->kategori,
                'subtest_id' => $r->subtest,
                'pertanyaan' => $r->pertanyaan[$i],
                'pilihan_a' => $r->a[$i],
                'pilihan_b' => $r->b[$i],
                'pilihan_c' => $r->c[$i],
                'kunci' => $r->kunci[$i]
            ]);
        }
        return redirect('soals')->with('pesan','Input Data Success');
    }

    public function update(Request $r)
    {
        $edit = DB::table('soal')->where('id',$r->id)->update([
            'pertanyaan' => $r->pertanyaan,
            'pilihan_a' => $r->a,
            'pilihan_b' => $r->b,
            'pilihan_c' => $r->c,
            'kunci' => $r->kunci
        ]);
        return back()->with('pesan','Edit Data Success');
    }

    public function delete($ids)
    {
        $id = decrypt($ids);
        $delete = DB::table('soal')->where('id',$id)->delete();
        if($delete == TRUE)
        {
            return back()->with('pesan','Hapus Data Berhasil');
        }else{
            return back()->with('pesan','Hapus Data Gagal');
        }
    }
}
