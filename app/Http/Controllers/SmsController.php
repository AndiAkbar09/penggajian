<?php

namespace App\Http\Controllers;

use App\Sms;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function create()
    {
        return view('penggajian.sms.create');
    }

    public function send(Request $request)
    {
        $sms = Sms::create([
            'number' => $request->number,
            'text' => $request->text,
        ]);

        Nexmo::message()->send([
            'to'   => $request->number,
            'from' => 'Andii Akbar',
            'text' => $request->text
        ]);

        return redirect()->back()->with('toast_success', 'Successfully');
    }
}
