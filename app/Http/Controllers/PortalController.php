<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TouristPlace;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    // HOME PAGE
    public function index(Request $request)
    {
        $q = $request->input('q');
        $placesQuery = TouristPlace::with('category')->latest();

        if ($q) {
            $placesQuery->where(function ($query) use ($q) {
                $query->where('name', 'like', "%{$q}%")
                ->orWhere('location', 'like', "%{$q}%");
            });
        }

        $places = $placesQuery->paginate(9);
        $categories = Category::all();

        return view('layouts.home', compact('places','categories','q'));
    }

    // KATEGORI → PAKAI HALAMAN HOME
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $places = $category->touristPlaces()->with('category')->latest()->paginate(9);
        $categories = Category::all();

        // 🔥 pakai view HOME yang sama
        return view('layouts.home', [
            'places' => $places,
            'categories' => $categories,
            'category' => $category,
            'q' => null,
        ]);
    }

    // DETAIL WISATA → SEMENTARA PAKAI HOME
    public function show($slug)
    {
        $place = TouristPlace::where('slug', $slug)
            ->with('category')
            ->firstOrFail();

        $categories = Category::all();

        // 🔥 tampilkan 1 data di section yang sama
        return view('layouts.home', [
            'places' => collect([$place]),
            'categories' => $categories,
            'featuredPlace' => $place,
            'q' => null,
        ]);
    }
}
