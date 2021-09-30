@extends('navbar.tampilandasar')
@section('nav')
    <div class="container bg-dark pt-2 pb-3 mt-3 border border-3 border-danger rounded">
        <div class="row border-bottom border-2 border-danger">
            <div class="col-3 text-danger mb-3">
                <center>
                <img src=" {{ $data->gender->gambar }} " alt="" class="rounded-circle">
                </center>
            </div>
            <div class="col-8 text-danger"  style="font-family:Helvetica, sans-serif">
                <h1 class="mt-4 border-bottom border-danger "> <center> {{ $data->name }} </center> </h1>
                <h5 class="mt-4">Alamat : {{ $data->alamat }} </h5>
                <h5 class="mt-4">Jenis Kelamin : {{ $data->gender->gender }} </h5>
                <h5 class="mt-4">Kelas : {{ $data->kelas->kelas }} </h5>
            </div>
        </div>
    </div>
@endsection