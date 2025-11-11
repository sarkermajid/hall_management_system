<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function AdminLogin()
    {
        if (auth()->user()) {
            return view('admin.admin_dashboard');
        } else {
            return view('frontend.login');
        }
    }

    public function AdminDashboard()
    {
        $halls = Hall::all()->count();
        $totalSeats = Room::sum('total_seats');
        $availableSeats = Room::sum('available_seats');
        $provosts = User::where('role_id',2)->count();
        $approveStudents = User::where('role_id',3)->where('status',2)->count();
        $waitingStudents = User::where('role_id',3)->where('status',0)->count();
        return view('admin.index', compact('halls','totalSeats','availableSeats','provosts','approveStudents','waitingStudents'));
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $notification = [
            'message' => 'Logout Successfully',
            'alert-type' => 'success',
        ];

        return redirect('/')->with($notification);
    }

    public function AdminProfile()
    {
        $profile = User::find(auth()->user()->id);

        return view('admin.admin_profile', compact('profile'));
    }

    public function AdminProfileUpdate(Request $request)
    {
        $profile = User::find(auth()->user()->id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->save();
        $notification = [
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function AdminChangePassword()
    {
        $profile = User::find(auth()->user()->id);

        return view('admin.admin_change_password', compact('profile'));
    }

    public function AdminUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (! Hash::check($request->old_password, auth()->user()->password)) {
            $notification = [
                'message' => 'Old Password Does Not Match',
                'alert-type' => 'error',
            ];

            return redirect()->back()->with($notification);
        } else {
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password),
            ]);
            $notification = [
                'message' => 'Password Change Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->back()->with($notification);
        }
    }
}
