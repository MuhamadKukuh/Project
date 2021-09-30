@extends('navbar.tampilandasar')
@section('nav')

    <div class="container">
        <div class="row">
            <div class="col-3 mt-4 bg-dark pt-2 pb-2 border border-2 rounded border-danger">
                <center><h6 class="border-bottom text-danger border-danger pb-2 ">Menu</h6></center>
                <h6 class="border-bottom border-danger pb-2 "><a href="semuatugas" class="text-decoration-none text-danger">Tugas</a></h6>
                <h6 class="border-bottom border-danger pb-2 "><a href="semuamateri" class="text-decoration-none text-danger">Materi</a></h6>
                <form action="/logout" method="post" class="border-bottom border-danger border-2">
                  @csrf
                  <button type="submit"  class="border-2 border-dark btn-dark text-danger mb-1">Logout</button>
                </form>
            </div>
            <div class="col-9">
                <div class="container bg-dark border border-2 border-danger mt-4 pt-1 pb-1 rounded">
                    <center>
                        <h3 class="text-danger border-bottom border-danger">Alamat</h3>
                    </center>
                    <small class="text-danger mt-3">Alamat: Jl Katapang Andir Km. 4  Telpon: 022 5893178</small>
                </div>
                <div class=" container">
                    <div class="row bg-dark border-danger border mt-3 border-2 rounded  pb-1 pt-1 text-danger ">
                        <center class="border-bottom border-danger">Pengumuman</center>
                        <h6 class="text-danger mt-2 border-bottom border-danger">Contoh </h5>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 bg-dark border border-2 border-danger mt-4 text-danger pb-3 pt-3 rounded">
                <h3 class="text-center border-bottom border-2 border-danger">Tugas</h3>
                @foreach($tugas as $tgs)
                <h5 class="border-bottom border-1 border-danger mt-3"><a href="/tugas/{{ $tgs->slug }}" class="text-decoration-none text-danger"> {{ $tgs->title }} </a></h5>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 bg-dark border border-2 border-danger mt-4 text-danger pb-3 pt-3 rounded">
                <h3 class="text-center border-bottom border-2 border-danger mb-4">Materi</h3>
                @foreach($materi as $ntr)
                <h5 class="border-bottom border-1 border-danger"><a href="/materi/{{ $ntr->slug }}" class="text-decoration-none text-danger"> {{ $ntr->title }} </a></h5>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3 bg-dark border border-2 rounded border-danger mt-5 pt-3 pb-3">
                <h3 class="text-center border-bottom border-danger f-b text-danger">Daftar Siswa</h3>
                @foreach($user as $usr)
                <h5 class="border-danger border-bottom mt-4"><a href="siswa/{{ $usr->name }}" class="text-decoration-none text-danger"> {{ $usr->name }} </a></h5>
                @endforeach
            </div>
            <div class="col-8 col-3 bg-dark border border-2 rounded border-danger mt-5 pt-3 pb-3" style="margin-left:40px">
                <h4 class="text-center text-danger f-b border-bottom border-danger ">Komentar</h4>
                @foreach($comment as $comm)
                    <h6 class="text-danger mb-3 mt-2 pb-1 border-bottom border-danger"> <img src="{{ $comm->user->gender->gambar }}" class="rounded-circle" style="width:40px" alt=""> <a href="siswa/{{ $comm->user->name }}" class="text-decoration-none text-danger">{{ $comm->user->name }} </a>: {{ $comm->comment }} </h6>
                @endforeach
                <div class="row">
                    <form action="comment" method="post">
                        @csrf
                        <input type="text" name="comment" class="col-10 border-danger rounded bg-dark text-danger" placeholder="Tulis Komentar..">
                        <button class=" btn btn-dark border-danger border-2 text-danger" type="submit" name="user_id" value="{{ auth()->user()->id}}" style="margin-left:10px">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection