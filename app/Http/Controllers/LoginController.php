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
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

<<<<<<< HEAD
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];


        if(Auth::attempt($credentials)) {
=======
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
>>>>>>> 506a9299a9e145e15867e701ec27da69b90f6a82
            $request->session()->regenerate();
            return redirect()->intended('register');
        } else {
            return back()->with('loginError', 'Login failed!');
        }

        
    }
}
