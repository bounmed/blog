@extends('layouts.app')

@section('content')

<a href='{{ URL::previous() }}'>Click here to go back</a>

<h1>Blog :PPP</h1>

<h2>{{ $article->title }}</h2>
<p><b>{{ $article->subtitle }}</b></p>
<p>{{ $article->content }}</p>

@endsection