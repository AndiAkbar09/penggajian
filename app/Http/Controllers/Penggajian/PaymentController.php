<?php

namespace App\Http\Controllers\Penggajian;

use App\Employee;
use App\Price;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('employee','price')->latest()->paginate(4);
        return view ('penggajian.payment.index', compact('payments'));
    }

    public function create()
    {
        $employee = Employee::all();
        $price = Price::all();
        return view('penggajian.payment.create', compact('employee', 'price'));
    }

    public function store(Request $request)
    {
        $payment = Payment::create([
            'employee_id' => $request->employee_id,
            'price_id' => $request->price_id,
            'no_rek' => $request->no_rek,
            'tgl_transfer' => $request->tgl_transfer,
        ]);

        $payment->save();
        return redirect('penggajian/payment')->with('toast_success', 'Data berhasil disimpan');

    }

    public function edit($id)
    {
        $employee = Employee::all();
        $price = Price::all();
        $payment = Payment::findOrFail($id);

        return view('penggajian.payment.edit',compact('employee', 'price', 'payment'));
    }

    public function show($id)
    {
        $employee = Employee::all();
        $price = Price::all();
        $payment = Payment::findOrFail($id);

        return view('penggajian.payment.show',compact('employee', 'price', 'payment'));
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);

        $payment->update($request->all());
        
        return redirect('penggajian/payment')->with('toast_success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);

        $payment->delete($payment->all());
        
        return redirect('penggajian/payment')->with('toast_success', 'Data berhasil diubah');
    }
}
