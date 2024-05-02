<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'rate',
        'comment',
    ];

    public function reservation() {
        return $this->belongsTo('App\Models\Reservation');
    }
}
