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
        @foreach($tugas as $tgs)
        <tbody class="border-danger">
            <tr >
            <th scope="row" class="text-danger border-bottom border-danger"> {{ $tgs->id }} </th>
            <td class="text-danger"> {{ $tgs->title }} <p class="text-danger"> {{ $tgs->text }} </p> </td>
            <td><button class="btn btn-sm btn-dark border border-danger border-2 text-danger"> {{ $tgs->slug }} </button></td>
            <td><button class="btn btn-sm btn-dark border border-danger text-danger border-2"> Mulai Kerjakan </button></td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
@endsection