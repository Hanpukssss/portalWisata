<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\TouristPlace;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tourist_place_id' => 'required|exists:tourist_places,id',
            'visit_date' => 'required|date|after_or_equal:today',
            'quantity' => 'required|integer|min:1|max:20',
        ]);

        $place = TouristPlace::findOrFail($request->tourist_place_id);
        $total = ($place->ticket_price ?? 0) * $request->quantity;

        Order::create([
            'user_id' => $request->user()->id,
            'tourist_place_id' => $place->id,
            'visit_date' => $request->visit_date,
            'quantity' => $request->quantity,
            'total_price' => $total,
        ]);

        return back()->with('success', 'Tiket berhasil dipesan.');
    }
}
