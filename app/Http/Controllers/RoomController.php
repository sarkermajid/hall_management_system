<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function Index()
    {
        $rooms = Room::orderBy('id', 'DESC')->get();
        return view('admin.room.index', compact('rooms'));
    }

    public function AddRoom()
    {
        $halls = Hall::all();
        return view('admin.room.add_room', compact('halls'));
    }

    public function StoreRoom(Request $request)
    {
        $request->validate([
            'hall_id' => 'required|exists:halls,id',
            'room_number' => 'required|integer|unique:rooms,room_number',
            'total_seats' => 'required|integer',
            'available_seats' => 'required|integer',
        ]);

        Room::insert([
            'hall_id' => $request->hall_id,
            'room_number' => $request->room_number,
            'total_seats' => $request->total_seats,
            'available_seats' => $request->available_seats,
        ]);

        $notification = array(
            'message' => 'Room Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('room.index')->with($notification);
    }

    public function EditRoom($id)
    {
        $room = Room::findOrFail($id);
        $halls = Hall::all();
        return view('admin.room.edit_room', compact('room', 'halls'));
    }

    public function UpdateRoom(Request $request)
    {
        $request->validate([
            'hall_id' => 'required|exists:halls,id',
            'room_number' => 'required|integer|unique:rooms,room_number',
            'total_seats' => 'required|integer',
            'available_seats' => 'required|integer',
        ]);

        Room::findOrFail($request->id)->update([
            'hall_id' => $request->hall_id,
            'room_number' => $request->room_number,
            'total_seats' => $request->total_seats,
            'available_seats' => $request->available_seats,
        ]);

        $notification = array(
            'message' => 'Room Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('room.index')->with($notification);
    }

    public function DeleteRoom($id)
    {
        Room::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Room Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('room.index')->with($notification);
    }
}
