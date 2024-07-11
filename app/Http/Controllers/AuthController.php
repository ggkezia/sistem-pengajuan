<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function __construct(){

    //     $this->middleware('guest', ['except' => ['logout']]);

    // }

    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        // $credentials = $request->only('email', 'password');
        // $auth = Auth::attempt($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role;

            if ($role == 'Admin') {
                return redirect('/biro3/home')->with('success', 'Berhasil Login');
            } elseif ($role == 'WR') {
                return redirect('/wr3/home')->with('success', 'Berhasil Login');
            } elseif ($role == 'BEMU') {
                return redirect('/bemu/home')->with('success', 'Berhasil Login');
            } else { 
                return redirect('/ukm/home')->with('success', 'Berhasil Login');
            } 
        } else {
            return back()->with('error', 'Email atau Password tidak sesuai');
        }

    }

    public function logout(Request $request)
    {
        $pengguna = Auth::user();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil Logout');
    }
}
