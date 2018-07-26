@extends('layout')
@section('content')
{!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST'] ) !!}
    {{Form::label('title','Title')}} <br>
    {{Form::text('title','', ['placeholder'=>'noice'])}} <br>
    {{Form::label('body','Body')}} <br>
    {{Form::textArea('body','', ['id'=>'article-ckeditor','placeholder'=>'Body Area'])}} <br>
    {{Form::submit('Submit')}}
{!! Form::close() !!}
@endsection