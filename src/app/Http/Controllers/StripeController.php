<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use App\Models\Reservation;

class StripeController extends Controller
{
    public function paymentCreate(Request $request)
    {
        $payment = Reservation::find($request->id);
        return view('payment', compact('payment'));
    }

    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $charge = Charge::create(array(
            'amount' => 1000,
            'currency' => 'jpy',
            'source'=> request()->stripeToken,
        ));
        return redirect('mypage')->with('message', '決済が完了しました');
    }
}
