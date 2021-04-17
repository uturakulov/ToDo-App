@extends('layouts.app')

@section('content')

    <h1 class="title-create">{{$post->todo}}</h1>
    <p>Created at: {{$post->created_at}}</p>

    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Update</a>
    <a href="/posts" class="btn btn-primary">All Posts</a>
    
@endsection