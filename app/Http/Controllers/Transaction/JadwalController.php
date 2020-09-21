<?php

namespace App\Http\Controllers\Transaction;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Jadwal;
use App\Model\Lelang;
use Illuminate\Http\Request;

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
        $alert = Jadwal::with('lelang')->where('batas', '=', date('Y-m-d'))->get();
        return view('jadwal.datajadwal')->with(['jadwals' => $jadwal, 'alert' => $alert]);
    }

    public function addForm()
    {
        $lelangs = Lelang::all();
        return view('jadwal.tambahjadwal')->with(['lelangs' => $lelangs]);
    }
    public function editForm($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $lelangs = Lelang::all();
        return view('jadwal.editjadwal')->with(['jadwal' => $jadwal, 'lelangs' => $lelangs]);
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

    public function patch()
    {

        $data = [
            'lelang_id' => $this->postField('IdLelang'),
            'keterangan' => $this->postField('keteranganJadwal'),
            'jadwal' => $this->postField('jadwalPrakualifikasi'),
            'batas' => $this->postField('btasWaktu'),
        ];
        $this->update(Jadwal::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
