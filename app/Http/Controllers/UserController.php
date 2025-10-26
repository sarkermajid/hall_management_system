<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $notification = [
            'message' => 'User Logout Successfully',
            'alert-type' => 'success',
        ];

        return redirect('/')->with($notification);
    }

    public function submitApplication(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:11|unique:users,phone',
            'reg_no' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'reg_no' => $request->reg_no,
            'department' => $request->department,
            'role_id' => 3,
        ]);

        $notification = array(
            'message' => 'Application Submitted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
    }

    public function ApplicantUsers()
    {
        $users = User::where('role_id', 2)->orderBy('id', 'DESC')->get();
        return view('admin.user.applicant_users', compact('users'));
    }

    public function ApplicantUserDelete(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->delete();

        $notification = array(
            'message' => 'Applicant User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
