<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TouristPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TouristPlaceController extends Controller
{
    public function index()
    {
        $places = TouristPlace::with('category')->paginate(10);
        return view('admin.places.index', compact('places'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.places.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'category_id'=>'required|exists:categories,id',
            'description'=>'nullable|string',
            'image'=>'nullable|image|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images','public');
        }

        TouristPlace::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name.'-'.Str::random(4)),
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'location'=>$request->location,
            'ticket_price'=>$request->ticket_price,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'image'=>$imagePath
        ]);

        return redirect()->route('admin.places.index')->with('success','Tempat wisata dibuat.');
    }

    public function edit(TouristPlace $place)
    {
        $categories = Category::all();
        return view('admin.places.edit', compact('place','categories'));
    }

    public function update(Request $request, TouristPlace $place)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'category_id'=>'required|exists:categories,id',
            'image'=>'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($place->image) Storage::disk('public')->delete($place->image);
            $place->image = $request->file('image')->store('images','public');
        }

        $place->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name.'-'.Str::random(4)),
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'location'=>$request->location,
            'ticket_price'=>$request->ticket_price,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'image'=>$place->image
        ]);

        return redirect()->route('admin.places.index')->with('success','Tempat wisata diperbarui.');
    }

    public function destroy(TouristPlace $place)
    {
        if ($place->image) Storage::disk('public')->delete($place->image);
        $place->delete();
        return back()->with('success','Tempat wisata dihapus.');
    }
}
