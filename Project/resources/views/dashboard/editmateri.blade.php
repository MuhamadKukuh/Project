@extends('navbar.tampilandasar')
@section('nav')

    <div class="container bg-dark border border-2 border-danger rounded mt-4 pt-3 pb-3">
        <form action="/dashboard/{{ $data->slug }}/updatemateri" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-4 text-end">
                    <h4 class="text-danger">Judul :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="title" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->title }}">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Nama Pembuat :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="materi" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->materi }}">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Mapel :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="slug" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->slug }}">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Asem Wkwkw :</h4>
                </div>
                <div class="col-8">
                    <textarea name="isi" class="text-danger border border-danger border-2 rounded bg-dark" id="" cols="65" rows="10"> {{ $data->isi }} </textarea>
                </div>
                <center>
                <button type="submit" name="id" value="{{ $data->id }}" class="btn btn-dark border-danger border-2 text-danger btn-md justify-content-end">Kirim</button>
                </center>
        </form>
    </div>

@endsection