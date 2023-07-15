{{-- https://www.youtube.com/watch?v=9jrD0wcfq1g&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=4 --}}

{{-- memanggil layout main dengan @extends('')--}}
@extends('layouts.main')

{{-- menggunakan @section('') buat mengisi si isi @yield('container') yang dibuat sebelumnya di layouts main--}}
@section('container')
    <h1>Halaman Home</h1>
@endsection