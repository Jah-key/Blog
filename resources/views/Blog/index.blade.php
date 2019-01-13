@extends('Layouts.app')

@section('content')

        <div class="jumbotron">
            <h2 class="centre"> Welcome</h2>
        </div >
        <div class="container">
                @include('inc.messages') 
            @if (count($blogs) > 0)
                @foreach ($blogs as $blog)
                    <div class="container">
                            <div class="card card-body">
                                    <h3><a href="Blog/{{$blog->id}}">{{$blog->title}}</a></h3>
                                    <small>written at {{$blog->created_at}} by {{$blog->user->name}}</small>
                            </div>
                    </div>
                    <hr>
                @endforeach
                <hr>
                {{$blogs->links()}}
            @else
                <h2> No blogs here</h2>
            @endif
        </div>
@endsection