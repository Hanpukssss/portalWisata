<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'tourist_place_id',
        'visit_date',
        'quantity',
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function touristPlace()
    {
        return $this->belongsTo(TouristPlace::class);
    }
}
