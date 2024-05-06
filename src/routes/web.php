<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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



Route::middleware('auth', 'verified')->group(function () {
    Route::get('/', [ShopController::class, 'index']);
    Route::get('/search', [ShopController::class, 'search']);
    Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);
    Route::get('/shop/favorite/{id}', [FavoriteController::class, 'favorite'])->name('shop.favorite');
    Route::get('/shop/unlike/{id}', [FavoriteController::class, 'unlike'])->name('shop.unlike');
    Route::post('/done', [ReservationController::class, 'store']);
    Route::get('/mypage', [ShopController::class, 'mypage']);
    Route::delete('/mypage/delete', [ReservationController::class, 'destroy']);
    Route::get('/mypage/edit', [ReservationController::class, 'edit']);
    Route::patch('/mypage/edit', [ReservationController::class, 'update']);
});

// 管理者用
// あとで、権限追加
Route::get('/admin/home', [AdminController::class, 'admin']);
Route::get('/admin/add', [AdminController::class, 'add']);
Route::post('/admin/done', [AdminController::class, 'store']);


