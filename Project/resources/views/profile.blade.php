@extends('navbar.tampilandasar')
@section('nav')

    <div class="container bg-dark pt-2 pb-3 mt-3 border border-3 border-danger rounded">
        <div class="row border-bottom border-2 border-danger">
            <div class="col-3 text-danger mb-3">
                <center>
                <img src=" {{ auth()->user()->gender->gambar }} " alt="" class="rounded-circle">
                <button class="btn-dark border-danger border-3 rounded mt-3 text-danger"> Ubah Foto Profile </button>
                </center>
            </div>
            <div class="col-8 text-danger"  style="font-family:Helvetica, sans-serif">
                <h1 class="mt-4 border-bottom border-danger "> <center> {{ auth()->user()->name }} </center> </h1>
                <h5 class="mt-4">Alamat : {{ auth()->user()->alamat }} </h5>
                <h5 class="mt-4">Jenis Kelamin : {{ auth()->user()->gender->gender }} </h5>
                <h5 class="mt-4">Kelas : {{ auth()->user()->kelas->kelas }} </h5>
            </div>
        </div>
            <center>
            <form action="/logout" method="post">
                @csrf
                <button class="btn-dark btn-lg rounded border-danger text-danger border-3 mt-4">Logout</button>
            </form>
            </center>    
    </div>

@endsection