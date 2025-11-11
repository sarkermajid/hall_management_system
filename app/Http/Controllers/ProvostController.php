<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ProvostCreateMail;
use App\Models\Hall;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            'password'   => 'required',
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

        $rawPassword = $request->password;

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'hall_id'  => $request->hall_id,
            'password' => Hash::make($rawPassword),
            'role_id'  => 2
        ]);


        $name = (string) $request->name;
        $email = (string) $request->email;
        $password = (string) $request->password;

        $notification = array(
            'message' => 'Provost Created Successfully',
            'alert-type' => 'success'
        );
        Mail::to('majidursarkar333@gmail.com')->send(new ProvostCreateMail($name, $email, $password));
        return redirect()->route('provost.index')->with($notification);
    }

    public function ViewProvost($id)
    {
        $provost = User::find($id);
        return view('admin.provost.view_provost', compact('provost'));
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
