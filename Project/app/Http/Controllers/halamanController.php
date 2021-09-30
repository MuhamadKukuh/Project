<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tugas;
use App\user;
use App\gender;
use App\materi;
use App\kelas;
use App\comment;

class halamanController extends Controller
{
    public function index()
    {
        $tugas = tugas::all();

        return view('home', [
            'tugas' => $tugas,
            'title' => "home",
            'materi'=> materi::all(),
            'user'  => user::all(),
            'comment'=> comment::all()
        ]);
    }
    public function show($slug)
    {
        $slug = tugas::where('slug', $slug)->first();
        // dd($slug);

        return view('tugas', [
            "tulis" => $slug,
            "title" => "tugas",
        ]);
    }
    public function data($slug)
    {
        $salak = materi::where('slug', $slug)->first();
        return view('materi', [
            "title" => "Materi",
            "materi" => $salak
        ]);
    }
    public function profile()
    {
        return view('profile', [
            "title" => "profile"
        ]);
    }
    public function datas()
    {
        return view('semuatugas', [
            "tugas" => tugas::all(),
            "title" => "Semua Tugas"
        ]);
    }
    public function poi()
    {
        return view('semuamateri', [
            "title" => "Semua Materi",
            "materi"=> materi::all()
        ]);
    }
    public function siswa($name)
    {
        $siswa = user::where('name', $name)->first();
        
        return view('siswa', [
            "title" => "apahayo",
            "data"  => $siswa
        ]);
        
    }
}
