@extends('navbar.tampilandasar')
@section('nav')

    <div class="bg-dark container mt-5 pt-3 pb-3 border border-2 border-danger rounded">
        <h3 class="text-danger text-center">Data Tugas</h3>
        <h6 class="text-center mt-4"><a href="upload" class="text-decoration-none pt-2 pb-2 rounded text-danger bg-dark border border-2 border-danger">Tambah Tugas</a></h6>
        <div class="container">
            <table class="table table-dark table-striped table-bordered text-danger border-danger mt-5">
                <thead class="">
                    <tr>
                        <th scope="row">No</th>
                        <th scope="col">Nama Tugas</th>
                        <th scope="col" class="text-center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tugas as $tgs)
                    <tr>
                        <th scope="row" class="text-danger"> {{ $tgs->id }} </th>
                        <td class="text-danger"> {{ $tgs->title }} </td>
                        <td>
                        <div class="row">
                                <div class="col-8">
                                    <form action="hapustugas/{{ $tgs->slug }}" method="post" class="">
                                        @csrf
                                        @method('delete')
                                        <button class="btn bg-dark border border-2 border-danger text-danger" onclick="return confirm('Yakin Mau Ngehapus')">Hapus</button>
                                    </form>
                                </div>
                                <div class="col-2">
                                <div class="bg-dark pt-1 pb-1 rounded border border-2 border-danger">
                                    <center>
                                        <a href="/dashboard/{{ $tgs->slug }}/edit" class="text-decoration-none text-danger text-center">Edit</a>
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <h3 class="text-danger text-center mt-5">Data Materi</h3>
        <h6 class="text-center mt-4"><a href="uploadmateri" class="text-decoration-none pt-2 pb-2 rounded text-danger bg-dark border border-2 border-danger">Tambah Materi</a></h6>
        <div class="container">
            <table class="table table-dark table-striped table-bordered text-danger border-danger mt-5">
                <thead class="">
                    <tr>
                        <th scope="row">No</th>
                        <th scope="col">Nama Tugas</th>
                        <th scope="col" class="text-center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materi as $tgs)
                    <tr>
                        <th scope="row" class="text-danger"> {{ $tgs->id }} </th>
                        <td class="text-danger"> {{ $tgs->title }} </td>
                        <td>
                        <div class="row justify-content-center">
                                <div class="col-3">
                                    <form action="hapusmateri/{{ $tgs->slug }}" method="post" class="">
                                        @csrf
                                        @method('delete')
                                        <button class="btn bg-dark border border-2 border-danger text-danger" onclick="return confirm('Yakin Mau Ngehapus')">Hapus</button>
                                    </form>
                                </div>
                                <div class="col-2">
                                <div class="bg-dark pt-1 pb-1 rounded border border-2 border-danger text-center">
                                        <a href="/dashboard/{{ $tgs->slug }}/editmateri" class="text-decoration-none text-danger">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection