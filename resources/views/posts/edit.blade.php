@extends('layout')
@section('content')
{!! Form::open(['action' => ['PostsController@update', $post->id] , 'method' => 'POST'] ) !!}
    {{Form::label('title','Title')}} <br>
    {{Form::text('title',$post->title, ['placeholder'=>'noice'])}} <br>
    {{Form::label('body','Body')}} <br>
    {{Form::textArea('body',$post->body, ['id'=>'article-ckeditor','placeholder'=>'Body Area'])}} <br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit')}}
{!! Form::close() !!}
@endsection