@extends('layouts\app')
@section('content')
<h3 class=" mt-5">serach result for:{{$keyword}}</h3>

@foreach($posts as $post)
<h3 class="bg-info mt-5">{{$post->title}}</h3>
<p>{{$post->body}}</p>

<hr>
 @endforeach
@endsection