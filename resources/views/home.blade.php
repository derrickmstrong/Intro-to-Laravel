@extends('master')

@section('title', '100 Days...by D.Strong')

@section('content')

    <div class='row'>
        @foreach($blogs as $blog) 
            
                <div class="col-3">
                    <p>Day {{ $blog->id }}</p>
                    <h2>{{ $blog->title }}</h2> 
                    <p class="small">
                    {{-- format() and diffForHumans() comes with Carbon which is buil-into Laravel --}}
                    {{-- <p>Posted {{ $blog->created_at->format('m/d/Y') }}</p> --}}
                     Posted {{ $blog->created_at->diffForHumans() }} | Tag: {{ $blog->tag }}</p>
                    <p class="text-truncate">{{ $blog->content }}</p>
                    <a class="small float-right" href="/blog/{{$blog->id}}">Read More</a>
                </div>
                
           
        
        @endforeach
     </div>
@endsection