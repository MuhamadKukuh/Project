<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tugas;
use App\user;
use App\gender;
use App\materi;
use App\kelas;
use App\comment;

class uploadController extends Controller
{
    public function index(){
        return view('upload.upload', [
            "title" => "upload"
        ]);
    }
    public function upload(Request $request){
        $validated = $request->validate([
            'nama'  => 'required|min:3|max:50',
            'slug' => 'required|unique:tugas',
            'mapel'  => 'required|min:1|max:25',
            'excerpt'  => 'required|min:4',
            'title' => 'required',
        ]);
        // dd($validated);
        // Hash Digunakan Untuk mengenkripsi password

        tugas::create($validated);

        return redirect('semuatugas')->with('pesan', 'Tugas Berhasil Di upload');
    }

    public function show(){
        return view('upload.uploadmateri', [
            "title"    => "Judul"
        ]);
    }

    public function up(Request $request){
        $validated = $request->validate([
            'title'  => 'required|min:3|max:50',
            'slug' => 'required|unique:materis',
            'materi'  => 'required|min:1|max:25',
            'isi'  => 'required|min:4',
        ]);
        // dd($validated);

        materi::create($validated);

        return redirect('semuamateri')->with('pesan', 'materi Berhasil Di upload');
    }
}
