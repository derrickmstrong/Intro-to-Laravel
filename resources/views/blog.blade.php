@extends('master')

@section('title', $blog->title)

@section('content')
    <div class="col"> 
        <h1>Day {{ $blog->id }}</h1>
        <h2>{{ $blog->title }}</h2> 
        <p class="small">
        {{-- format() and diffForHumans() comes with Carbon which is buil-into Laravel --}}
        {{-- <p>Posted {{ $blog->created_at->format('m/d/Y') }}</p> --}}
        Posted {{ $blog->created_at->diffForHumans() }} </p> 
        <p class="small">Tag: {{ $blog->tag }}</p>
        <p>{{ $blog->content }}</p>
        <a href="/">Go Back</a>
    </div>

@endsection