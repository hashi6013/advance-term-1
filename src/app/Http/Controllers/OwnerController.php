<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Genre;
use App\Models\Area;
use App\Models\Shop;

class OwnerController extends Controller
{
    public function owner()
    {
        return view('owner.home');
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
        $request['shop_image'] = $path;
        $shop_add = $request->only([
            'shop_name',
            'shop_overview',
            'area_id',
            'genre_id',
            'user_id',
            'shop_image',
        ]);
        Shop::create($shop_add);
        return view('owner.done');
    }
}
