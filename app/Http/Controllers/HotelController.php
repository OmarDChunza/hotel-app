<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function indexAPI()
    {
        //$hotels = Hotel::all();
        return response()->json(Hotel::all());
        //return response()->json(Hotel::with('rooms')->get());
    }

    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
        return response()->json(Hotel::all());
        //return response()->json(Hotel::with('rooms')->get());
    }

    public function storeAPI(Request $request)
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:hotels',
            'address' => 'required',
            'city' => 'required',
            'nit' => 'required|unique:hotels',
            'room_count' => 'required|integer'
        ]);

        Hotel::create($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hotel agregado con éxito.');
    }


    public function updateAPI(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        return response()->json($hotel);
    }

    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'nit' => 'required',
            'room_count' => 'required|integer'
        ]);

        $hotel->update($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hotel actualizado con éxito.');
    }


    public function destroyApi(Hotel $hotel)
    {
        $hotel->delete();
        return response()->json(null, 204);
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Hotel eliminado con éxito.');
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotels.edit', compact('hotel'));
    }

    

}

