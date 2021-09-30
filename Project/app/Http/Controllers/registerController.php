<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// database Yang Di ambil
use App\user;
use App\gender;
use App\kelas;

class registerController extends Controller
{
    public function index(){
        return view('register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|min:3|max:50',
            'email' => 'required|unique:users|email:dns',
            'username'  => 'required|min:1|max:25',
            'password'  => 'required|min:4',
            'gender_id' => 'required',
            'alamat'    => '',
            'kelas_id'  => 'required'
        ]);
        // dd($validated);
        // Hash Digunakan Untuk mengenkripsi password

        $validated['password'] = Hash::make($validated['password']);

        user::create($validated);

        return redirect('/')->with('pesan', 'Registrasi Berhasil Silahkan Login');
    }
}
