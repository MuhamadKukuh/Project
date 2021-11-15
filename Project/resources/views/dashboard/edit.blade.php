@extends('navbar.tampilandasar')
@section('nav')

    <div class="container bg-dark border border-2 border-danger rounded mt-4 pt-3 pb-3">
        <form action="/dashboard/{{ $data->slug }}/update" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-4 text-end">
                    <h4 class="text-danger">Judul :</h4>
                </div>
                <div class="col-8">
                    @error('title')
                        <h6><small class="text-danger"> {{ $message }}(Judul Wajib Di Isi!) </small></h6>
                    @enderror
                    <input type="text" name="title" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->title }}">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Nama Pembuat :</h4>
                </div>
                <div class="col-8">
                    @error('nama')
                        <h6><small class="text-danger"> {{ $message }}(Nama Wajib Di Isi!) </small></h6>
                    @enderror
                    <input type="text" name="nama" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->nama }}">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Mapel :</h4>
                </div>
                <div class="col-8">
                    @error('mapel')
                        <h6><small class="text-danger"> {{ $message }}(Mapel Wajib Di Isi!) </small></h6>
                    @enderror
                    <input type="text" name="mapel" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->mapel }}">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">dajal :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="slug" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->slug }}">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Note :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="excerpt" class="col-4 border-danger bg-dark text-danger text-center mb-4 rounded" value="{{ $data->excerpt }}">
                    @error('excerpt')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <center>
                <button type="submit" name="id" value="{{ $data->id }}" class="btn btn-dark border-danger border-2 text-danger btn-md justify-content-end">Kirim</button>
                </center>
        </form>
    </div>

@endsection