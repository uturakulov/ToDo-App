@extends('layouts.app')


@section('content')

    <h1 class="title-create">Add ToDo</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'PostController@store', 'files'=>true]) !!}

    <div class="form-group">

        {!! Form::text('todo', null, ['class'=>'form-control', 'placeholder'=>'Add Your ToDo']) !!}

    </div>
    {!! Form::submit('Add', ['class'=>'btn btn-primary']) !!}
        {{csrf_field()}}
    {!! Form::close() !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ol>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{$error}}</li>
                @endforeach
            </ol>
        </div>
    @endif

    <a href="/posts" class="btn btn-primary">All Todos</a>


@endsection
