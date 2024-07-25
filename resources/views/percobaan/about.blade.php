@extends('percobaan.main')

@section('navbar')
{{-- PR UNPAS --}}
<h1 style="text-align: center">Halaman About</h1>
<br><br>
<style>
    .center{
        text-align: center;
    }
</style>
<div class="center">
<h4>Nama : {{ $nama }}</h4>
<p>Kelas : {{ $kelas }}</p>
<p>rumah : {{ $rumah }}</p>
<img src="img/{{ $img }}" width="250">
</div>
@endsection
        
