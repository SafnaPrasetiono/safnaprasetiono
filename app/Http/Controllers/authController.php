<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class authController extends Controller
{
    // show login pages
    public function login()
    {
        return view('auth.login-admin');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|min:10',
        ], [
            'email.required' => 'setidaknya masukan email',
            'email.min' => 'sepertnya bukan alamat email',
            'email.email' => 'sepertnya bukan alamat email',
            'email.unique' => 'alamat email ini sudah aktif',
            'email.max' => 'alamat email kamu terlalu panjang',

            'password.required' => 'setidaknya masukan password',
            'password.min' => 'Oops password anda telalu pendek',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data = admin::where('email', $request->email)->first();
            if ($data) {
                if (Hash::check($request->password, $data->password)) {
                    Auth::guard('admin')->loginUsingId($data->id_admin);
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->back()
                        ->withInput()->withErrors(['password' => 'Password anda salah!'])
                        ->with('password', 'Password anda salah!');
                }
            } else {
                return redirect()->back()
                    ->withErrors(['email' => 'Email anda tidak terdaftar!'])
                    ->withInput()->with('email', 'Email anda tidak terdaftar!');
            }
        }
    }

    // show signup pages
    public function signup()
    {
        return view('auth.signup-admin');
    }

    public function postSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'email' => 'required|email|unique:admins|max:100',
            'password' => 'required|confirmed|min:10',
            'password_confirmation' => 'required'
        ], [
            'fname.required' => 'setidaknya masukan nama depan',
            'fname.max' => 'oops nama depanmu terlalu panjang',
            'lname.required' => 'setidaknya masukan belakang belakang',
            'lname.max' => 'oops nama depanmu terlalu panjang',

            'email.required' => 'setidaknya masukan email',
            'email.min' => 'sepertnya bukan alamat email',
            'email.email' => 'sepertnya bukan alamat email',
            'email.unique' => 'alamat email ini sudah aktif',
            'email.max' => 'alamat email kamu terlalu panjang',

            'password.required' => 'setidaknya masukan password',
            'password.min' => 'Oops password anda telalu pendek',
            'password_confirmation' => 'setidaknya masukan konfirmasi password'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $username = $request->fname . $request->lname;
            try {
                admin::create([
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'username' => $username,
                    'email'    => $request->email,
                    'password' => bcrypt($request->password),
                    'avatar'   => 'sample.png'
                ]);
                return redirect()->route('admin.login')->with('success', 'Your account is active!');
            } catch (\Throwable $th) {
                return back()->with('error', 'Sorry database is pending!');
            }
        }
    }
}
