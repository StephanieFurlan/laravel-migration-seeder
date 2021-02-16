@extends('layout')

@section('content')
    @foreach ($articles as $article)
        <p>{{ $article->title }}</p>
    @endforeach
@endsection