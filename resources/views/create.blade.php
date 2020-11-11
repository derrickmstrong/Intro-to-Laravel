@extends('master')

@section('title', 'Create Blog')

@section('content')
<h2>Post a Blog:</h2>
<form action="/create" method="post">
  <div class="row">
    <div class="col m-2">
      <input type="text" class="form-control" name="tag" placeholder="Tag">
    </div>
    <div class="col m-2">
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="col-12 m-2">
      <textarea class="form-control" name="content" placeholder="Content"></textarea>
    </div>
    <div class="col-2 m-2">
      <input type="submit" class="form-control btn btn-sm btn-primary"  value="Post Blog">
    </div>
    
</div>
{{-- csrf_field creates a token to send with the post to verify that the request from its own app  --}}
    {{ csrf_field() }}
  
</form>
   

@endsection