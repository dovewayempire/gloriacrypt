<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendPasswordResetJob;
use App\Models\User;

use Illuminate\Support\Facades\Password;
class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('frontend.auth.forgetpassword');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'incorrect e-mailed your password reset link!');
        }

        SendPasswordResetJob::dispatch($user);

        return back()->with('success', 'We have e-mailed your password reset link!');
    }
}
