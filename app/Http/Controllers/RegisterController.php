<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ' required | max:255',
            'username' => ['required', 'min:8', 'max:255', 'unique:data_kasbond'],
            'email' => 'required |email|unique:data_kasbond',
            'password' => 'required|min:5|max:255'
        ]);

        dd('done');
    }
}
