@extends('layouts.main')

@section('container')
<article>
    <h2 class="mb-5">{{ $post->title }}</h2>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{{ $post->body }}</p>

    {{-- bisa jga pake ini {!! $post->body !!} untuk body post buat nge escape tag html yg ada di db kita contoh bisa liat 
    di https://youtu.be/o1em86nhU28?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&t=818--}}
</article>

<a href="/posts" class="d-block">Back to Posts</a>
@endsection