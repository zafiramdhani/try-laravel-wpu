@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $post->title }}</h2>  
    {!! $post->body !!}
  </article>

  <a href="/posts">Kembali ke posts</a>
@endsection