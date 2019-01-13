@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2> Your posts</h2>
                    <hr>
                    <table class="table table-striped">
                        <tr>
                            <th> Title </th>
                            <th></th>
                            <th></th>
                        </tr>
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{$blog->title}}</td>
                                    <td>
                                        <a href="/Blog/{{$blog->id}}/edit" class="btn btn-default"> Edit </a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['BlogsController@destroy', $blog->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                                <p>You have no posts</p>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
