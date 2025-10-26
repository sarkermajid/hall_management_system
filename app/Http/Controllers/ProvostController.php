<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProvostController extends Controller
{
    public function Index()
    {
        $provosts = User::where('role_id', 2)->orderBy('id', 'DESC')->get();
        return view('admin.provost.index', compact('provosts'));
    }

    public function addProvost()
    {
        $halls = Hall::all();
        return view('admin.provost.add_provost', compact('halls'));
    }


    public function storeProvost(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:users,email',
            'hall_id' => 'required|integer',
        ]);

        $existingProvost = User::where('hall_id', $request->hall_id)
            ->where('role_id', 2)
            ->first();

        if ($existingProvost) {
            $notification = array(
                'message' => 'This hall already has a Provost!',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

        $rawPassword = Str::random(10);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'hall_id'  => $request->hall_id,
            'password' => Hash::make($rawPassword),
            'role_id'  => 2
        ]);

        $notification = array(
            'message' => 'Provost Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('provost.index')->with($notification);
    }

    public function DeleteProvost($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Provost Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('provost.index')->with($notification);
    }
}
