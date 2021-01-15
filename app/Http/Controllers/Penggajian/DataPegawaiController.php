<?php

namespace App\Http\Controllers\Penggajian;

use App\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPegawaiController extends Controller
{
    public function __construct()

    {
        $this->pegawai = new Pegawai();
    }

    public function index()
    {
        $pegawais = Pegawai::all(); 
        return view('penggajian.datapegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('penggajian.datapegawai.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nip'              => 'required',
            'nama'             => 'required',
            'gaji'             => 'required',
            'tanggal'          => 'required',
            'jenis_kelamin'    => 'required',
            'alamat'           => 'required',
            'no_telp'          => 'required',
            'agama'            => 'required',
            'keterangan'       => 'required',            
        ]);

        $pegawai = Pegawai::create([
            'nip'              => $request->nip,
            'nama'             => $request->nama,
            'gaji'             => $request->gaji,
            'tanggal'          => $request->tanggal,
            'jenis_kelamin'    => $request->jenis_kelamin,
            'alamat'           => $request->alamat,
            'no_telp'          => $request->no_telp,
            'agama'            => $request->agama,
            'keterangan'       => $request->keterangan,
        ]);

        $pegawai->save();
        return redirect()->back()->with(['success' => 'Terima Kasih sudah mengisi data, mohon menunggu kabar dari kami']);
    }
    
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);

        $pegawai -> delete($pegawai->all());

        return redirect()->back();
    }

    
}
