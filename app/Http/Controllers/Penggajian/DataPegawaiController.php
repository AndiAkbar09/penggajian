<?php

namespace App\Http\Controllers\Penggajian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPegawaiController extends Controller
{
    public function index()
    {
        return view('penggajian.datapegawai.index');
    }
}
