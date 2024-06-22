<?php

namespace App\Http\Controllers;

use App\Mail\PasswordChangedMail;
use App\Models\Admin;
use App\Models\Secret;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function dashboard(){
        $users = User::select('email', 'created_at')->get();
        $totalusers = User::count();
        $totalsecrets = Secret::count();
        $totaladministrator = Admin::count();
        // dd($totalusers);
        return view('backend.admin.pages.dashboard', compact('users', 'totalusers', 'totalsecrets', 'totaladministrator'));
    }

    public function users(){
        $users = User::all();
        return view('backend.admin.pages.users', compact('users'));
    }
    public function secret(){
        $secrets = Secret::all();
        return view('backend.admin.pages.secrets', compact('secrets'));
    }


    public function getLogin(){
        return view('backend.admin.auth.login');
    }
    public  function postAdminLogin(Request $request){



            //   dd($request->all());
            // $request->validate([
            //     'email' => 'required|email',
            //     'password' => 'required',
            // ]);

                $cred = $request->only('email', 'password');

                if(Auth::guard('admin')->attempt($cred)){

                    return redirect()->route('admin.dashboard')->with('success','login successfully');
                }else{

                    return  redirect()->route('admin.login')->with('error', 'invalid credentials');
                }
        }
        public function GetResetPasswordForm(){
            return view('backend.admin.auth.forgetpassword');
           }

           public function sendResetLink(Request $request){

            $request->validate([
                'email' => 'required|email|exists:admins',
            ]);

            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
              ]);

            Mail::send('mail.admin.forgetpassword', ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            });

            return back()->with('success', 'We have e-mailed your password reset link!');

          }


          public function showFormReset(Request $request, $token = null){

              return  view("backend.admin.auth.changepassword")->with(['token'=>$token, 'email'=>$request->email]);

        }

        public function resetPassword(Request $request){
        //    dd($request->all());

        $request->validate([
            'email' => 'required|email|exists:admins',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
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

        $user = Admin::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        Mail::to( $request->email)->send(new PasswordChangedMail($request->password));
        return redirect()->route('welcome')->with('success', 'Your password has been changed!');

        }
        public function logOut(){
            Auth::guard('admin')->logout();

            return redirect()->route('welcome')->with('success', 'logout successfully');
         }
}
