
@extends('layouts\app')

@section('content')
<h1>laset books</h1>
@foreach($posts as $post)
<h2 class="bg-info">{{$post->title}}</h2>
<h3>{{$post->body}}</h3>
<p>created_at:{{$post->created_at}}</p>
<hr>
   @endforeach
   @endsection