<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('hotel')->get();
        return view('rooms.index', compact('rooms'));
    }

    public function storeAPI(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'type' => 'required',
            'accommodation' => 'required'
        ]);

        $room = Room::create($request->all());
        return response()->json($room, 201);
    }

    public function store(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'type' => 'required|in:Estándar,Junior,Suite',
            'accommodation' => 'required'
        ]);

        // Define reglas de acomodación según el tipo de habitación
        $valid_accommodations = [
            'Estándar' => ['Sencilla', 'Doble'],
            'Junior' => ['Triple', 'Cuádruple'],
            'Suite' => ['Sencilla', 'Doble', 'Triple']
        ];

        // Verifica que la acomodación sea válida para el tipo de habitación
        if (!in_array($request->accommodation, $valid_accommodations[$request->type])) {
            return redirect()->back()->withErrors(['accommodation' => 'Acomodación no permitida para este tipo de habitación.']);
        }

        Room::create($request->all());

        return redirect()->route('hotels.index')->with('success', 'Habitación agregada con éxito.');
    }

    public function create($hotelId)
    {
        $hotel = Hotel::findOrFail($hotelId);
        return view('rooms.create', compact('hotel'));
    }
}
