@extends('layouts.app')


@section('content')

<ol>

    @foreach ($posts as $post)

        <li class="item"><a href="{{route('posts.show', $post->id)}}">{{$post->todo}}</a></li>
    @endforeach

</ol>


@endsection

