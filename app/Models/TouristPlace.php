<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TouristPlace extends Model
{
    protected $fillable = [
        'category_id','name','slug','description','location',
        'ticket_price','open_time','close_time','image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
