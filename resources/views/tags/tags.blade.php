
@extends('layouts\app')
@section('content')
@foreach($tags as $tag)
<h1 class="bg-info mt-5">{{$tag->name}}</h1>
<p class="lead">{{$tag->created_at}}</>
<hr>
@endforeach

@endsection
