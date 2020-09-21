<?php

namespace App\Http\Controllers\Transaction;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Lelang;
use App\Model\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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

    public function editForm($id)
    {
        $lelang = Lelang::findOrFail($id);
        return view('lelang.editlelang')->with(['lelang' => $lelang]);
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

    public function patch()
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
        ];

        if ($this->request->hasFile('filePenawaran')){
            $data = Arr::add($data, 'file_penawaran', $penawaranName);
            $this->uploadImage('filePenawaran', $penawaranName, 'penawaran');
        }
        if ($this->request->hasFile('fileTeknis')){
            $data = Arr::add($data, 'file_teknis', $teknisName);
            $this->uploadImage('fileTeknis', $teknisName, 'teknis');
        }
        if ($this->request->hasFile('fileKualifikasi')){
            $data = Arr::add($data, 'file_kualifikasi', $kualifikasiName);
            $this->uploadImage('fileKualifikasi', $kualifikasiName, 'kualifikasi');
        }
        $this->update(Lelang::class, $data);
        return redirect()->back()->with('success', 'Success Patch Your Data!');
    }
}
