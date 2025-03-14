<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'type' => 'required',
            'accommodation' => 'required'
        ]);

        $room = Room::create($request->all());
        return response()->json($room, 201);
    }
}

