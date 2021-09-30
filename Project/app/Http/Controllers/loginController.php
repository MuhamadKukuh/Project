<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// database Yang Di ambil
use App\user;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $data = user::all();

        $data = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }   

        return back()->with([
            'email' => 'Akun tidak Ditemukan',
        ]);
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
