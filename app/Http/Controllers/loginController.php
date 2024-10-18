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
        // $username = 'admin';
        // $password = '200';
        // if ($username && $password) {
        //     return redirect()->route('pelanggan');
        // } else {
        //     return redirect()->route('login');
        // }
    }
}