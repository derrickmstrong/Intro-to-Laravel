@extends('master')

@section('title', 'Create Blog')

@section('content')
<h2>Post a Blog Entry:</h2>
    <form action="/create" method="post">
        <input type="text" name="tag" placeholder="Tag">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{-- csrf_field creates a token to send with the post to verify that the request from its own app  --}}
        {{ csrf_field() }}
        <input type="submit" value="Post Blog">
    </form>

@endsection