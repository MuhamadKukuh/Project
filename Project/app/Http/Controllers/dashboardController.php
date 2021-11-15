<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tugas;
use App\user;
use App\gender;
use App\materi;
use App\kelas;
use App\comment;

class dashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard', [
            "title"     => "Dashboard",
            "tugas"     => tugas::latest()->get(),
            "materi"     => materi::latest()->get()
        ]);
    }
    public function delet(tugas $tugas){
        tugas::destroy($tugas->id);
        return redirect('dashboard');
    }
    public function destroy(materi $materi){
        materi::destroy($materi->id);
        return redirect('dashboard');
    }
    public function edit($slug){
        $tugas = tugas::where('slug', $slug)->first();
        return view('dashboard.edit', [
            "title" => "Edit",
            "data"  => $tugas
        ]);
    }
    public function update(Request $request, $slug){
        $tanda = tugas::where('slug', $slug)->first();
        $id    = $request['id'];

        $rules = [
            'title' => 'required',
            'excerpt'   => 'required',
            'mapel'     => 'required',
            'nama'  => 'required'
        ];
       if($request->slug != $tanda->slug){
           $rules['slug']   = 'required|unique:tugas';
       }

       $validasi = $request->validate($rules);

       tugas::where('id', $id)->update($validasi);

       return redirect('semuatugas')->with('message', 'Selamat Data Anda Berhasil DI Update');
    }
    public function edits($slug){
        $tugas = materi::where('slug', $slug)->first();
        return view('dashboard.editmateri', [
            "title" => "Edit",
            "data"  => $tugas
        ]);
    }
    public function updates(Request $request, $slug){
        $tanda = materi::where('slug', $slug)->first();
        $id    = $request['id'];

        $rules = [
            'title' => 'required',
            'isi'   => 'required|min:4',
            'materi'     => 'required',
        ];
       if($request->slug != $tanda->slug){
           $rules['slug']   = 'required|unique:materi';
       }

       $validasi = $request->validate($rules);

       materi::where('id', $id)->update($validasi);

       return redirect('semuamateri')->with('message', 'Selamat Data Anda Berhasil DI Update');
    }
}