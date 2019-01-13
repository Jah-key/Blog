@extends('Layouts.app')

@section('content')
    <div class="jumbotron">
            <h2>{{$blog->title}}</h2>
            <small>written on {{$blog->created_at}} by {{$blog->user->name}}</small>
    </div>
    <div class="container">
        <a href="/Blog" class="btn btn-primary"> Back </a>
        <hr>
        <p>
            {!!$blog->message!!}
        </p>            
        <hr>
        @if (!Auth::guest())
            @if(Auth::user()->id == $blog->user_id)
                <a href="/Blog/{{$blog->id}}/edit" class="btn btn-primary"> Edit</a>

                {!!Form::open(['action' => ['BlogsController@destroy', $blog->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif

    </div>

@endsection