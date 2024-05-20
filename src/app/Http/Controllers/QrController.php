<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;
use App\Models\Reservation;

class QrController extends Controller
{
    public function qr(Request $request)
    {
        $qr = Reservation::find($request->id);
        return view('qr', compact('qr'));
    }
}
