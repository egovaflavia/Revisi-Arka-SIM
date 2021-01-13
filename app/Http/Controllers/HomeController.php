<?php

namespace App\Http\Controllers;

use App\DataUser;
use App\Jawaban;
use App\Kategori;
use App\Soal;
use App\Ujian;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pay()
    {
        return view('pay');
    }

    public function profil()
    {
        return view('profil');
    }

    public function step1()
    {
        if (auth()->user()->status == 0) {
            return redirect()->route('home')->with('message', 'Mohon lakukan pembayaran');
        }
        $list = Kategori::all();
        return view('proses.step1', compact('list'));
    }

    public function step2(Request $request)
    {
        $ujianDipilih = base64_decode($request->ujian_dipilih);
        // $hafalan = DB::table('hafalans')->where('kategori_id', $ujianDipilih)->first();
        $kategori = Kategori::findOrFail($ujianDipilih);
        return view('proses.step2', compact('kategori'));
    }

    public function step3(Request $request)
    {
        // Subtest 1
        $id_kategori = $request->idKategori;
        $id_user = auth()->user()->id;
        $tgl_ujian = Carbon::now()->toDateTimeString();
        $mulai_ujian = Carbon::now()->toDateTimeString();
        $selesai_ujian = Carbon::now()->addMinutes(9)->toDateTimeString();
        $id_ujian = Ujian::create(
            [
                'kategori_id' => $id_kategori,
                'user_id' => $id_user,
                'tgl' => $tgl_ujian,
                'mulai' => $mulai_ujian,
                'selesai' => $selesai_ujian,
            ]
        )->id;

        $soal = Soal::where([
            'kategori_id' => $id_kategori,
            'subtest_id' => 1
        ])->get();
        // dd($soal);
        return view('proses.step3', compact('soal', 'id_ujian', 'id_kategori'));
    }

    public function step4(Request $request)
    {
        // dd($request->all());
        $id_kategori = $request->id_kategori;
        $id_ujian = $request->id_ujian;
        $array_soal = $request->soal_id;
        $array_jawaban = $request->jawaban;
        $user = auth()->user()->id;
        $no = 0;
        foreach ($array_jawaban as $jawaban) {
            Jawaban::create(
                [
                    'ujian_id' => $id_ujian,
                    'soal_id' => $array_soal[$no],
                    'user_id' => $user,
                    'jawaban_dipilih' => $jawaban,
                ]
            );
            $no++;
        }
        $soal = Soal::where([
            'kategori_id' => $id_kategori,
            'subtest_id' => 2
        ])->get();
        // dd($soal);
        return view('proses.step4', compact('id_ujian', 'id_kategori', 'soal'));
    }

    public function step5(Request $request)
    {
        $id_kategori = $request->id_kategori;
        $id_ujian = $request->id_ujian;
        $array_soal = $request->soal_id;
        $array_jawaban = $request->jawaban;
        $user = auth()->user()->id;
        $no = 0;
        foreach ($array_jawaban as $jawaban) {
            Jawaban::create(
                [
                    'ujian_id' => $id_ujian,
                    'soal_id' => $array_soal[$no],
                    'user_id' => $user,
                    'jawaban_dipilih' => $jawaban,
                ]
            );
            $no++;
        }
        $soal = Soal::where([
            'kategori_id' => $id_kategori,
            'subtest_id' => 3
        ])->get();
        return view('proses.step5', compact('id_ujian', 'id_kategori', 'soal'));
    }

    public function step6(Request $request)
    {
        $id_ujian = $request->id_ujian;
        $hasil = Jawaban::with('soal')->where('ujian_id', $id_ujian)->get();
        $benar = 0;
        $salah = 0;
        foreach ($hasil as $no => $row) {
            if ($row->jawaban_dipilih == $row->soal->kunci) {
                $benar = $benar + 1;
            } else {
                $salah = $salah + 1;
            }
        }
        return view('proses.hasil', compact('benar', 'salah'));
    }

    public function akun($id)
    {
        $id_user = decrypt($id);
        $user = DB::table('data_user')->where('user_id', $id_user)->first();
        return view('akun', compact('user'));
    }

    public function akunUpdate(Request $request)
    {
        DataUser::create(
            [
                'user_id' => auth()->user()->id,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'suku' => $request->suku,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
            ]
        );

        return redirect('ujian');
    }
}
