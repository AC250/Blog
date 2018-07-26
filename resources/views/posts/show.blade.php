@extends('layout')
@section('content')
<h1 align="center">
{{$post->title}}
</h1>
<p align = "center"><small> written on {{$post->created_at}}</small></p>
<center> <small> by {{$post->user->name}}</small></center>

<p>{!!$post->body!!}</p>
@if(!auth::guest())
@if(auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit">Edit Article</a>
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete')}}
{!!Form::close()!!}
@endif
@endif
@endsection