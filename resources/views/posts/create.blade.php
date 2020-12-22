@extends('layouts\app')

@section('content')
@include('layouts\errors')

<form method="post" action="{{url('posts/store')}}" enctype="multipart/form-data">

@csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">TITLE</label>
  <input type="text"name="title" class="form-control">
</div>
<div class="mb-3">
  <label  class="form-label">BODY</label>
  <textarea class="form-control" name="body" rows="3"></textarea>
<div class="mb-3">
  <label  class="form-label">image</label>
  <input class="form-control"name="img" type="file">
</div>
</div>
<div class="text-center"><button class="btn btn-primary" type="submit">submit</button></div>
</form>
@endsection