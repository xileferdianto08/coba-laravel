@extends('layouts.main')

@section('container')
    <h1>Halaman about</h1>
    {{-- penggunaan {{ $namaVariable }} untuk mendisplay data menggunakan template blade pada view yang berguna untuk meminimalisir serangan XSS (Cross Site Scripting) --}}

    <h3>{{ $name }}</h3> 
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle">
    
@endsection