<?php

namespace App\Http\Controllers\Transaction;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Jadwal;
use App\Model\Lelang;
use App\Model\Tahapan;
use Illuminate\Http\Request;

class TahapanController extends CustomController
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
        $tahapan = Tahapan::with('lelang')->get();
        return view('tahapan.datatahapan')->with(['tahapans' => $tahapan]);
    }

    public function addForm()
    {
        $lelangs = Lelang::all();
        return view('tahapan.tambahtahapan')->with(['lelangs' => $lelangs]);
    }

    public function editForm($id)
    {
        $data['lelangs'] = Lelang::all();
        $data['tahapan'] = Tahapan::findOrFail($id);
        return view('tahapan.edittahapan')->with($data);
    }

    public function store()
    {
        $data = [
            'lelang_id' => $this->postField('IdLelang'),
            'tanggal_upload' => $this->postField('btasWaktu'),
            'pekerjaan' => $this->postField('pekerjaan')
        ];
        $this->insert(Tahapan::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }

    public function updateTahapan()
    {
        $data = [
            'id' => $this->postField('id'),
            'lelang_id' => $this->postField('IdLelang'),
            'tanggal_upload' => $this->postField('btasWaktu'),
            'pekerjaan' => $this->postField('pekerjaan')
        ];
        $this->update(Tahapan::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
