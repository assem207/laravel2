@extends('layouts\app');

@section('content')
<h1 class="bg-info mt-5">{{$post->title}}</h1>
<img class="img-fluid" src="{{asset("uploads/$post->img")}}" width="300px">
<h5>{{$post->body}}</h5>
<p class="lead">{{$post->created_at}}</>
<br>

@endsection