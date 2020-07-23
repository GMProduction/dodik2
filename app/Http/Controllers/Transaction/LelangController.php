<?php

namespace App\Http\Controllers\Transaction;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Lelang;
use Illuminate\Http\Request;

class LelangController extends CustomController
{
    //
    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $lelang = Lelang::all();
        return view('lelang.datalelang')->with(['lelangs' => $lelang]);
    }

    public function addForm()
    {
        return view('lelang.tambahlelang');
    }

    public function store()
    {

        $penawaranName = $this->generateImageName('filePenawaran');
        $teknisName = $this->generateImageName('fileTeknis');
        $kualifikasiName = $this->generateImageName('fileKualifikasi');

        $data = [
            'kode_lelang' => $this->postField('kodeLelang'),
            'nama' => $this->postField('namaLelang'),
            'link' => $this->postField('linkWebsite'),
            'reward' => $this->postField('reward'),
            'kesulitan' => $this->postField('kesulitan'),
            'file_penawaran' => $penawaranName,
            'file_teknis' => $teknisName,
            'file_kualifikasi' => $kualifikasiName
        ];

        $this->uploadImage('filePenawaran', $penawaranName, 'penawaran');
        $this->uploadImage('fileTeknis', $teknisName, 'teknis');
        $this->uploadImage('fileKualifikasi', $kualifikasiName, 'kualifikasi');
        $this->insert(Lelang::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
