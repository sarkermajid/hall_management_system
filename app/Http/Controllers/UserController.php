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
            'reg_no' => 'required|string|max:255|unique:users,reg_no',
            'department' => 'required|string|max:255',
            'gender' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'reg_no' => $request->reg_no,
            'department' => $request->department,
            'gender' => $request->gender,
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

    public function applicationStatus()
    {
        return view('frontend.application_status');
    }

    public function checkApplicationStatus(Request $request)
    {
        $request->validate([
            'reg_no' => 'required|string|max:255',
        ]);

        $user = User::where('reg_no', $request->reg_no)->first();
        if (!$user) {
            $notification = [
                'message' => 'No applicant found with the provided registration number.',
                'alert-type' => 'error'
            ];

            return redirect()->route('applicationStatus')->with($notification);
        }
        return view('frontend.application_status', compact('user'));
    }

    public function paymentSlipUpload($reg_no)
    {
        $user = User::where('reg_no', $reg_no)->first();
        return view('frontend.payment_slip_upload', compact('user'));
    }

    public function submitPaymentSlip(Request $request)
    {
        $request->validate([
            'reg_no' => 'required|string|max:255',
            'payment_slip' => 'required|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);

        $user = User::where('reg_no', $request->reg_no)->first();

        if (!$user) {
            return redirect()->back()->with([
                'message' => 'Invalid registration number!',
                'alert-type' => 'error'
            ]);
        }

        if ($request->hasFile('payment_slip')) {
            if (!file_exists(public_path('payment_slips'))) {
                mkdir(public_path('payment_slips'), 0777, true);
            }

            $file = $request->file('payment_slip');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('payment_slips'), $filename);

            $user->payment_slip = $filename;
            $user->save();

            return redirect()->back()->with([
                'message' => 'Payment slip submitted successfully!',
                'alert-type' => 'success'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'No file received!',
            'alert-type' => 'error'
        ]);
    }
}
