<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'area_id',
        'genre_id',
        'shop_name',
        'shop_overview',
        'shop_image'
    ];

    public function area() {
        return $this->belongsTo('App\Models\Area');
    }

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function favorites() {
        return $this->hasMany('App\Models\Favorite');
    }

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

}
