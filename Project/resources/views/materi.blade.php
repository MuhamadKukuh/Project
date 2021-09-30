@extends('navbar.tampilandasar')
@section('nav')
    <div class="container bg-light pt-2 mt-4 rounded pb-3">
        <h1> {{ $materi->title }} </h1>
        <h6> {{ $materi->materi }} </h6>
         {!! $materi->isi !!} 
    </div>
@endsection