<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('login.login',[
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request){
        $cek_login = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|max:150'
        ]);

        if (Auth::attempt($cek_login)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard/beranda');
        }

        return back()->with('notifLogin', 'Maaf Cuy, Ora iso Login');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
