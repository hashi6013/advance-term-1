<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ShopController::class, 'index']);
Route::get('/search', [ShopController::class, 'search']);
Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);
Route::post('/done', [ReservationController::class, 'store']);
Route::get('/shop/favorite/{id}', [FavoriteController::class, 'favorite'])->name('shop.favorite');
Route::get('/shop/unlike/{id}', [FavoriteController::class, 'unlike'])->name('shop.unlike');

// 後でメールを追加
Route::middleware('auth')->group(function () {
    Route::get('/mypage', [ShopController::class, 'mypage']);
});

Route::delete('/mypage/delete', [ReservationController::class, 'destroy']);