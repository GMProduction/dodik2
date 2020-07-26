<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Jadwal;
use App\Model\Lelang;
use App\Model\Tahapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(){

        return view('laporan.laporanLelang');
    }
    public function dataLelang(Request $request)
    {

        $data['awal'] = $request->get('dariLelang');
        $data['akhir'] = $request->get('sampaiLelang');
        $data['lelangs'] = Lelang::whereBetween('created_at',$data)->get();
        return view('laporan.pdflelang')->with($data);
    }

    public function cetakDataLelang(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataLelang($request));
        return $pdf->stream();
//        return $this->dataLelang($request);
    }

    public function dataJadwal(Request $request)
    {
        $data['awal'] = $request->get('dariJadwal');
        $data['akhir'] = $request->get('sampaiJadwal');
        $data['jadwals'] = Jadwal::whereBetween('jadwal',$data)->get();
        return view('laporan.pdfjadwal')->with($data);
    }

    public function cetakDataJadwal(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataJadwal($request));
        return $pdf->stream();
//        return $this->dataJadwal($request);
    }

    public function dataTahapan(Request $request)
    {
        $data['awal'] = $request->get('dariTahapan');
        $data['akhir'] = $request->get('sampaiTahapan');
        $data['tahapans'] = Tahapan::whereBetween('created_at',$data)->get();
        return view('laporan.pdfTahapan')->with($data);
    }

    public function cetakDataTahapan(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataTahapan($request));
        return $pdf->stream();
//        return $this->dataTahapan($request);
    }
}
