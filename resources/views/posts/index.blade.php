
@extends('layouts\app')
@section('content')
@foreach($posts as $post)
<h1 class="bg-info mt-5"><a href="{{url("posts/show/{$post->id}")}}">{{$post->title}}</a></h1>
<img class="img-fluid" src="{{asset("uploads/$post->img")}}" width="300px">
<h5>{{$post->body}}</h5>
<p class="lead">{{$post->created_at}}</>
<br>
<a class="btn btn-primary" href="{{url("posts/edit/{$post->id}")}}">Edit</a>
<a class="btn btn-danger" href="{{url("posts/delete/{$post->id}")}}">Delete</a>
<hr>
@endforeach
{{$posts->links()}}
@endsection

