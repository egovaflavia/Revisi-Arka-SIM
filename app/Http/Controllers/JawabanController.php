<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JawabanController extends Controller
{
    public function index()
    {
        // set nilai skor
        $nilai = 0;
        // penampung data array
        $dataArray = array();
        // kumpulkan data berdasarkan hari ujian
        $date = date('Y-m-d');
        $score = DB::table('ujian')
                ->join('users','ujian.user_id','users.id')
                ->join('kategori','kategori.id','ujian.kategori_id')
                ->where(DB::raw('DATE(ujian.tgl)'),$date)
                ->select('users.id as id_user','users.name','kategori.sentence as kategori',DB::raw('DATE(ujian.tgl) as tanggal'),'ujian.id as ujian_id')
                ->get();
                foreach($score as $score)
                {
                    // mencari score yang benar
                    $soal = DB::table('jawaban')
                            ->join('soal','soal.id','jawaban.soal_id')
                            ->select('soal.kunci','jawaban.jawaban_dipilih')
                            ->where('jawaban.ujian_id',$score->ujian_id)
                            ->where('jawaban.user_id',$score->id_user)
                            ->get();
                            foreach($soal as $soal){
                                if($soal->jawaban_dipilih == $soal->kunci)
                                {
                                    $nilai += 1;
                                }
                            }
                            $dataArray[] = array(
                                'nama' => $score->name,
                                'kategori' => $score->kategori,
                                'soal' => $score->kategori,
                                'score' => $nilai
                            );
                }
                $data['nilai'] = $dataArray;
                return view('backend.score.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
