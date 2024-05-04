<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $user = Auth::user();
        $shops = Shop::find($request->shop_id);
        $request['user_id'] = $user->id;
        Reservation::create($request->only([
            'reserve_date', 'reserve_time', 'reserve_number', 'shop_id', 'user_id'
        ]));
        return view('done');
    }

    public function destroy(Request $request)
    {
        Reservation::find($request->id)->delete();
        return redirect('mypage')->with('message', '予約を取り消しました');
    }

    public function edit(Request $request)
    {
        $reservation = Reservation::find($request->id);
        return view('edit', ['form' => $reservation]);
    }

    public function update(ReservationRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Reservation::find($request->id)->update($form);
        return redirect('mypage')->with('message', '予約を変更しました');
    }
}
