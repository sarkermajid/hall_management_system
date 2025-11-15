<?php

namespace App\Http\Controllers;

use App\Mail\StudentApprovedMail;
use App\Models\Hall;
use App\Models\Notice;
use App\Models\Room;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:11|unique:users,phone',
            'reg_no' => 'required|max:255|unique:users,reg_no',
            'department' => 'required|string|max:255',
            'gender' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->reg_no = $request->reg_no;
        $user->department = $request->department;
        $user->gender = $request->gender;
        $user->role_id = 3;
        $user->save();

        $room = Room::whereHas('Halls', function ($query) use ($request) {
            $query->where('gender', $request->gender);
        })
            ->where('available_seats', '>', 0)
            ->orderBy('available_seats', 'ASC')
            ->first();
        if (!$room) {
            return redirect()->route('home')->with([
                'message' => 'Currently no hostel seats are available.',
                'alert-type' => 'error'
            ]);
        }
        $user->room_id = $room->id;
        $user->hall_id = $room->hall_id;
        $user->status = 1;
        $user->room_allocated_at = now();
        $user->save();

        $room->available_seats -= 1;
        $room->save();

        return redirect()->route('home')->with([
            'message' => 'Application submitted and a room has been allocated successfully!
                        Please check your application status and upload your payment slip within 72 hours, otherwise your room allocation will be cancelled automatically.',
            'alert-type' => 'success'
        ]);
    }

    public function ApplicantUsers()
    {
        $authUser = auth()->user();

        $users = User::where('role_id', 3)
            ->when($authUser->role_id == 2, function ($query) use ($authUser) {
                $query->where('hall_id', $authUser->hall_id);
            })
            ->orderBy('id', 'DESC')
            ->get();

        $users = User::where('role_id', 3)
            ->when($authUser->role_id == 2, function ($query) use ($authUser) {
                $query->where('hall_id', $authUser->hall_id);
            })
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.user.applicant_users', compact('users'));
    }

    public function ApplicantUserAvailability($id)
    {
        $user = User::find($id);
        return view('admin.user.confirm_availability_user', compact('user'));
    }

    public function confirmAvailabilityUpdate(Request $request)
    {
        $request->validate([
            'password' => 'nullable|min:6',
        ]);

        $user = User::where('reg_no', $request->reg_no)->first();
        $user->status = $request->status;
        $user->expire_date = $request->expire_date;
        if ($request->status == 2 && $request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        $url = config('app.url') . 'user/login';
        $notification = array(
            'message' => 'Confirmed Applicant User Availability',
            'alert-type' => 'success'
        );
        // Mail::to($user->email)->send(new StudentApprovedMail($url, $user->email, $request->password));
        Mail::to('majidursarkar333@gmail.com')->send(new StudentApprovedMail($url, $user->name, $user->email, $request->password));
        return redirect()->route('applicant.users')->with($notification);
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
    public function UserLogin()
    {
        return view('frontend.login');
    }

    public function userDashboard()
    {
        return view('frontend.dashboard.user_dashboard');
    }

    public function downloadInvoice()
    {
        $user = auth()->user();

        $pdf = Pdf::loadView('frontend.dashboard.invoice', compact('user'));
        return $pdf->download('invoice_' . $user->reg_no . '.pdf'); // download with dynamic name
    }

    public function userNotice()
    {
        $notices = Notice::orderBy('id', 'DESC')->get();
        return view('frontend.dashboard.user_notice',compact('notices'));
    }

    public function userNoticeView($id)
    {
        $notice = Notice::findOrFail($id);
        return view('frontend.dashboard.user_notice_view',compact('notice'));
    }
}
