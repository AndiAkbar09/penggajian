<?php

namespace App\Http\Controllers\Penggajian;

use App\Employee;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::with('employee')->paginate(5);
        return view('penggajian.absensi.index',compact('types'));
    }

    public function create()
    {
        $employee = Employee::all();
        return view('penggajian.absensi.create',compact('employee'));
    }

    public function store(Request $request)
    {
        $type = Type::create([
            'employee_id' => $request->employee_id,
            'hadir' => $request->hadir,
            'sakit' => $request->sakit,
            'izin' => $request->izin,
            'alpha' => $request->alpha,
            'lembur' => $request->lembur,
        ]);
        
        $type->save();
        return redirect('penggajian/absensi')->with('toast_success', 'Data berhasil disimpan');
    }

    public function destroy($id)
    {
        $type = Type::find($id);
     
        $type->delete($type->all());
     
        return redirect('penggajian/absensi')->with('toast_success', 'Data berhasil dihapus');
        
    }
    
}
