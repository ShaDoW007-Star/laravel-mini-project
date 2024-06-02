<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use Illuminate\Support\Facades\Hash;
use Exception;

class Makeuser extends Controller
{
    public function signup()
    {
        return view('layout.signup');
    }

    public function login()
    {
        return view('layout.login');
    }
    public function signup_validate(Request $request)
    {
        $request->validate(
            [
                'f_name' => 'required',
                'l_name' => 'required',
                'contact' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'cpassword' => 'required|same:password'
            ]
        );
        $makeuser = new employees();
        $makeuser->user_id = $request->user_id;
        $makeuser->f_name = $request->f_name;
        $makeuser->l_name = $request->l_name;
        $makeuser->contact = $request->contact;
        $makeuser->email = $request->email;
        $makeuser->password = bcrypt($request->password);
        $makeuser->save();

        return redirect("/login");
    }
    public function login_validate(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        $cred = employees::where("email", $request->input('email'))->first();
        try {
            $pass = Hash::check($request->input('password'), $cred->password);
        } catch (Exception $e) {
            return redirect()->back();
        }
        if ($cred && $pass) {
            return redirect("/");
        } else {
            return redirect()->back();
        }
    }
}
