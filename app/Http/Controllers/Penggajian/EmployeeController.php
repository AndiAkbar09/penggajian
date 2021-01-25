<?php

namespace App\Http\Controllers\Penggajian;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('penggajian.pegawai.index', compact('employees'));
    }

    public function create()
    {
        return view('penggajian.pegawai.create');
    }

    public function store(Request $request)
    {
        
        $employee = Employee::create([
            'nip'  => $request->nip,
            'nama'  => $request->nama,
            'jabatan'  => $request->jabatan,
            'agama'  => $request->agama,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir'  => $request->tanggal_lahir,
            'alamat'  => $request->alamat,
            'status'  => $request->status,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'no_telp'  => $request->no_telp,
            'keterangan'  => $request->keterangan,
        ]);

        $employee->save();
        return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
    }

        public function destroy($id)
        {
            $employee = Employee::find($id);

            $employee->delete($employee->all());

            return redirect()->back();
        }

        public function show($id)
        {
            $employee = Employee::find($id);
            return view('penggajian.pegawai.show', compact('employee'));
        }
}
