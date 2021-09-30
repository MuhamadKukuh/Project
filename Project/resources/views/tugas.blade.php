@extends('navbar.tampilandasar')
@section('nav') 
    <div class="container bg-dark border border-2 border-danger pt-2 mt-4 rounded pb-3 ">
        <table class="table table-striped">
        <thead>
            <tr class="text-danger">
                <th scope="row">ID</th>
                <td>Keterangan Tugas</td>
                <td>Tipe Tugas</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody class="border-bottom border-danger">
            <tr>
            <th scope="row" class="text-danger"> {{ $tulis->id }} </th>
            <td class="text-danger"> {{ $tulis->title }} <p class="text-danger"> {{ $tulis->text }} </p> </td>
            <td><button class="btn btn-sm btn-dark border border-danger border-2 text-danger"> {{ $tulis->slug }} </button></td>
            <td><button class="btn btn-sm btn-dark border border-danger text-danger border-2"> Mulai Kerjakan </button></td>
            </tr>
        </tbody>
        </table>
    </div>
@endsection