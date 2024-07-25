{{-- @dd($post) --}}

@extends('percobaan.main')
@section('navbar')
    <style>
        body{
            background-color: #323949;
            color: white;
        }
        .kui{
          color: rgb(0, 255, 145);
          font-family: Arial, Helvetica, sans-serif;
          margin: 10px;
        }

        .h3jika{text-transform: uppercase;}
        .pjika{margin-top: 10px; margin-bottom: 15px; margin-left: 40px;}
        .ajika{text-decoration: none; word-spacing: 10px; margin-bottom: 50px;}

    </style>

        <h1 style="text-align: center">Halaman Blog</h1>

        <div class="tempat">
            @foreach ($oppost as $i)  
        <a class="ajika" href="/nwpost/{{ $i->slug }}"><h3 class="kui h3jika">{{ $i->title }}</h3></a>
        <p class="pjika">{{ $i->excerpt }}</p>
    </div>
    @endforeach
        @endsection
        