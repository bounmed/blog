@extends('layouts.app')

@section('content')
<h1>Blog :PPP</h1>
@foreach($articles as $article)
<h2>{{ $article->title }}</h2>
<p>{{ $article->subtitle }}</p>
@endforeach
@endsection
