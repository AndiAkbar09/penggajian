<?php

namespace App\Http\Controllers\Penggajian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataLemburPegawaiController extends Controller
{
    public function index()
    {
        return view('penggajian.datalembur.index');
    }
}
