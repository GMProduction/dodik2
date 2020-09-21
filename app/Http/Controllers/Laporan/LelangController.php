<?php

namespace App\Http\Controllers\Laporan;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Jadwal;
use App\Model\Lelang;
use App\Model\Tahapan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LelangController extends CustomController
{
    //
    /**
     * LelangController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        return view('laporan.laporanLelang')->with([]);
    }

    public function cetakLelang()
    {
        $tgl1 = $this->field('tgl1') ?? Carbon::now();
        $tgl2 = $this->field('tgl2') ?? Carbon::now();
        $lelang = Lelang::whereBetween('created_at', [$tgl1, $tgl2])->get();

        return $this->convertToPdf('cetak.lelang', ['lelangs' => $lelang, 'tgl1' => $tgl1, 'tgl2' => $tgl2]);
    }

    public function cetakJadwal()
    {
        $tgl1 = $this->field('tgl1') ?? Carbon::now();
        $tgl2 = $this->field('tgl2') ?? Carbon::now();
        $jadwal = Jadwal::with('lelang')->whereBetween('created_at', [$tgl1, $tgl2])->get();
        return $this->convertToPdf('cetak.jadwal', ['jadwals' => $jadwal, 'tgl1' => $tgl1, 'tgl2' => $tgl2]);
    }

    public function cetakTahapan()
    {
        $tgl1 = $this->field('tgl1') ?? Carbon::now();
        $tgl2 = $this->field('tgl2') ?? Carbon::now();
        $tahapan = Tahapan::with('lelang')->whereBetween('created_at', [$tgl1, $tgl2])->get();
        return $this->convertToPdf('cetak.tahapan', ['tahapans' => $tahapan, 'tgl1' => $tgl1, 'tgl2' => $tgl2]);
    }



}
