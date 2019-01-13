@extends('Layouts.app')

@section('content')
    <div class="jumbotron">
        <h1>Create a Post</h1>
    </div>
    <div class="container">
        {!! Form::open(['action' => ['BlogsController@update', $blog->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $blog->title, ['class' => 'form-control', 'placeholder' => 'Title', 'required'])}}
            </div>
            <div class="form-group">
                    {{Form::label('message', 'Message')}}
                    {{Form::textarea('message', $blog->message, ['class' => 'form-control', 'placeholder' => 'Your post here', 'required', 'id' =>'article-ckeditor'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection