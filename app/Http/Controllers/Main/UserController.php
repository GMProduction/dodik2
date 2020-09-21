<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Lelang;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserController extends CustomController
{
    //
//
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = User::all();
        return view('user.user')->with(['user' => $user]);
    }

    public function addForm()
    {
        return view('user.tambahuser');
    }

    public function editForm($id)
    {
        $user = User::findOrFail($id);
        return view('user.edituser')->with(['user' => $user]);
    }

    public function store()
    {

        $data = [
            'username' => $this->postField('username'),
            'password' => Hash::make($this->postField('password')),
            'level' => $this->postField('level'),
        ];
        $this->insert(User::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }

    public function patch()
    {
        $data = [
            'username' => $this->postField('username'),
            'level' => $this->postField('level'),
        ];

        $this->update(User::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
