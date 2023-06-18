<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;


class Authentication extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function doLogin(Request $request)
    {
        $data = array(
            "email" => $request->email,
            "password" => $request->password
        );
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            return redirect('/login')->with('pesan', 'username atau password anda salah');
        }
    }
    public function doLogout()
    {

    }
}
