<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends CustomController
{
    //
    /**
     * MainController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('base');
    }
}
