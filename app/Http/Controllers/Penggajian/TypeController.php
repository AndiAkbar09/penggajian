<?php

namespace App\Http\Controllers\Penggajian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function index()
    {
        return view('penggajian.datahadir.index');
    }
}
