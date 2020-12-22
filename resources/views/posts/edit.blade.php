@extends('layouts\app')

@section('content')
@include('layouts\errors')
<form method="post" action="{{url('posts/ubdate',$post->id)}}"enctype="multipart/form-data">

@csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">TITLE</label>
  <input type="text"name="title"value="{{$post->title}}" class="form-control">
</div>
<div class="mb-3">
  <label  class="form-label">BODY</label>
  <textarea  class="form-control"  name="body" rows="3" >{{$post->body}}</textarea>
 <div class="mb-3">
 <img class="img-fluid" src="{{asset("uploads/$post->img")}}"width="300px">
  <label  class="form-label">image</label>
  <input name="img"class="form-control" type="file">
</div>
</div>
<div class="text-center"><button class="btn btn-primary" type="submit">ubdate</button></div>
</form>
@endsection