@extends('navbar.tampilandasar')
@section('nav')

    <div class="container bg-dark pt-3 pb-3 border border-2 border-danger text-danger mt-5">
        <center>
            <h1 class="text-danger mb-4 border-bottom border-2 border-danger">Isi Data Berikut</h1>
        </center>
        <form action="uploadmateri" method="post">
            @csrf
            <div class="row">
                <div class="col-4 text-end">
                    <h4 class="text-danger">Judul :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="title" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Nama Pembuat :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="slug" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Mapel :</h4>
                </div>
                <div class="col-8">
                    <input type="text" name="materi" class="col-8 border-danger bg-dark text-danger text-center mb-4 rounded">
                </div>
                <div class="col-4 text-end">
                    <h4 class="text-danger">Isi :</h4>
                </div>
                <div class="col-8">
                    <textarea name="isi" id="" cols="50" rows="10" class="bg-dark border border-2 border-danger text-danger"></textarea>
                </div>
                <center>
                <button type="submit" class="btn btn-dark border-danger border-2 text-danger btn-md justify-content-end">Kirim</button>
                </center>
            </div>
        </form>
    </div>

@endsection