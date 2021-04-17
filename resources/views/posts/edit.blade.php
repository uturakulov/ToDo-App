@extends('layouts.app')


@section('content')

    <h1>Edit ToDo</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostController@update', $post->id]]) !!}
    <div class="form-group">

        {{csrf_field()}}
        
        {!! Form::text('todo', null, ['class'=>'form-control', 'placeholder'=>'{{$post->todo}}']) !!}

    </div>
    {!! Form::submit('Edit', ['class'=>'btn btn-info']) !!}
    {!! Form::close() !!}

    {!! Form::model($post, ['method'=>'DELETE', 'action'=>['PostController@destroy', $post->id]]) !!}
        {{csrf_field()}}
        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection