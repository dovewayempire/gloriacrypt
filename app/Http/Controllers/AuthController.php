<?php

namespace App\Http\Controllers;

use App\Models\Secret;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Jobs\SendWelcomeEmail;
class AuthController extends Controller
{
      public function getRegister(){
        return view('frontend.auth.registrastion');
      }
      public function postRegister(Request $request){

        $request->validate([

            'email' => 'required|unique:users|email|max:255',

            'password' => 'required|between:8,255|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);
        $user = new User;


        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        SendWelcomeEmail::dispatch($user);

        return redirect()->route('getLogin')->with('success', 'successfully Registered');
      }

      public function getLogin(){
        return view("frontend.auth.login");
      }
      public function postLogin(Request $request){

        $cred = $request->only('email', 'password');

        if(Auth::guard('web')->attempt($cred)){

            return redirect()->route('user.dashboard')->with('success','login successfully');
        }else{

            return  redirect()->route('getLogin')->with('error', 'invlaid credentials');
        }
      }


      public function Dashboard(){
             $secrets = Secret::where('users_id', "=", auth()->user()->id)->get();
            //  dd($secrets);
        return view('backend.user.pages.dasboard', compact('secrets'));
      }

      public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('getLogin')->with('success', 'Logged out successfully');
    }
}
