<?php

namespace App\Http\Controllers\Transaction;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Jadwal;
use App\Model\Lelang;
use Illuminate\Http\Request;

/**
 * Class JadwalController
 * @package App\Http\Controllers\Transaction
 */
class JadwalController extends CustomController
{

    //
    /**
     * JadwalController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $jadwal = Jadwal::with('lelang')->get();
        return view('jadwal.datajadwal')->with(['jadwals' => $jadwal]);
    }

    public function addForm()
    {
        $lelangs = Lelang::all();
        return view('jadwal.tambahjadwal')->with(['lelangs' => $lelangs]);
    }

    public function editForm($id)
    {
        $data = [];
        $jadwals = Jadwal::findOrFail($id);
        $lelangs = Lelang::all();
        $data['jadwals'] = $jadwals;
        $data['lelangs'] = $lelangs;

        return view('jadwal.editjadwal')->with($data);
    }

    public function store()
    {

        $data = [
            'lelang_id' => $this->postField('IdLelang'),
            'keterangan' => $this->postField('keteranganJadwal'),
            'jadwal' => $this->postField('jadwalPrakualifikasi'),
            'batas' => $this->postField('btasWaktu'),
        ];
        $this->insert(Jadwal::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }

    public function updateJadwal()
    {

        $data = [
            'id' => $this->postField('id'),
            'lelang_id' => $this->postField('IdLelang'),
            'keterangan' => $this->postField('keteranganJadwal'),
            'jadwal' => $this->postField('jadwalPrakualifikasi'),
            'batas' => $this->postField('btasWaktu'),
        ];
        $this->update(Jadwal::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
