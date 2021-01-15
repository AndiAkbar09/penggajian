<?php

namespace App\Http\Controllers\Penggajian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataGajiController extends Controller
{
    public function index()
    {
        return view('penggajian.datagaji.index');
    }

    public function create()
    {
        return view('penggajian.datagaji.create');
    }
}
