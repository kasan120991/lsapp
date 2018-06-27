@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card mb-3">
                <h3 class="card-header"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <div class="card-body">
                    <small class="text-muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection