<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // $data = $request->only('username','password');
        // if (Auth::attempt($data)) {
        //     $request->session()->regenerate();
        //     return redirect()-?route();
        // } 
    }
}