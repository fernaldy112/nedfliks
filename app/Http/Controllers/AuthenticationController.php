<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginPostRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\ChangePasswordPostRequest;

class AuthenticationController extends Controller
{
    public function login_page(){
        return view("login");
    }

    public function register_page(){
        return view("register");
    }

    public function change_password_page(){
        return view("change-password");
    }

    public function login(LoginPostRequest $request){
        $login_data = $request->validated();

        $remember_me = $request["remember"] == "on";
    
        if (auth()->attempt(["email" => $login_data["nedfliks-email"], "password" => $login_data["nedfliks-password"]], $remember_me)){
            $request->session()->regenerate();
            return redirect("/");
        }

        return back()->withInput()->withErrors([
            "failedLogin" => "The email and password does not match.",
        ]);
    }

    public function register(RegisterPostRequest $request){
        $register_data = $request->validated();
        
        if ($register_data["nedfliks-password"] != $register_data["nedfliks-password_confirmation"]){
            return back()->withInput()->withErrors([
                "nedfliks-password_confirmation" => "The confirmation password does not match.",
            ]);
        }

        $new_user = new User();
        $new_user->username = $register_data["nedfliks-username"];
        $new_user->email = $register_data["nedfliks-email"];
        $new_user->password = $register_data["nedfliks-password"];
        $new_user->profile_picture_url = "img/profile-picture.png";
        $new_user->save();

        return redirect("/login")->with("nedfliks-email", $register_data["nedfliks-email"]);
    }

    public function change_password(ChangePasswordPostRequest $request){
        $change_password_data = $request->validated();
        $authenticated_user = Auth::user();

        if ($change_password_data["nedfliks-email"] != $authenticated_user["email"]){
            return back()->withInput()->withErrors([
                "nedfliks-email" => "The email is incorrect.",
            ]);
        }

        if (!auth()->attempt(["email" => $change_password_data["nedfliks-email"], "password" => $change_password_data["nedfliks-old-password"]])){
            return back()->withInput()->withErrors([
                "nedfliks-old-password" => "The old password is incorrect.",
            ]);
        }

        if ($change_password_data["nedfliks-new-password"] != $change_password_data["nedfliks-new-password_confirmation"]){
            return back()->withInput()->withErrors([
                "nedfliks-new-password_confirmation" => "The confirmation password does not match.",
            ]);
        }

        $user = User::find($authenticated_user->id);
        $user->password = $change_password_data["nedfliks-new-password"];
        $user->save();

        toast('Password has been changed','success');

        return back();
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
