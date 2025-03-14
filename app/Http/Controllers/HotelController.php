<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return response()->json(Hotel::with('rooms')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:hotels',
            'address' => 'required',
            'city' => 'required',
            'nit' => 'required|unique:hotels',
            'room_count' => 'required|integer'
        ]);

        $hotel = Hotel::create($request->all());
        return response()->json($hotel, 201);
    }

    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        return response()->json($hotel);
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return response()->json(null, 204);
    }
}

