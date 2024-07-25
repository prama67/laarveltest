
@extends('percobaan.main')
@section('navbar')
    <style>
        button{
            border: none;
            border-radius: 10px;
            background-color: black;
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            color: white;
            margin: 10px;
        }
        a{text-decoration: none; }
        button :hover{background-color: grey;}

        h1{
          font-family: Arial, Helvetica, sans-serif;
          margin: 10px;
          text-align: center;
        }
        h5{margin: 10px;}
        p{margin: 10px; padding: 5px;}
    </style>
    
{{--  ini judul --}}
   <h1>{{ $jipost ["title"] }}</h1>

   {{-- ini keterangan --}}
   {{ $Postingan->katagori->name }}

   {{-- ini isi --}}
        {!! $jipost->body !!}

        {{-- ini tombol --}}
    <a href="/blog">
        <button>kembali ke blog</button>
    </a>
@endsection