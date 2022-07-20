<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // $request->validate([
        //     'username' => 'required|string',
        //     'password' => "required|string"
        // ]);

        // $login = [
        //     'username' => $request->username,
        //     'password' => $request->password
        // ];

        // if (Auth::attempt($login)) {
        //     return redirect()->route('user.index');
        // } else {
        //     $errors = new MessageBag(['password' => ['username atau Password salah']]);
        //     return Redirect::back()->withErrors($errors);
        // }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!');
    }
}
