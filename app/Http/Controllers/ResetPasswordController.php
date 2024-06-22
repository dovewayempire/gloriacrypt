<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use DB;
use App\Models\User;
class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('frontend.auth.resetpasswordform', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
{
    // dd($request->all());
    $request->validate([
        'email' => 'required|email|exists:users',
        'password' => 'required|string|min:6|confirmed', // 'confirmed' ensures password_confirmation field matches password
        'password_confirmation' => 'required'
    ], [
        'password.confirmed' => 'The password confirmation does not match.'
    ]);

    $updatePassword = DB::table('password_resets')
                        ->where([
                          'email' => $request->email,
                          'token' => $request->token
                        ])
                        ->first();

    if(!$updatePassword){

        return redirect()->back()->with('error', 'Invalid token!');
    }
// Update the user's password
$user = User::where('email', $request->email)->first();
if (!$user) {
    return redirect()->back()->with('error', 'User not found!');
}
    $user = User::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);

    DB::table('password_resets')->where(['email'=> $request->email])->delete();
    return redirect()->route('getLogin')->with('success', 'Your password has been changed!');
}

}
