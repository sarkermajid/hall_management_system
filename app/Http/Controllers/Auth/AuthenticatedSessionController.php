<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        $user = auth()->user();
        if (isset($user)) {
            $notification = [
                'message' => $user->name . ' Login Successfully',
                'alert-type' => 'success',
            ];

            if ($user->role_id == 3) {
                return redirect()->route('user.dashboard')->with($notification);
            }

            return redirect()->route('admin.dashboard')->with($notification);
        } else {
            $notification = [
                'message' => 'Your account has expired. Please contact administration.',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
