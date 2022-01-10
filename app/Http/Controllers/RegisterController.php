<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.registrasi',[
            'title' => 'Registrasi'
        ]);
    }

    public function simpan(Request $request){
       $dataValidasi = $request->validate([
            'name' => 'required|min:2|max:30|',
            'username' => 'required|unique:users|min:4|max:50',
            'email' => 'email:rfc,dns|required|unique:users|max:65',
            'password' => 'required|min:5|max:150'
        ]);

        $dataValidasi['password'] = Hash::make($dataValidasi['password']);

        User::create($dataValidasi);
        $request->session()->flash('success','Registration Successful, Please Login!');
        return redirect('/login');

    }
}
