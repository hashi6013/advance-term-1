<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Genre;
use App\Models\Area;
use App\Models\Shop;
use App\Models\Reservation;

class OwnerController extends Controller
{
    public function owner()
    {
        $owner = Shop::where('user_id',  '=', Auth::user()->id)->first();
        return view('owner.home', compact('owner'));
    }

    public function shop()
    {
        $owners = Auth::user()::where('id',  '=', Auth::user()->id)->get();
        $areas = Area::all();
        $genres = Genre::all();
        return view('owner.add', compact('owners', 'areas', 'genres'));
    }

    public function done(Request $request)
    {
        $user = Auth::User();
        $request['user_id'] = $user->id;
        $img = $request->file('shop_image');
        $path = $img->store('shops', 'public');
        $shop_add = $request->only([
            'shop_name',
            'shop_overview',
            'area_id',
            'genre_id',
            'user_id',
            'shop_image',
        ]);
        $shop_add['shop_image'] = $path;
        Shop::create($shop_add);
        return view('owner.done');
    }

    public function list(Request $request)
    {
        $reserve_lists = Reservation::where('shop_id', '=', $request->id)->get();
        return view('owner.list', compact('reserve_lists'));
    }
}
