<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $shops = Shop::find($request->shop_id);
        $request['user_id'] = $user->id;
        Reservation::create($request->only([
            'reserve_date', 'reserve_time', 'reserve_number', 'shop_id', 'user_id'
        ]));
        return view('done');
    }
}
