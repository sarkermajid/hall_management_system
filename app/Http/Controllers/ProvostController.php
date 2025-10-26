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

        $rawPassword = Str::random(10);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'hall_id'  => $request->hall_id,
            'password' => Hash::make($rawPassword),
            'role_id'  => 2
        ]);

        return redirect()->back()->with('success', 'Provost created successfully!');
    }
}
