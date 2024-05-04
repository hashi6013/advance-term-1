<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Reservation;
use App\Models\Genre;
use App\Models\Area;
use App\Models\Favorite;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;



class ShopController extends Controller
{
    public function index(Favorite $favorite)
    {
        $shops = Shop::with('genre', 'area')->get();
        $genres = Genre::all();
        $areas = Area::all();
        return view('index', compact('shops', 'genres', 'areas'));
    }

    public function search(Request $request)
    {
        $query = Shop::query();
        $query = $this->getSearchQuery($request, $query);
        $shops = $query->get();
        $areas = Area::all();
        $genres =Genre::all();
        return view('index', compact('areas', 'genres', 'shops'));
    }

    private function getSearchQuery($request, $query)
    {
        if(!empty($request->keyword)) {
            $query->where('shop_name', 'like', '%' . $request->keyword . '%');
        }
        if(!empty($request->area_id)) {
            $query->where('area_id', '=', $request->area_id);
        }
        if(!empty($request->genre_id)) {
            $query->where('genre_id', '=', $request->genre_id);
        }
        return $query;
    }

    public function detail($id)
    {
        $detail = Shop::find($id);
        return view('detail', compact('detail'));
    }

    public function mypage()
    {
        $users = Auth::user();
        $profiles = Reservation::where('user_id',  '=', Auth::user()->id)->get();
        $favorites = Favorite::where('user_id', '=', Auth::user()->id)->get();
        return view('mypage', compact('users', 'profiles', 'favorites'));
    }
}
