<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class GeneralController extends Controller
// {
//     // public function index()
//     // {
//     //     return view('general.index');
//     // }

//     public function aksilogin(Request $request)
//     {
//         if ($request->isMethod('get')) {
//             $credentials = $request->validate([
//                 'email' => 'required|email',
//                 'password' => 'required',
//             ]);

//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();

//             // Redirect berdasarkan peran
//             $role = Auth::user()->role;
//             switch ($role) {
//                 case 'admin':
//                     return redirect()->route('biro3.home');
//                 case 'bemu':
//                     return redirect()->route('bemu.home');
//                 case 'wr':
//                     return redirect()->route('wr3.home');
//                 case 'ukm':
//                     return redirect()->route('ukm.home');
//                 default:
//                     return redirect()->route('home');
//             }
//         }

//         return redirect()->route('login')->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ])->withInput();
//     }
//     return view('auth.login');
//     }
// }
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class GeneralController extends Controller
{
    // public function index()
    // {
    //     $data = [];
    //     $data['title'] = 'Beranda';
    //     return view('general.index', $data);
    // }
    public function aksi_login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            switch (auth()->user()->role) {
                case 'ukm':
                    return redirect()->route('ukm.home');
                case 'admin':
                    return redirect()->route('biro3.home');
                case 'bemu':
                    return redirect()->route('bemu.home');
                case 'wr':
                    return redirect()->route('wr3.home');
                default:
                    return redirect()->route('home');
            }
        } else {
            return back()->with('loginError', 'Login Gagal');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
