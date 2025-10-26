<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function Index()
    {
        $halls = Hall::orderBy('id','DESC')->get();
        return view('admin.hall.index',compact('halls'));
    }

    public function AddHall()
    {
        return view('admin.hall.add_hall');
    }

    public function StoreHall(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'total_capacity' => 'required|integer|min:1',
            'gender' => 'required',
        ]);

        Hall::insert([
            'name' => $request->name,
            'total_capacity' => $request->total_capacity,
            'gender' => $request->gender,
        ]);

        $notification = array(
            'message' => 'Hall Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('hall.index')->with($notification);
    }

    public function EditHall($id)
    {
        $hall = Hall::findOrFail($id);
        return view('admin.hall.edit_hall',compact('hall'));
    }

    public function UpdateHall(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'total_capacity' => 'required|integer|min:1',
            'gender' => 'required',
        ]);

        Hall::findOrFail($id)->update([
            'name' => $request->name,
            'total_capacity' => $request->total_capacity,
            'gender' => $request->gender,
        ]);

        $notification = array(
            'message' => 'Hall Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('hall.index')->with($notification);
    }

    public function DeleteHall($id)
    {
        Hall::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Hall Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('hall.index')->with($notification);
    }
}
