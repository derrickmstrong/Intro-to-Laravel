@extends('master')

@section('title', '100 Days...by D.Strong')

@section('content')

<div class='row'>
    @foreach($blogs as $blog) 
        <div class="col-sm-4 m-3 p-0 card">
            <div class="card-header">
                Day {{ $blog->id }} - {{ strtoupper($blog->tag) }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text text-truncate">{{ $blog->content }}</p>
                <a href="/blog/{{$blog->id}}" class="btn btn-sm btn-primary float-right">Read More</a>
            </div>
            <div class="card-footer text-muted small">
                {{-- format() and diffForHumans() comes with Carbon which is buil-into Laravel --}}
                {{-- <p>Posted {{ $blog->created_at->format('m/d/Y') }}</p> --}}
                    Posted {{ $blog->created_at->diffForHumans() }}
            </div>
        </div>
    @endforeach
    </div>
    
@endsection