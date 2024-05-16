<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Genre;
use App\Models\Area;
use App\Models\Shop;
use App\Models\Reservation;
use App\Models\Review;

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

    public function done(OwnerRequest $request)
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

    public function ownerEdit(Request $request)
    {
        $shop = Shop::find($request->id);
        $areas = Area::all();
        $genres = Genre::all();
        return view('owner.edit', [
            'form' => $shop,
            'areas' => $areas,
            'genres' => $genres,
        ]);
    }

    public function ownerUpdate(OwnerRequest $request)
    {
        $img = $request->file('shop_image');
        $path = $img->store('shops', 'public');
        $form = $request->all();
        $form['shop_image'] = $path;
        unset($form['_token']);
        Shop::find($request->id)->update($form);
        return view('owner.update');
    }

    public function feedback(Request $request)
    {
        $feedback_lists = Review::where('shop_id', '=', $request->id)->get();
        return view('owner.feedback', compact('feedback_lists'));
    }
}
