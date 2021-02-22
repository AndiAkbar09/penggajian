<?php

namespace App\Http\Controllers\Penggajian;

use App\Employee;
use App\Type;
use App\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::with('employee','type')->latest()->paginate(4);
        return view ('penggajian.price.index', compact('prices'));
    }
    public function create()
    {
        $employee = Employee::all();
        $type = Type::all();
        return view ('penggajian.price.create', compact('employee', 'type'));
    }
    
    public function store(Request $request)
    {
        $price = Price::create([
            'employee_id'       => $request->employee_id,
            'type_id'           => $request->type_id,
            'gaji_pokok'        => $request->gaji_pokok,
            'jam_lembur'        => $request->jam_lembur,
            'uang_lembur'       => $request->uang_lembur,
            'uang_makan'        => $request->uang_makan,
            'uang_transport'    => $request->uang_transport,
            'pendapatan'        => $request->pendapatan,
            'potongan'          => $request->potongan,
            'total'             => $request->total,
        ]);
        
        $price->save;
        
        return redirect('penggajian/price')->with('toast_success', 'Data berhasil disimpan');

    }

    public function edit($id)
    {   
        $employee = Employee::all();
        $type = Type::all();
        $price = Price::findOrFail($id);

        return view('penggajian.price.edit', compact('employee', 'type', 'price'));
    }

    public function show($id)
    {   
        $employee = Employee::all();
        $type = Type::all();
        $price = Price::findOrFail($id);

        return view('penggajian.price.show', compact('employee', 'type', 'price'));
    }

    public function update(Request $request, $id)
    {
        $price = Price::find($id);

        $price->update($request->all());
        
        return redirect('penggajian/price')->with('toast_success', 'Data berhasil diubah');
        
    }

    public function destroy($id)
    {
        $price = Price::find($id);

        $price->delete($price->all());

        return redirect('penggajian/price')->with('toast_success', 'Data berhasil dihapus');
    }
}
