@extends('navbar.tampilandasar')
@section('nav') 
    <div class="container bg-dark border border-2 border-danger pt-2 mt-4 rounded pb-3 ">
        <center>
            <h3 class="text-danger border-bottom border-danger">Materi</h3>
        </center>
        @foreach($materi as $ntr)
            <div class="row text-danger border-bottom  border-danger">
                <div class="col-1 border-left border-danger" style="font-weight:bold"><h3>{{ $ntr->id }}.</h3> </div>
                <div class="col-11"><h3><a href="materi/{{ $ntr->slug }} " class="text-decoration-none text-danger" > {{ $ntr->title }} </a></h3></div>
            </div>
        @endforeach
        </table>
    </div>
@endsection