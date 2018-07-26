
@extends('layout')
@section('content')
<h1>posts</h1>
<h3>
    
<ul> list of titles
@foreach($posts as $hell)

<li><a href="/posts/{{$hell->id}}">{{$hell->title}}</a></li>

{{--$id = $hell->user_id--}}

<h5>written on {{$hell->created_at}} by {{$hell->user->name}} </h5>    

@endforeach
</ul>

</h3>
{{$posts->links()}};
@endsection