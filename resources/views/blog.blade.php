@extends('master')

@section('title', $blog->title)

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-sm-10  m-3 p-0 card">
        <div class="card-header">
            Day {{ $blog->id }} - {{ strtoupper($blog->tag) }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $blog->title }}</h5>
            <p class="card-text">{{ $blog->content }}</p>
            <a href="/" class="btn btn-sm btn-primary float-right">Go Back</a>
        </div>
        <div class="card-footer text-muted small">
            {{-- format() and diffForHumans() comes with Carbon which is buil-into Laravel --}}
            {{-- <p>Posted {{ $blog->created_at->format('m/d/Y') }}</p> --}}
                Posted {{ $blog->created_at->diffForHumans() }}
        </div>
    </div>
</div>

@endsection