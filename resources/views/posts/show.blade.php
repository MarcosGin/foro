@extends('layouts/app')

@section('content')

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <p>Author: {{ $post->user->name }}</p>
@endsection